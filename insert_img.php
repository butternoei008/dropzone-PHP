<?php
$conn = new mysqli('localhost','root', '', 'test');

if(isset($_POST)) {
   $drp_post = $_POST['drp_post'];
   $drp_name = $_POST['drp_name'];
   $date = date('Y-m-d H:i:s');
   
   $create_img = $conn->query("INSERT INTO dropzone_post (drp_post, drp_created) VALUES ('$drp_post', '$date')");
   $drp_post_id = $conn->insert_id;
   
   foreach ($drp_name as $value) {
      $create_img = $conn->query("INSERT INTO dropzone (drp_post_id, drp_name) VALUES ('$drp_post_id', '$value')");
   }

   echo json_encode([
      "result" => true
   ]);

   $conn->close();
}
else {
   header('Location: index.php');
}