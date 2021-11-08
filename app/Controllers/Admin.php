<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        echo "hello";
    }

    public function insert()
    {
        $userModel = new Admin();
       
        $userdata = $userModel->insert_data(array(
            'username' => 'rahul@123',
            'type'    => 'customer',
            'gender'  => 'male',
            'age'     => 25,
            'country'    => 'india',
            'postarea'    => 'baijnath',
            'city'    => 'mandi',
            'coins'    => '200',
            'status'    => 'live',
            'profiletext'    => '',        
            'name'    => 'Rahul verma', 
            'residence'    => 'mohali', 
            'profession'    => '',
            'family'    => '', 
            'hobbies'    => '', 
        ));
    }
}

