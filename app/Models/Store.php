<?php

namespace App\Models;

use App\Models\Observers\StoreObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();

        static::observe(new StoreObserver());
    }

    public function logs()
    {
        return $this->hasMany(__NAMESPACE__ .'\StoreLog');
    }
}
