<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeviceSnmpSetting.
 *
 * @package App\Models
 *
 * @property int $device_id
 * @property bool $snmp_use_64_bit_counters
 * @property int $snmp_rediscovery_interval
 * @property int $snmp_poll_interval
 * @property string $snmp_version
 * @property int $snmp_port
 * @property int $snmp_retries
 * @property int $snmp_timeout
 * @property string $snmp_read_community
 * @property string $snmp_write_community
 * @property string $snmp_auth_level
 * @property string $snmp_auth_name
 * @property string $snmp_authentication_protocol
 * @property string $snmp_authentication_password
 * @property string $snmp_privacy_protocol
 * @property string $snmp_privacy_password
 */
class DeviceSnmpSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'snmp_rediscovery_interval',
        'snmp_poll_interval',
        'snmp_use_64_bit_counters',
        'snmp_version',
        'snmp_port',
        'snmp_retries',
        'snmp_timeout',
        'snmp_read_community',
        'snmp_write_community',
        'snmp_auth_level',
        'snmp_auth_name',
        'snmp_authentication_protocol',
        'snmp_authentication_password',
        'snmp_privacy_protocol',
        'snmp_privacy_password',
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
    protected $table = 'device_snmp_settings';

    /**
     * ------------------------------------------------------------------------
     * RELATIONSHIPS
     * ------------------------------------------------------------------------
     */

    /**
     * Returns the device for this setting entry
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
