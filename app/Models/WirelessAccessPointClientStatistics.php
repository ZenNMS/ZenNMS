<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WirelessAccessPointClientStatistics
 *
 * @package App\Models
 *
 * @property  int  $active
 * @property  int  $associated
 * @property  string  $timestamp
 * @property  string  $wap_uuid
 */
class WirelessAccessPointClientStatistics extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wap_uuid',
        'timestamp',
        'associated',
        'active',
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
    protected $table = 'wireless_access_point_client_statistics';

    /**
     * ------------------------------------------------------------------------
     * RELATIONSHIPS
     * ------------------------------------------------------------------------
     *
     * Wireless Access Point relationships with other models.
     */

    /**
     * Get the Wireless Access Point of this metric.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wirelessAccessPoint()
    {
        return $this->belongsTo(WirelessAccessPoint::class, 'wap_uuid', 'wap_uuid');
    }
}
