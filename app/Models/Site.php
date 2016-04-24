<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;

    public function items()
    {
        return $this->belongsToMany(__NAMESPACE__ .'\Item');
    }
}
