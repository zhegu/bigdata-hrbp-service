<?php
//2.1.16 empDimissionWhereabouts
class EmpDimissionWhereabouts extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            "quitDirInRate"=>array(array(
                "proportion"=>"20%",
                "totalNum"=>"160"
            )),
            
            "quitDirOutRate"=>array(array(
                "proportion"=>"80%",
                "totalNum"=>"600"
            ))
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}