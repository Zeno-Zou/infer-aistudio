<?php
        //$aimg=$_POST['img'];
        //echo $img;
        $data  = $_POST["img"];
        //echo json_encode($data);
        $data=array("img"=>$data);
        $data=json_encode($data);
        //echo $data;
        $headerArray =array("Content-Type: application/json");
        $url="";//这里填写你的部署服务地址和apiKey，格式为https://aistudio.baidu.com/serving/online/xxxx?apiKey=xxxx
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headerArray);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        //$output=json_decode($output);
        echo "最有可能为：";
        echo substr($output, -4,1);
        //echo $output;
        curl_close($curl);

?>
