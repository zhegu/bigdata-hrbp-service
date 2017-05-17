<?php
//2.1.29 postInfoOverviewPng
class PostInfoOverviewPng extends CI_Controller {

    function index()
    {
        date_default_timezone_set('UTC');
        $time = date("Y-m-d H:i:s");
        $result = array("code"=>200, "status"=>"success", "message"=>"success","time"=>$time);
        $result["path"] = "iVBORw0KGgoAAAANSUhEUgAABVYAAAKWCAYAAACidsIoAACAAElEQVR42ux9CXgURfo+ioqgoAiCiEI4BAKI3EdISCAGAggEkpBJovz9uYqoIOEQIQhrmhtUFFHWaxcPZHcVdRV1dHFhOSdyDUsoAmmSL2SSTJhck4NLjv98PalJT6e70z1XJknX8/STSdLTajxrqKQEJYvxut7s0ErDXzf5m21J+8renZf4442aeyqpT1fmafd9aOd3cNc/rAl4e7dd1I7/Qm0VjFusQ6RWmITyrHf8qXupDTKHRKsGlbSNeXed6bGqtKF4+uaqy6ci93NVZr06zz9AKTn2ldCqzyd41VOn7hnJScN96UUjjFEeIrprPsksaqi2uE+rjo91YYv789n6c1VqmtrmXb6vZam+ucNy/tNkJ9jN2XupBNlrHmD0yh8Oa5YZB0si8sJ/1hd24QpFrC4HhhBOzJCYHZe7tA1C+dWdvcbOL7Usn548mKoihHAk8xkJPOm3jgZypVR5N/ysl+8OciKrvgK41VV9pQKaBIAS17ItppZFVJDFeftI7wvPeKhjGfVwQTKhElnI/50ghVfqQiQpO3xgk115XKM6PEFuoCCFYLoNePMdZmh1VrQikSHv99peRo/E1jtabdSBOe+En8cP2oaas2stIYsoFqRSu+dIqrARfXnXMMIo92cxyhnkF5o12rkobyhUesJe3PlGt5MRqoVHrA6P3u03mawW7WK1opWGk/ft09KifoNZYlb6eCMn7++";
        echo json_encode($result);
    }
}