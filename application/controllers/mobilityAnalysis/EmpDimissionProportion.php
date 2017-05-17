<?php
//2.1.14 empDimissionProportion
class EmpDimissionProportion extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
            "quitInclinationType"=>"高",
            "peoNum"=>"10",
            "proportion"=>"15%"               
            ),
            array(
                "quitInclinationType"=>"中",
            "peoNum"=>"20",
            "proportion"=>"20%"
            ),
            array(
                "quitInclinationType"=>"低",
            "peoNum"=>"15",
            "proportion"=>"15%"
            ),
            array(
                "quitInclinationType"=>"无离职倾向",
            "peoNum"=>"45",
            "proportion"=>"50%"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}