<?php
require_once 'config.php';

function checkklidi($link,$keyword){
  // $stmt1 =  "INSERT INTO kalmehklidi (`kklidi`) VALUES('$keyword')"; 
          
  // if (mysqli_query($link, $stmt1)){
    
  //     $message="باموفقیت ثبت شد";
  //     $a=[];
  //     $a["status"]=true;
  //     $a["data"]=$message;
  //     echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
  // } 
   
    $sql = "SELECT * FROM kalmehklidi where `kklidi`='$keyword'";
    $result = mysqli_query($link, $sql);
    $deta=mysqli_fetch_assoc($result);
    $p=$deta['kklidi'];
    if (mysqli_num_rows($result) > 0) {

    }else {
      $message="700";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
      exit;
    return;
    }
}
function insertcolor($link,$color_name){
  $sql1 = "SELECT `RANG` FROM rang WHERE `RANG`='$color_name'";
  $result = mysqli_query($link, $sql1);
  if (mysqli_num_rows($result) > 0) {
    $message="707";
    $a=[];
    $a["status"]=false;
    $a["data"]=$message;
    echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
   return; 
  }

    $stmt1 =  "INSERT INTO rang (`RANG`) VALUES('$color_name')"; 
          
    if (mysqli_query($link, $stmt1)){
      
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
       return;    
        
 }
} 
function updatecolor($link,$old_name,$new_name){
  $sql1 = "SELECT `KODERANG` FROM rang WHERE `RANG`='$old_name'";
  $result = mysqli_query($link, $sql1);
  if (mysqli_num_rows($result) > 0) {
    $sql1 = "SELECT `RANG` FROM rang WHERE `RANG`='$new_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {

      $message="707";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
     return;
    }else{
      $sql1 = "SELECT `KODERANG` FROM rang WHERE `RANG`='$old_name'";
      $result = mysqli_query($link, $sql1);
      $deta=mysqli_fetch_assoc($result);
      $p=$deta['KODERANG'];
      $sql = "UPDATE rang SET `RANG`='$new_name' WHERE`KODERANG`='$p' ";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } 
    }
  }else{
    $message="702";
    $a=[];
    $a["status"]=false;
    $a["data"]=$message;
    echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
   return; 
  }
}
function deletecolor($link,$color_name){
    $sql1 = "SELECT `KODERANG` FROM rang WHERE `RANG`='$color_name'";
    $result = mysqli_query($link, $sql1);

    if (mysqli_num_rows($result) > 0) {
    $deta=mysqli_fetch_assoc($result);
    $p=$deta['KODERANG'];


      $sql ="DELETE FROM rang WHERE `KODERANG`='$p'";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
      return;

    }else {
      $message="702";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }
}
function insertsize($link,$size_name){
    $sql1 = "SELECT `SIZE` FROM size WHERE `SIZE`='$size_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
      $message="708";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    return; 
    }
    $stmt1 =  "INSERT INTO size (`SIZE`) VALUES('$size_name')"; 
          
    if ($result=mysqli_query($link, $stmt1)){
      
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    } 
      
     return;    
        
}
function updatesize($link,$old_name,$new_name){
  $sql1 = "SELECT `KODESIZE` FROM size WHERE `SIZE`='$old_name'";
  $result = mysqli_query($link, $sql1);
  if (mysqli_num_rows($result) > 0) {
    $sql1 = "SELECT `SIZE` FROM size WHERE `SIZE`='$new_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {

      $message="708";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
     return;
    }else{
      $sql1 = "SELECT `KODESIZE` FROM size WHERE `SIZE`='$old_name'";
      $result = mysqli_query($link, $sql1);
      $deta=mysqli_fetch_assoc($result);
      $p=$deta['KODESIZE'];
      $sql = "UPDATE size SET `SIZE`='$new_name' WHERE`KODESIZE`='$p' ";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } 
    }
  }else{
    $message="703";
    $a=[];
    $a["status"]=false;
    $a["data"]=$message;
    echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
   return; 
  }
  
}
function deletesize($link,$size_name){
    $sql1 = "SELECT `KODESIZE` FROM size WHERE `SIZE`='$size_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
      $deta=mysqli_fetch_assoc($result);
      $p=$deta['KODESIZE'];
    

      $sql ="DELETE FROM size WHERE `KODESIZE`='$p'";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
      return;
    }else {
      $message="703";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }
}
function insertgroup($link,$group_name){
    $sql1 = "SELECT `NGRKALA` FROM grkala WHERE `NGRKALA`='$group_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
      $message="709";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    return; 
    }
    $stmt1 =  "INSERT INTO grkala (`NGRKALA`) VALUES('$group_name')"; 
          
    if ($result=mysqli_query($link, $stmt1)){
      
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    } 
      
     return;    
        
}
function updategroup($link,$old_name,$new_name){
  $sql1 = "SELECT `NGRKALA` FROM grkala WHERE `NGRKALA`='$old_name'";
  $result = mysqli_query($link, $sql1);
  if (mysqli_num_rows($result) > 0) {
    $sql1 = "SELECT `NGRKALA` FROM grkala WHERE `NGRKALA`='$new_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {

      $message="709";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
     return;
    }else{
      $sql1 = "SELECT `NGRKALA` FROM grkala WHERE `NGRKALA`='$old_name'";
      $result = mysqli_query($link, $sql1);
      $deta=mysqli_fetch_assoc($result);
      $p=$deta['NGRKALA'];
      $sql = "UPDATE grkala SET `NGRKALA`='$new_name' WHERE`NGRKALA`='$p' ";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } 
    }
  }else{
    $message="704";
    $a=[];
    $a["status"]=false;
    $a["data"]=$message;
    echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
   return; 
  }
}
function deletegroup($link,$group_name){
    $sql1 = "SELECT `NGRKALA` FROM grkala WHERE `NGRKALA`='$group_name'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
  

      $sql ="DELETE FROM grkala WHERE `NGRKALA`='$group_name'";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
      return;
   }else {
    $message="704";
    $a=[];
    $a["status"]=false;
    $a["data"]=$message;
    echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
  }
}
function insertkala($link,$name,$stock,$group,$vahed,$bye_price,$sell_price,$code,$size,$color){
  
    $sql1 = "SELECT `KODEKALAINTERNETI` FROM kala WHERE `KODEKALAINTERNETI`='$code'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
     
        $message="706";
        $a=[];
        $a["status"]=false;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
      return;
    } 
      $stmt1 = "INSERT INTO kala (`NKALA`,`MOGOAVAL`,`NGRKALA`,`VAHED`,`GHBUY`,`GHFOROSH`,`KODEKALAINTERNETI`,`SIZE`,`RANG`) VALUES ('$name','$stock','$group','$vahed','$bye_price','$sell_price','$code','$size','$color')"; 
            
      if (mysqli_query($link, $stmt1)){
          $message="700";
          $a=[];
          $a["status"]=true;
          $a["data"]=$message;
          echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
      } 
        
      return;    
          
   
}  
function updatekala($link,$name,$stock,$group,$vahed,$bye_price,$sell_price,$code,$size,$color){
    // $sql1 = "SELECT `RANG` FROM rang WHERE `RANG`='$new_name'";
    // $result = mysqli_query($link, $sql1);
    // if (mysqli_num_rows($result) > 0) {
    //   $message="no";
    //   $a=[];
    //   $a["status"]=false;
    //   $a["data"]=$message;
    //   echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    // return; 
    // echo $code;
    $sql1 = "SELECT `CKALA` FROM kala WHERE `KODEKALAINTERNETI`='$code'";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){
    $deta=mysqli_fetch_assoc($result);
    $p=$deta['CKALA'];
   
    $sql = "UPDATE kala SET `NKALA`='$name',`MOGOAVAL`='$stock',`NGRKALA`='$group',`VAHED`='$vahed',`GHBUY`='$bye_price',`GHFOROSH`='$sell_price',`KODEKALAINTERNETI`='$code',`SIZE`='$size',`RANG`='$color' WHERE `CKALA`='$p'";

    if (mysqli_query($link, $sql)) {
      $message="700";
      $a=[];
      $a["status"]=true;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
      return;
    } else {
      echo "Error updating record: " . mysqli_error($link);
    }
    return;
    }else {
      $message="706";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }
}
function deletekala($link,$code){
    $sql1 = "SELECT `CKALA` FROM kala WHERE `KODEKALAINTERNETI`='$code'";
    $result = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result) > 0) {
      $deta=mysqli_fetch_assoc($result);
      $p=$deta['CKALA'];
    

      $sql ="DELETE FROM kala WHERE `CKALA`='$p'";
    
      if (mysqli_query($link, $sql)) {
        $message="700";
        $a=[];
        $a["status"]=true;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return;
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
      return;
    }else {
      $message="706";
      $a=[];
      $a["status"]=false;
      $a["data"]=$message;
      echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }
}
?>