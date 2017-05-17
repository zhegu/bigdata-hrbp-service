<?php
class Blog extends CI_Controller {
    function index() {
        if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
             {
                if(isset($_GET["testId"]))//是否存在"id"的参数
                {
                        $testId=$_GET["testId"];//存在
                //      echo "testId:{$testId}";
                //      echo "<br/>";
                }else {
                        echo "testId no set!";
                }
                if(isset($_GET["value"]))//是否存在"id"的参数
                {
                  //      $value=$_GET["value"];//存在
                //      echo "value:{$value}";
                }else {
                        echo "value No set!";
                }
         }
         $array['response'] = array("name"=>"lizhe","sex"=>1);
         $jsonValue =  json_encode($array);
         echo $jsonValue;
         //echo 'haha';
         //return "this is test!";
         //$this->load->view('blogview');
    }
}