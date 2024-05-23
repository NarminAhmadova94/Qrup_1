<?php



    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $a=$_POST["FULLNAME"];
        $b=$_POST["e-mail"];
        $c=$_POST["PHONE_NUMBER"];
        $d=$_POST["MESSAGE"];
        $e=$_POST["user"];
        
        if($a!=$e){
            echo "Your for is submetted.";
        }
  
}





?>