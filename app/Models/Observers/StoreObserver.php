<?php

namespace App\Models\Observers;

use App\Models\StoreLog;

class StoreObserver
{
    public function saved($model)
    {
        $log = new StoreLog();

        $log->store_id = $model->id;
        $log->name = $model->name;
        $log->save();
    }
}
