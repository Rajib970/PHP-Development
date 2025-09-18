<?php

namespace App\Controllers;

class Welcome extends BaseController{

    public function index(){
        echo "Welcome to CI4";
    }

    public function test($name,$name2){
        echo "HI $name, $name2";
    }
}

?>