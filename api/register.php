<?php 
// if($_SERVER['REQUEST_METHOD']== "POST"){

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Authorization, Content-Type");
    
    // get user data send from front end(client)
    $c_data=file_get_contents("php://input");

    // remeber , the data send to this server by the clinet, was sent in json, we now chanage to array
    $data=json_decode($c_data,true);
    
    if(isset($firstname)){
        echo $firstname=$data['firstName'];
        echo json_encode(array("msg"=>"seen user detailx", "name"=> $firstname));
    }
// }
// else{
//     echo "not a valid request";
// }

 ?>