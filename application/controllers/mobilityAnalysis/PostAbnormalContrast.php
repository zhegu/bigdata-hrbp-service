<?php
//2.1.46 postAbnormalContrast
class PostAbnormalContrast extends CI_Controller {
    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(array(
            "normNoRateNum"=>"78",
            "normYesRateNum"=>"600"
        )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}