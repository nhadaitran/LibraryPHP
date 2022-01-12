<?php

class BaseController
{
    public function view($view,$data = []){
        include_once "../view/".$view.".php";
    }
}