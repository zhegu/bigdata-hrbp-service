<?php
//2.1.9   positionChangeWhole
class PositionChangeWhole extends CI_Controller {

    function index()
    {
        
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);

        $data = array(
            "inPostYesRate"=>array(array("proportion"=>"30%","totalNum"=>"63")),
            "inPostNoRate"=>array(array("proportion"=>"70%","totalNum"=>"742"))
         );
        $result['data'] = $data;
        echo json_encode($result);
    }


}