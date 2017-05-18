<?php
//2.1.28 userAuthInfo
class UserAuthInfo extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $data = array(
            array(
                "regionalScope"=>array(
                    array("region1"=>"连云港市","region2"=>"海州区","region3"=>"海州街道、幸福路街道、朐阳街道、洪门街道、新坝镇、锦屏镇、板浦镇、宁海街道、浦东街道、浦西街道、新东街道、新南街道、路南街道、新海街道、花果山街道、南城街道、云台街道、浦南镇、云台农场、南云台林场、岗埠农场"),
                    array("region1"=>"连云港市","region2"=>"连云区","region3"=>"墟沟街道、海州湾街道、连云街道、连岛街道、板桥街道、徐圩街道、朝阳街道、云山街道、宿城街道、高公岛街道、中云街道、猴嘴街道、东辛农场"),
                    array("region1"=>"连云港市","region2"=>"赣榆区","region3"=>"青口镇、柘汪镇、石桥镇、金山镇、黑林镇、厉庄镇、海头镇、塔山镇、赣马镇、班庄镇、城头镇、城西镇、宋庄镇、沙河镇、墩尚镇")
                ),
                "postList"=>array("渠道人员","装维人员","全部人员"),
            )
        );
        $result["data"] = $data;
        echo json_encode($result);
    }
}
