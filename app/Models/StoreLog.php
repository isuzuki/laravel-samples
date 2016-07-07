<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreLog extends Model
{
    use SoftDeletes;

    public function store()
    {
        return $this->belongsTo(__NAMESPACE__ .'\Store');
    }
}
