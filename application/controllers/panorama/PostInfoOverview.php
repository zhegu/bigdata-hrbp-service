<?php
//2.1.2
class PostInfoOverview extends CI_Controller {

    function index()
    {          
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array("phoneNum"=> "10ac132be40b76685c8e4eb4c52028c1",
            "post"=>"渠道人员",
            "latitudeAndLongitud"=> "39.9152478931,116.4038206839",
            "isAbnormal"=>"是",
            "region"=>"江苏省_连云港市_赣榆县_新浦区",
            "postAbnormalTime"=>"2348"
            ),
            array("phoneNum"=> "11ac132be40b76685c8e4eb4c52028c1",
                "post"=>"装维人员",
                "latitudeAndLongitud"=> "39.9152478931,116.4038206839",
                "isAbnormal"=>"是",
                "region"=>"江苏省_连云港市_灌云县_朝阳区",
                "postAbnormalTime"=>"1348"
            ),
            array("phoneNum"=> "20ac132be40b76685c8e4eb4c52028c1",
                "post"=>"渠道人员",
                "latitudeAndLongitud"=> "39.9152478931,116.4038206839",
                "isAbnormal"=>"否",
                "region"=>"江苏省_连云港市_灌云县_朝阳区",
                "postAbnormalTime"=>"2138"
            ),
            array("phoneNum"=> "30ac132be40b76685c8e4eb4c52028c1",
                "post"=>"渠道人员",
                "latitudeAndLongitud"=> "39.9152478931,116.4038206839",
                "isAbnormal"=>"是",
                "region"=>"江苏省_连云港市_灌云县_朝阳区",
                "postAbnormalTime"=>"2348"
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }


}