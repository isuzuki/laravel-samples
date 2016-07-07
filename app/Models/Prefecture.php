<?php

namespace App\Models;

use App\Models\Pivots\ItemPrefecture;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
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
     * Get the region
     */
    public function region()
    {
        return $this->belongsTo(__NAMESPACE__ .'\Region');
    }

    /**
     * Get the cities
     */
    public function cities()
    {
        return $this->hasMany(__NAMESPACE__ .'\City');
    }

    /**
     * Get the items
     */
    public function items()
    {
        return $this->belongsToMany(__NAMESPACE__ .'\Item')
            ->withPivot(ItemPrefecture::$columns);
    }
}
