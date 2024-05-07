<?php

class HomeController{


    public function index(){


        $data = ["name"=>"Hanaa Hamdy"];
        $this->view('home',$data);

    }





}
