<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
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
     * Get the prefectures
     */
    public function prefectures()
    {
        return $this->hasMany(__NAMESPACE__ .'\Prefecture');
    }

    /**
     * Get the cities
     */
    public function cities()
    {
        return $this->hasManyThrough(__NAMESPACE__ .'\City', __NAMESPACE__ .'\Prefecture');
    }
}
