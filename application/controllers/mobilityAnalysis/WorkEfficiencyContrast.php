<?php
//2.1.47 workEfficiencyContrast
class WorkEfficiencyContrast extends CI_Controller {
    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
            "workEfficiency"=>"高效",
            "proNum"=>"10"
            ),
            array(
                "workEfficiency"=>"勤奋",
                "proNum"=>"4"
            ),
            array(
                "workEfficiency"=>"懒惰",
                "proNum"=>"5"
            ),
            array(
                "workEfficiency"=>"低效",
                "proNum"=>"8"
            ),
            array(
                "workEfficiency"=>"普通",
                "proNum"=>"9"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}