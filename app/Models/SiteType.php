<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteType extends Model
{
    use HasFactory;

    /**
     * RELATIONSHIPS
     */

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
