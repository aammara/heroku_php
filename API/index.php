<?php
  // example request: http://path/to/resource/Example?method=sayHello&name=World
  require_once "RESt_Server.php";
  $rest = new RestServer(Hello);
  $rest->handle();
  class Hello
  {
     public static function sayHello($name)
     {
  	return "Hello, " . $name;
     }
  }
?>