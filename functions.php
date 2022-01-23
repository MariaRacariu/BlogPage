<?php
//Function to trim any post data from form submits
function parsePOSTData($data){
    if(!empty($data)){
        $data = trim($data);
        return $data;
    }else{
        $data = null;
        return $data;
    }
}