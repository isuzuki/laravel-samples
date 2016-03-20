<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use SoftDeletes;

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
     * Get the discographies
     */
    public function discographies()
    {
        return $this->hasMany(__NAMESPACE__ .'\Discography');
    }

    /**
     * Get the musics
     */
    public function musics()
    {
        return $this->hasMany(__NAMESPACE__ .'\Music');
    }
}
