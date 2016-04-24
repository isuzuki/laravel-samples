<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    public function sites()
    {
        return $this->belongsToMany(__NAMESPACE__ .'\Site');
    }
}
