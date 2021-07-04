<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeviceSnmpDetail.
 *
 * @package App\Models
 *
 * @property  string  $sys_descr
 * @property  string  $sys_object_id
 * @property  int  $sys_uptime
 * @property  string  $sys_contact
 * @property  string  $sys_name
 * @property  string  $sys_location
 * @property  int  $sys_services
 */
class DeviceSnmpDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'sysDescr',
        'sysObjectID',
        'sysUpTime',
        'sysContact',
        'sysName',
        'sysLocation',
        'sysServices',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'device_snmp_details';

    /**
     * ------------------------------------------------------------------------
     * RELATIONSHIPS
     * ------------------------------------------------------------------------
     */

    /**
     * Returns the device for this entry.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
