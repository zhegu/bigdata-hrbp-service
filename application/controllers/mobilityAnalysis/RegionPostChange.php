<?php
//2.1.10  regionPostChange   数据有问题 待定

class RegionPostChange extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(array(
            "index"=>"78"
        )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}