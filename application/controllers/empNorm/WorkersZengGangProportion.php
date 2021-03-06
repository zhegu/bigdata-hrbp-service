<?php
//2.1.25 WorkersZengGangProportion
class WorkersZengGangProportion extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            "increasingEmploymentNoRate"=>array(array(
                "proportion"=>"20%",
                "totalNum"=>"160"
            )),
            "increasingEmploymentYesRate"=>array(array(
                "proportion"=>"80%",
                "totalNum"=>"600"
            ))
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}