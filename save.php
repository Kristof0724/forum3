<?php
$file = 'lista.json';
$data = $_POST;

if(file_exists($file)){
    $jsonDATA = file_get_contents($file);
    $data = json_decode($jsonDATA);

}else{
    $data =[];
}

array_push($data, $_POST['topic',])





// $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// if(file_put_contents($file,$json)){
//      echo "<script>
//              document.location = '/forum3/'
//             </script>";
// }

?>