<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
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
    protected $table = 'private_enterprise_numbers';

    /**
     * Returns the Enterprise Name attribute without the words between parentheses
     *
     * @param $value
     *
     * @return string
     */
    public function getEnterpriseNameAttribute($value)
    {
        if(str_contains($value, '(')) {
            return trim(explode('(', $value)[0]);
        }

        return $value;
    }
}
