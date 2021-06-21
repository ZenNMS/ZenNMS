<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * DeviceInterface
 *
 * @property  int  $device_id
 * @property  int  $index
 * @property  string  $name
 * @property  string  $alias
 * @property  string  $description
 * @property  int  $type_id
 * @property  int  $speed
 * @property  int  $mtu
 * @property  string $physical_address
 * @property  bool  $link_up_down_trap
 * @property  int  $admin_status
 * @property  int  $operational_status
 * @property  int  $last_change
 */
class DeviceInterface extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'index',
        'name',
        'alias',
        'description',
        'type_id',
        'speed',
        'mtu',
        'physical_address',
        'link_up_down_trap',
        'admin_status',
        'operational_status',
        'last_change',
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
    protected $table = 'device_interfaces';

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'interfaceAdminStatus',
        'interfaceOperationalStatus',
        'interfaceType',
    ];

    /**
     * Returns the name of the interface, based on preference.
     * - First interface name.
     * - Second interface description.
     * - Last interface alias.
     *
     * @return mixed
     */
    public function displayName()
    {
        if (!is_null($this->name) && $this->name !== '') {
            return $this->name;
        }

        if (!is_null($this->description) && $this->description !== '') {
            return $this->description;
        }

        if (!is_null($this->alias) && $this->alias !== '') {
            return $this->alias;
        }

        return 'Unnamed interface';
    }

    public function displayColor()
    {
        if ($this->admin_status === 1 && $this->operational_status === 1) {
            return 'text-green-500';
        }

        if ($this->admin_status === 2 && $this->operational_status === 2) {
            return 'text-red-500';
        }

        return 'text-gray-400';
    }

    /**
     * RELATIONSHIPS
     */

    /**
     * Get the device of this Interface
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    /**
     * Get the interface admin status.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function interfaceAdminStatus()
    {
        return $this->belongsTo(InterfaceStatus::class, 'admin_status', 'id');
    }

    /**
     * Get the interface operational status.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function interfaceOperationalStatus()
    {
        return $this->belongsTo(InterfaceStatus::class, 'operational_status', 'id');
    }

    /**
     * Get the interface type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function interfaceType()
    {
        return $this->belongsTo(InterfaceType::class, 'type_id', 'id')
            ->select(['id', 'type', 'description']);
    }
}
