<?php
//2.1.49 empZangGangStandardContrast
class EmpZangGangStandardContrast extends CI_Controller {
    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "normYesRateNum "=>"600",
                "normNoRateNum "=>"160"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}