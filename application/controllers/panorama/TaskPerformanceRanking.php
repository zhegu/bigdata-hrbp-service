<?php
//2.1.45  全景式图- 工作效能评估  taskPerformanceRanking
class TaskPerformanceRanking extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
            "workEfficiency"=>"高效",
            "normalNum"=>"10",
            "abnormalNum"=>"2",
            ),
            array(
                "workEfficiency"=>"勤奋",
                "normalNum"=>"8",
                "abnormalNum"=>"4",
            ),
            array(
                "workEfficiency"=>"懒惰",
                "normalNum"=>"6",
                "abnormalNum"=>"5",
            ),
            array(
                "workEfficiency"=>"低效",
                "normalNum"=>"9",
                "abnormalNum"=>"8",
            ),
            array(
                "workEfficiency"=>"普通",
                "normalNum"=>"20",
                "abnormalNum"=>"3",
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}