<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeviceCheck.
 *
 * @package App\Models
 *
 * @property int $device_id
 * @property int $check_id
 * @property int $frequency
 * @property int $importance
 * @property int $allowed_failures
 * @property bool $is_disabled
 * @property string $disabled_from
 * @property string $disabled_until
 * @property string $last_check
 * @property float $check_duration
 * @property string $next_check
 */
class DeviceCheck extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'check_id',
        'frequency',
        'importance',
        'allowed_failures',
        'is_disabled',
        'disabled_from',
        'disabled_until',
        'last_check',
        'check_duration',
        'next_check',
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
    protected $table = 'device_entity_physical';
}
