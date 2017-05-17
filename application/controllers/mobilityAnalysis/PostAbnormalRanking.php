<?php
//2.1.13 postAbnormalRanking
class PostAbnormalRanking extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
            "region"=>"东城区",
            "totalNum"=> "300",
            "abnormalNum"=>"19"
                
            ),
            array(
                "region"=>"西城区",
            "totalNum"=> "320",
            "abnormalNum"=>"29"
            ),
            array(
                "region"=>"海淀区",
                "totalNum"=> "300",
                "abnormalNum"=>"19"
            ),
            array(
                "region"=>"顺义区",
                "totalNum"=> "100",
                "abnormalNum"=>"19"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}