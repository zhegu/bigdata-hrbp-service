<?php
//2.1.43 quadrantCoordinatePoint
class QuadrantCoordinatePoint extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "workTimeOrigin"=>"50",
                "workPerformOrigin"=>"50",
                "workTimeTopPoint"=>"80",
                "workTimeBottomPoint"=>"20",
                "workPerformTopPoint"=>"80",
                "workPerformBottomPointTop"=>"20"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}