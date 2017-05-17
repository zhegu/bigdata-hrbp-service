<?php
//2.1.39 getTokenInfo
class GetTokenInfo extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $result["authToken"] = "7cdbc040-657a-4847-b266-7e31d9e2c300";
        $result["refreshToken"] = "4cdbc040-657a-4847-b266-7e31d9e2c3d9";
        $result["validDuration"] = "180";
        echo json_encode($result);
    }
}