<?php

namespace App\Http\Controllers;
use App\Model1;
use View;
use App\Http\Controllers\Controller;


class myController extends Controller
{
    public $model;
    public function __construct(){
        $this->model = new Model1();
    }
    public function invoke(){
        $users = $this->model->getAllUser();
        return view('myview',['users'=>$users]);
    }
    public function oneuser(){
        $user = $this->model->getUser('Nastya Kolos');
        return view('viewuser',['user'=> $user]);
    }
}
