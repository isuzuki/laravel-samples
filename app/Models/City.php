<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the prefecture
     */
    public function prefecture()
    {
        return $this->belongsTo(__NAMESPACE__ .'\Prefecture');
    }

    /**
     * Get the region
     */
    public function region()
    {
        return $this->prefecture()->getResults()
            ->belongsTo(__NAMESPACE__ .'\Region');
    }
}
