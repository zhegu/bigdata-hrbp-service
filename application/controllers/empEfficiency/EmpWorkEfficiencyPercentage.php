<?php
//2.1.20 empWorkEfficiencyPercentage
class EmpWorkEfficiencyPercentage extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "assessment"=>"高效",
                "proNum"=>"10",
                "proportion"=>"10%"
            ),
            array(
                "assessment"=>"勤奋",
                "proNum"=>"4",
                "proportion"=>"15%"
            ),
            array(
                "assessment"=>"慵懒",
                "proNum"=>"5",
                "proportion"=>"25%"
            ),
            array(
                "assessment"=>"低效",
                "proNum"=>"8",
                "proportion"=>"20%"
            ),
            array(
                "assessment"=>"普通",
                "proNum"=>"9",
                "proportion"=>"30%"
            )
            
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}