<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceEntityPhysical extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

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

    /**
     * Get entity class type
     *
     * @return string
     */
    public function class()
    {
        if ($this->class === null) {
            return '';
        }

        return match ($this->class) {
            1  => 'Other',
            2  => 'Unknown',
            3  => 'Chassis',
            4  => 'Backplane',
            5  => 'Container',
            6  => 'Power Supply',
            7  => 'Fan',
            8  => 'Sensor',
            9  => 'Module',
            10 => 'Port',
            11 => 'Stack',
            12 => 'CPU',
            13 => 'Energy Object',
            14 => 'Battery',
        };
    }

    /**
     * RELATIONSHIPS
     */

    /**
     * Get the node of this Entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
