<?php
//2.1.19 empWorkEfficiencyMap
class EmpWorkEfficiencyMap extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "phoneNum"=>"10ac132be40b76685c8e4eb4c52028c1",
                "workingHours"=>"2",
                "workPerformance"=>"80"
            ),
            array(
                "phoneNum"=>"acedf79aa7039341d94e85c743fdd178",
                "workingHours"=>"3",
                "workPerformance"=>"90"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}