<?php
//2.1.4 empInPostAbnormalCauseAnalysis
class EmpInPostAbnormalCauseAnalysis extends CI_Controller {

    function index()
    {
        
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
            "postAbnormalType" =>"岗位变动",
            "totalNum"=>"3",
            "proportion" =>"16%"
            ),
            array(
                "postAbnormalType" =>"离职",
                "totalNum"=>"12",
                "proportion" =>"68%"
            ),
            array(
                "postAbnormalType" =>"其他",
                "totalNum"=>"3",
                "proportion" =>"16%"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}