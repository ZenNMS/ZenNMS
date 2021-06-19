<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
