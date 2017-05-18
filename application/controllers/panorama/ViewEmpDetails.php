<?php
//2.1.3
class ViewEmpDetails extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(array( 
            "postName"=>"装维人员",
			"phoneNum"=>"185111111111",
            "isAbnormal"=>"是",
			"region"=>"北京市东城区某某大街",
            "cumulativeWorkDate"=>"2348",
			"onTheJobRate"=>"70%"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}