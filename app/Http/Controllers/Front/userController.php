<?php

namespace App\Http\Controllers\Front;

use stdClass;

class userController
{
    public function  showUserName()
    {
        return 'Ahmed EmamSSSSSSSSSSS';
    }

    public function  showMahaName()
    {
        return 'maha Abdo';
    }


    public function  getIndex()
    {

        // $obj = new \stdClass();
        // $obj->id = 5;
        // $obj->name = 'maha';
        // $obj->gender = 'female';

        $data = ['Ahmed', 'Bassem'];
        return view('welcome', compact('data'));
    }
}
