<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'asset_tag',
        'serial_number',
        'facility_id',
        'group_id',
        'role_id',
        'type_id',
        'status_id',
        'u_height',
        'order',
        'inner_depth',
        'inner_width',
        'outer_depth',
        'outer_Height',
        'outer_width',
        'notes',
        'tags',
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
    protected $table = 'racks';

    public function getTagsAttribute($value)
    {
        return explode(',', $value);
    }

    /**
     * RELATIONSHIPS
     */

    /**
     * Get the role of this rack.
     */
    public function role()
    {
        return $this->belongsTo(RackRole::class, 'role_id', 'id');
    }

    /**
     * Get the type of this rack.
     */
    public function type()
    {
        return $this->belongsTo(RackType::class, 'type_id', 'id');
    }
}
