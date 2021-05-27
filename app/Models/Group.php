<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * RELATIONSHIPS
     */

    /**
     * Get child groups recursively.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childs()
    {
        return $this->hasMany(Group::class)->with('childs');
    }

    /**
     * SCOPES
     */

    /**
     * Scope a query to only include groups in critical status.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCritical($query)
    {
        return $query->where('status_id', '=', StatusEnum::CRITICAL);
    }

    /**
     * Scope a query to only include down groups.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDown($query)
    {
        return $query->where('status_id', '=', StatusEnum::DOWN);
    }

    /**
     * Scope a query to only include root groups.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRoot($query)
    {
        return $query->whereNull('group_id');
    }

    /**
     * Scope a query to only include unmanaged groups.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnmanaged($query)
    {
        return $query->where('status_id', '=', StatusEnum::UNMANAGED);
    }

    /**
     * Scope a query to only include groups in unknown status.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnknown($query)
    {
        return $query->where('status_id', '=', StatusEnum::UNKNOWN);
    }

    /**
     * Scope a query to only include UP groups.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUp($query)
    {
        return $query->where('status_id', '=', StatusEnum::UP);
    }

    /**
     * Scope a query to only include groups in warning status.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWarning($query)
    {
        return $query->where('status_id', '=', StatusEnum::WARNING);
    }
}
