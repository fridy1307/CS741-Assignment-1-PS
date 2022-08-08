<?php
$data = "";
foreach($_SERVER as $key => $value){
    $data = $data . $key.' = '.$value."; ";
}
$data = $data . "\n";
while(file_put_contents('../content.txt', $data, FILE_APPEND | LOCK_EX) === false);

if( $_GET["data"] ){
    echo "GET Request Processed";
    exit();
}
if( $_POST["data"] ) {
   echo "POST Request Processed";
   exit();
}

header("Location: index.html");
exit();

?>
