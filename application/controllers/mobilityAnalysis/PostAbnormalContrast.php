<?php
//2.1.46 postAbnormalContrast
class PostAbnormalContrast extends CI_Controller {
    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "compareType"=>array("东城区","西城区","海淀区"),
                "data"=>array(
                    array("nama"=>"异常","value"=>array(10,20,30)),
                    array("nama"=>"正常","value"=>array(10,20,30))
                )
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}