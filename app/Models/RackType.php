<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RackType extends Model
{
    use HasFactory;

    /**
     * Get the racks of this type.
     */
    public function racks()
    {
        return $this->hasMany(Rack::class, 'type_id', 'id');
    }
}
