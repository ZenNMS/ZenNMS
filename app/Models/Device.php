<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Class Device
 *
 * @property  int   $id
 * @property  string  $hostname
 * @property  string  $display_name
 * @property  string  $ip_address
 * @property  string  $ipv6_address
 * @property  bool  $is_dynamic_ip
 * @property  string  $dns
 * @property  string  $group
 * @property  int  $type_id
 * @property  int  $vendor_id
 * @property  string  $asset_tag
 * @property  int  $is_rackable
 * @property  string  $polling_method
 * @property  int  $status
 * @property  bool  $is_disabled
 * @property  string  $disabled_until
 * @property  bool  $is_ignored
 * @property  string  $ignored_until
 * @property  bool  $is_unmanaged
 * @property  string  $unmanaged_from
 * @property  string  $unmanaged_until
 * @property  string  $last_check
 * @property  string  $check_duration
 * @property  string  $next_check
 * @property  string  $last_discovery
 * @property  string  $discovery_duration
 * @property  string  $next_discovery
 * @property  string  $last_poll
 * @property  string  $poll_duration
 * @property  string  $next_poll
 * @property  DeviceInterface  $interfaces
 * @property  DeviceEntityPhysical  $inventory
 * @property  Vendor  $vendor
 * @property  WirelessAccessPoint  $wirelessAccessPoint
 */
class Device extends Model
{
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hostname',
        'display_name',
        'ip_address',
        'ipv6_address',
        'is_dynamic_ip',
        'dns',
        'group',
        'type_id',
        'vendor_id',
        'asset_tag',
        'is_rackable',
        'polling_method',
        'status',
        'is_disabled',
        'disabled_until',
        'is_ignored',
        'ignored_until',
        'is_unmanaged',
        'unmanaged_from',
        'unmanaged_until',
        'last_check',
        'check_duration',
        'next_check',
        'last_discovery',
        'discovery_duration',
        'next_discovery',
        'last_poll',
        'poll_duration',
        'next_poll',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'snmpDetails',
        'type',
    ];

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [
        'interfaces',
        'inventory',
        'neighbours',
        'wirelessAccessPoints',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'devices';

    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'devices';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $device = $this->only([
            'id',
            'hostname',
            'display_name',
            'ip_address',
            'ipv6_address',
            'dns',
            'sysDescr'
        ]);

        $device['interfaces'] = $this->interfaces()
            ->select([
                'physical_address',
            ])
            ->where('physical_address', '!=', '')
            ->get()
            ->pluck('physical_address')
            ->toArray();

        $device['inventory'] = $this->inventory()
            ->select([
                'serial_num',
                'model_name',
            ])
            ->whereNotNull('serial_num')
            ->get()
            ->toArray();

        $device['vendor'] = $this->vendor()
            ->select('enterprise_name')
            ->get()
            ->toArray();

        $device['wap'] = $this->wirelessAccessPoints()
            ->select('name', 'physical_address', 'ip_address')
            ->get()
            ->toArray();

        return $device;
    }

    /**
     * ------------------------------------------------------------------------
     * ACCESSORS
     * ------------------------------------------------------------------------
     */

    /**
     * Returns device uptime in human readable format.
     *
     * @param $value
     *
     * @return string
     */
    public function getSysUptimeAttribute($value)
    {
        if ($value > 0) {
            return Carbon::now()
                ->subSeconds($value / 100)
                ->diffForHumans([
                    'parts'  => 4,
                    'join'   => true
                ]);
        }

        return $value;
    }

    /**
     * ------------------------------------------------------------------------
     * RELATIONSHIPS
     * ------------------------------------------------------------------------
     *
     * Device relationships with other models.
     */

    /**
     * Get the ICMP settings for this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function icmpSettings()
    {
        return $this->hasOne(DeviceIcmpSetting::class);
    }

    /**
     * Get the Interfaces of this node.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interfaces()
    {
        return $this->hasMany(DeviceInterface::class);
    }

    /**
     * Get the Entity Physical records of this node.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventory()
    {
        return $this->hasMany(DeviceEntityPhysical::class);
    }

    /**
     * Get the neighbours of this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function neighbours()
    {
        return $this->hasMany(DeviceNeighbours::class);
    }

    /**
     * Get the SNMP details for this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function snmpDetails()
    {
        return $this->hasOne(DeviceSnmpDetail::class);
    }

    /**
     * Get the SNMP settings for this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function snmpSettings()
    {
        return $this->hasOne(DeviceSnmpSetting::class);
    }

    /**
     * Get the type of the device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(DeviceType::class, 'type_id');
    }

    /**
     * Get the vendor of this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    /**
     * Get all Wireless Access Points controlled by this WLC.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wirelessAccessPoints()
    {
        return $this->hasMany(WirelessAccessPoint::class);
    }

    /**
     * ------------------------------------------------------------------------
     * SCOPES
     * ------------------------------------------------------------------------
     *
     * Local scopes for easy filtering devices.
     */

    /**
     * Scope a query to only include disabled devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisabled($query)
    {
        return $query->where('is_disabled', true);
    }

    /**
     * Scope a query to only include enabled devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEnabled($query)
    {
        return $query->where('is_disabled', false);
    }

    /**
     * Scope a query to only include ICMP devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIcmpDevices($query)
    {
        return $query->where('polling_method', '=', 'ICMP');
    }

    /**
     * Scope a query to only include ignored devices.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIgnored($query)
    {
        return $query->where('is_ignored', true);
    }

    /**
     * Scope a query to only include managed devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeManaged($query)
    {
        return $query->where('is_unmanaged', false);
    }

    /**
     * Scope a query to only include never checked devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNeverChecked($query)
    {
        return $query->whereNull('last_check');
    }

    /**
     * Scope a query to only include never polled devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNeverPolled($query)
    {
        return $query->whereNull('last_poll');
    }

    /**
     * Scope a query to only include new devices.
     *
     * @param   \Illuminate\Database\Eloquent\Builder  $query
     *
     * @return  \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNewdevices($query)
    {
        return $query
            ->enabled()
            ->managed()
            ->neverChecked()
            ->neverPolled();
    }

    /**
     * Scope a query to only include new ICMP devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNewIcmpDevices($query)
    {
        return $query->newDevices()->icmpDevices();
    }

    /**
     * Scope a query to only include new SNMP devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNewSnmpDevices($query)
    {
        return $query->newDevices()->snmpDevices();
    }

    /**
     * Scope a query to only include SNMP devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSnmpDevices($query)
    {
        return $query->where('polling_method', '=', 'SNMP');
    }

    /**
     * Scope a query to only include unmanaged devices.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnmanaged($query)
    {
        return $query->where('is_unmanaged', true);
    }

}
