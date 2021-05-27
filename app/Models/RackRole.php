<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RackRole extends Model
{
    use HasFactory;

    /**
     * Return the racks of this role.
     */
    public function racks()
    {
        return $this->hasMany(Rack::class, 'role_id', 'id');
    }
}
