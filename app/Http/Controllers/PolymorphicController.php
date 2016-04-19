<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Staff;
use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function staff(Staff $staff)
    {
        $staff = $staff->find(1);
        foreach ($staff->photos as $photo) {
            echo $photo->path;
        }

        return;
    }

    public function order(Order $order)
    {
        $order = $order->find(1);
        foreach ($order->photos as $photo) {
            echo $photo->path;
        }

        return;
    }

    public function photo(Photo $photo)
    {
        $photo = $photo->find(1);
        echo 'order price : '. $photo->imageable->price .'<br />';

        $photo = $photo->find(2);
        echo 'staff name : '. $photo->imageable->name .'<br />';

        return;
    }
}
