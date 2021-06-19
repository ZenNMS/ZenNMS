<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Device
 *
 * @property DeviceInterface $interfaces
 * @property DeviceEntityPhysical $inventory
 * @property Vendor $vendor
 */
class Device extends Model
{
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
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'devices';

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
     * Get the vendor of this device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor()
    {
       return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
}
