<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Music extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the artist that owns the music
     */
    public function artist()
    {
        return $this->belongsTo(__NAMESPACE__ .'\Artist');
    }

    public function discographies()
    {
        return $this->belongsToMany(__NAMESPACE__ .'\Discography');
    }
}
