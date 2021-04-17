<?php

namespace App\Http\Controllers;

use App\Models\Model1;

class DataController extends Controller
{
    public function submit()
    {
        $obj = new Model1();
        $obj->name = $_POST['name'];
        $obj->phone = $_POST['phone'];
        return view('afterdata', ['obj1' => $obj]);
    }
    public function getUsers()
    {
        $us = [
            'Alex' => 'last seen: 5 hours ago',
            'David' => 'last seen: recently',
            'Kristina' => 'last seen: month ago'
        ];
        $mod = new Model1();
        $mod->users = $us;
        return view('users', ['obj' => $mod]);
    }
}
