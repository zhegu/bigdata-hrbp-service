<?php
//2.1.38 getVerifCode
class GetVerifCode extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "userName"=>"张三",
                "userAccountNum"=>"18500000000",
                "province"=>"江苏省",
                "city"=>"连云港市",
                "district"=>"",
                "street"=>"张三",
                "grid"=>"张三",
                "roleName"=>"地市",
                "postName"=>"总经理"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}