<?php
//2.1.1
class EmpInPostSummary extends CI_Controller {

    function index()
    {      
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            "inPostYesRate"=>array(array("proportion"=>"44%","totalNum"=>"44")),
            "inPostNoRate"=>array(array("proportion"=>"56%","totalNum"=>"56"))
         );
        $result['data'] = $data;
        echo json_encode($result);
    }
    

}