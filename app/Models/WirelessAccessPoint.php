<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WirelessAccessPoint
 * @package App\Models
 *
 * @property  int  $device_id
 * @property  string  $index
 * @property  string  $wap_uuid
 * @property  string  $name
 * @property  string  $physical_address
 * @property  string  $location
 * @property  int  $admin_status
 * @property  int  $led_status
 * @property  int  $power_status
 * @property  int  $uptime
 * @property  int  $wapp_uptime
 * @property  int  $wapp_join_uptime
 * @property  int  $max_client_limit
 * @property  int  $service_ssh_enabled
 * @property  int  $service_telnet_enabled
 */
class WirelessAccessPoint extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'index',
        'wap_uuid',
        'name',
        'physical_address',
        'location',
        'admin_status',
        'led_status',
        'power_status',
        'uptime',
        'wapp_uptime',
        'wapp_join_uptime',
        'max_client_limit',
        'service_ssh_enabled',
        'service_telnet_enabled',
    ];

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wireless_access_points';

    /**
     * ------------------------------------------------------------------------
     * ACCESSORS
     * ------------------------------------------------------------------------
     */

    public function getUptimeAttribute($value)
    {
        if ($value > 0) {
            return Carbon::now()
                ->subSeconds($value / 100)
                ->diffForHumans([
                    'parts'  => 3
                ]);
        }

        return $value;
    }

    /**
     * ------------------------------------------------------------------------
     * RELATIONSHIPS
     * ------------------------------------------------------------------------
     *
     * Wireless Access Point relationships with other models.
     */

    /**
     * Returns the Wireless Controller of this Wireless Access Point.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }

    /**
     * Returns client statistics for this Wireless Access Point.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientStatistics()
    {
        return $this->hasMany(WirelessAccessPointClientStatistics::class, 'wap_uuid', 'wap_uuid');
    }

    /**
     * Returns cpu statistics for this Wireless Access Point.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpuStatistics()
    {
        return $this->hasMany(WirelessAccessPointCpuStatistics::class, 'wap_uuid', 'wap_uuid');
    }
}
