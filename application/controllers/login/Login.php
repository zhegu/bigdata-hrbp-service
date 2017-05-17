
<?php

class Login extends CI_Controller {
    
    function index()
    {

        echo "helloworld!";
        $result = array("d"=>3);
        
        echo  json_encode($result);
    }


}