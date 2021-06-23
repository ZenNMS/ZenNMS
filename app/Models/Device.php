<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Class Device
 *
 * @property DeviceInterface $interfaces
 * @property DeviceEntityPhysical $inventory
 * @property Vendor $vendor
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
        'sysDescr',
        'sysObjectID',
        'sysUpTime',
        'sysContact',
        'sysName',
        'sysLocation',
        'sysServices',
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
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [
        'interfaces',
        'inventory',
        'neighbours',
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
        return 'devices_index';
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
