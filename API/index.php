<?php
  // example request: http://path/to/resource/Example?method=sayHello&name=World
  require_once "REST_Server.php";
  $rest = new RestServer(Hello);
  $rest->handle();
  class Hello
  {
     public static function sayHello($name)
     {
  	    return "Hello, " . $name;
     }
     
     public static function sayGoodBye($name)
     {
  	    return "Goodbye, " . $name;
     }
     
     public static function turnOn($name)
     {
  	    return $name . " is ON now";
     }
  }
?>