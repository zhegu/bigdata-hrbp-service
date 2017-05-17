<?php
//2.1.15 EmpDimissionInclination
class EmpDimissionInclination extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "workEfficiency"=>"高效",
                "turnoverInttalNum"=>"10",
                "totalNum"=>"110"
            ),
            array(
                "quitInclinationType"=>"勤奋",
                "peoNum"=>"4",
                "proportion"=>"95"
            ),
            array(
                "quitInclinationType"=>"懒惰",
                "peoNum"=>"5",
                "proportion"=>"90%"
            ),
            array(
                "quitInclinationType"=>"低效",
                "peoNum"=>"8",
                "proportion"=>"87"
            ),
            array(
                "quitInclinationType"=>"普通",
                "peoNum"=>"9",
                "proportion"=>"55"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}