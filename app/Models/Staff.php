<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function photos()
    {
        return $this->morphMany(__NAMESPACE__ .'\Photo', 'imageable');
    }
}
