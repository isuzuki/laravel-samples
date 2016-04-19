<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function photos()
    {
        return $this->morphMany(__NAMESPACE__ .'\Photo', 'imageable');
    }
}
