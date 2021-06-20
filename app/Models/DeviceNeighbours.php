<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceNeighbours extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'time_mark',
        'local_port_number',
        'index',
        'chassis_id_subtype',
        'chassis_id',
        'port_id_subtype',
        'port_id',
        'port_description',
        'sys_name',
        'sys_description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'device_lldp_neighbours';

    public function getChassisIdSubtypeAttribute($value)
    {
        return $this->getLldpSubType($value);
    }

    public function getPortIdSubtypeAttribute($value)
    {
        return $this->getLldpSubType($value);
    }

    private function getLldpSubType($value)
    {
        return match ($value) {
            1 => 'chassisComponent',
            2 => 'interfaceAlias',
            3 => 'portComponent',
            4 => 'macAddress',
            5 => 'networkAddress',
            6 => 'interfaceName',
            7 => 'local',
        };
    }
}
