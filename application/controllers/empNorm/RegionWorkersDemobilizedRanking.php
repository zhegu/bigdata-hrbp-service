<?php
//2.1.24 regionWorkersDemobilizedRanking
class RegionWorkersDemobilizedRanking extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "region"=>"朝阳区",
                "nonStandardNum"=>"3",
                "totalNum"=>"60",
                "proportion"=>"5%"
            ),
            array(
                "region"=>"东城区",
                "nonStandardNum"=>"12",
                "totalNum"=>"48",
                "proportion"=>"25%"
            ),
            array(
                "region"=>"西城区",
                "nonStandardNum"=>"3",
                "totalNum"=>"40",
                "proportion"=>"5%"
            ),
            array(
                "region"=>"通州区",
                "nonStandardNum"=>"3",
                "totalNum"=>"38",
                "proportion"=>"5%"
            ),
            array(
                "region"=>"顺义",
                "nonStandardNum"=>"12",
                "totalNum"=>"28",
                "proportion"=>"27%"
            )

        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}