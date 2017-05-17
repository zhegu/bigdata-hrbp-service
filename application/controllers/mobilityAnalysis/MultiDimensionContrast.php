<?php
//2.1.11 multiDimensionContrast
class MultiDimensionContrast extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
         $data = array(
            "inPostYesRate"=>array(array("proportion"=>"50%","totalNum"=>"58")),
            "inPostNoRate"=>array(array("proportion"=>"50%","totalNum"=>"58"))
         );
        $result["data"] = $data;
        echo json_encode($result);
    }


}