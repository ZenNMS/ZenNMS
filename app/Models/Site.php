<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

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
    protected $table = 'sites';

    public function htmlAddress()
    {
        if($this->address) {
            return implode('', [
                '<address>',
                $this->address->street_name.' '.$this->address->street_number.'<br>',
                $this->address->zip.', '.$this->address->city.'<br>',
                $this->address->country,
                '</address>',
            ]);
        }

        return '';
    }

    public function htmlMarker()
    {
        if($this->address !== null) {
            return implode('', [
              '<div class="text-left text-dark-50">',
                '<h4 class="text-dark-75">'.$this->name.'</h4>',
                '<address>',
                  $this->address->street_name.' '.$this->address->street_number.'<br>',
                  $this->address->zip.', '.$this->address->city.'<br>',
                  $this->address->country,
                '</address>',
              '</div>'
            ]);
        }

        return implode('', [
          '<div class="text-left text-dark-50">',
            '<h4 class="text-dark-75">'.$this->name.'</h4>',
          '</div>'
        ]);
    }

    /**
     * RELATIONSHIPS
     */

    /**
     * Get the site address.
     */
    public function address()
    {
        return $this->hasOne(SiteAddress::class);
    }

    /**
     * Get the site type.
     */
    public function type()
    {
        return $this->hasOne(SiteType::class);
    }
}
