<?php
//2.1.17 empDimissionCityDetails
class EmpDimissionCityDetails extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "cityLevel"=>"一线城市",
                "totalNum"=>"20",
                "proportion"=>"10%"
            ),
            array(
                "cityLevel"=>"二线城市",
                "totalNum"=>"20",
                "proportion"=>"10%"
            ),
            array(
                "cityLevel"=>"三线城市",
                "totalNum"=>"20",
                "proportion"=>"10%"
            ),
            array(
                "cityLevel"=>"四线城市",
                "totalNum"=>"20",
                "proportion"=>"10%"
            ),
            array(
                "cityLevel"=>"五线城市",
                "totalNum"=>"50",
                "proportion"=>"45%"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}