<?php

if ($_FILES['file']['tmp_name'] != '') {
   $file_tmp = $_FILES['file']['tmp_name'];
   $file_name = explode('.', $_FILES['file']['name']);
   $file_type = end($file_name);
   $rename = uniqid().'.'.$file_type;

   if(move_uploaded_file($file_tmp, 'assets/img/'.$rename)) {
      echo json_encode([
         "result" => true,
         "file_name" => $rename
      ]);
   }
} 
else {
   echo json_encode([
      "result" => false,
      "msg" => "image not found"
   ]);
}
