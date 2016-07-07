<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemPrefecture extends Pivot
{
    public static $columns = [
        'title',
    ];
}
