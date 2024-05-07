<?php



class app{

 protected $controller = "HomeController";

 protected $action ="index";

 protected $params=[];

 public function __construct() {

   $this->prepareURL();
   $this->render();

 }
  
   private function prepareURL()

  {
    $url = $_SERVER['QUERY_STRING'];

    if(!empty($url))
   {
    $url = trim($url,"/");

    $url = explode("/",$url);

    $this->controller = isset($url[0]) ? ucwords($url[0])."controller":"HomeController" ;

    // define the action

    $this->action = isset($url[1]) ?  $url[1] : "index";
    unset($url[0],$url[1]);

    $this->params = !empty($url) ? array_values($url) : [];

    var_dump($this->params);
   }
  }
    

  private function render(){
   

    if(class_exists($this->controller)){
         
      $controller = new $this->controller;

     if (method_exists($controller.$this->action)){

     }else{
       echo "method not found";
     }

    }else{

      echo "This controller :".$this->controller."Not Exist";
    }

  }



}