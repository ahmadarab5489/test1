<?php
require_once 'config.php';
require_once 'function.php';
//  foreach ($_REQUEST as $key => $value) {

// if (is_array($value)  || is_object($value)) 
// {
//   foreach ($value as $k) 
// {
// echo $k['keyword'];
// }   
// }
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Credentials: true");
header("Content-Type:application/json");
$input = json_decode(file_get_contents('php://input'),true);
if (isset($input['request']) && isset($input['keyword']))
{
    $keyword=$input['keyword'];
    // echo $keyword;
   checkklidi($link,$keyword);
   $request = $input['request'];

    if ($request=="insert_color") {

        $color_name=$input['color_name'];
        $errors="";
        empty1($color_name,$errors);
        $color_name=mysqli_real_escape_string($link,$color_name);
        insertcolor($link,$color_name);
                    
    } 
    if ($request=="update_color") {

                $old_name=$input['old_name'];
                $errors="";
                empty1($old_name,$errors);
                $old_name=mysqli_real_escape_string($link,$old_name);
        
                $new_name=$input['new_name'];
                $errors="";
                empty1($new_name,$errors);
                $new_name=mysqli_real_escape_string($link,$new_name);

        updatecolor($link,$old_name,$new_name);
            
    }
    if ($request=="delete_color") {
                    $color_name=$input['color_name'];
                    $errors="";
                    empty1($color_name,$errors);
                    $color_name=mysqli_real_escape_string($link,$color_name);
            
            deletecolor($link,$color_name);
    }    
    if ($request=="insert_size") {
        $size_name=$input['size_name'];
        $errors="";
        empty1($size_name,$errors);
        $size_name=mysqli_real_escape_string($link,$size_name);
        insertsize($link,$size_name);
    }
    if ($request=="update_size") {
        $old_name=$input['old_name'];
        $errors="";
        empty1($old_name,$errors);
        $old_name=mysqli_real_escape_string($link,$old_name);
        $new_name=$input['new_name'];
        $errors="";
        empty1($new_name,$errors);
        $new_name=mysqli_real_escape_string($link,$new_name);
        updatesize($link,$old_name,$new_name);      
    }
    if ($request=="delete_size") { 

        $size_name=$input['size_name'];
        $errors="";
        empty1($size_name,$errors);
        $size_name=mysqli_real_escape_string($link,$size_name);
        deletesize($link,$size_name);
    }
    if ($request=="insert_group") {
        $group_name=$input['group_name'];
        $errors="";
        empty1($group_name,$errors);
        $group_name=mysqli_real_escape_string($link,$group_name);
        insertgroup($link,$group_name);
                
    }
    if ($request=="update_group") {
        $old_name=$input['old_name'];
        $errors="";
        empty1($old_name,$errors);
        $old_name=mysqli_real_escape_string($link,$old_name);
        $new_name=$input['new_name'];
        $errors="";
        empty1($new_name,$errors);
        $new_name=mysqli_real_escape_string($link,$new_name);
        updategroup($link,$old_name,$new_name);
            
    }
    if ($request=="delete_group") { 
        $group_name=$input['group_name'];
        $errors="";
        empty1($group_name,$errors);
        $group_name=mysqli_real_escape_string($link,$group_name);
        deletegroup($link,$group_name);
    }
    if ($request=="insert_kala") { 
        $name=$input['name'];
        $errors="";
        empty1($name,$errors);
        $name=mysqli_real_escape_string($link,$name);
        $group=$input['group'];
        $errors="";
        empty1($group,$errors);
        $group=mysqli_real_escape_string($link,$group);
        $color=$input['color'];
        $errors="";
        empty1($color,$errors);
        $color=mysqli_real_escape_string($link,$color);
        $size=$input['size'];
        $errors="";
        empty1($size,$errors);
        $size=mysqli_real_escape_string($link,$size);
        $stock=$input['stock'];
        $errors="";
        empty1($stock,$errors);
        $stock=mysqli_real_escape_string($link,$stock);
        $vahed=$input['vahed'];
        $errors="";
        empty1($vahed,$errors);
        $vahed=mysqli_real_escape_string($link,$vahed);
        $bye_price=$input['bye_price'];
        $errors="";
        empty1($bye_price,$errors);
        $bye_price=mysqli_real_escape_string($link,$bye_price);
        $sell_price=$input['sell_price'];
        $errors="";
        empty1($sell_price,$errors);
        $sell_price=mysqli_real_escape_string($link,$sell_price);
        $code=$input['code'];
        $errors="";
        empty1($code,$errors);
        $code=mysqli_real_escape_string($link,$code);
        insertkala($link,$name,$stock,$group,$vahed,$bye_price,$sell_price,$code,$size,$color);
                    
    }
    if ($request=="update_kala") {


        // $registerdata=$value;
        // $registerdata=json_decode($registerdata,TRUE);
        // foreach ($registerdata as $k) 
        // {
        //     if ($k['name'] == "keyword")
        //     {
        //         $keyword=$k['value'];
        //         $errors="";
        //         empty1($keyword,$errors);
        //         $keyword=mysqli_real_escape_string($link,$keyword);
        //         checkklidi($link,$keyword);
        //     } 
        //     if ($k['name'] == "name")
        //     {
        //         $name=$k['value'];
        //         $errors="";
        //         empty1($name,$errors);
        //         $name=mysqli_real_escape_string($link,$name);
        //     }        
        
        //     if ($k['name'] == "group")
        //     {
        //         $group=$k['value'];
        //         $errors="";
        //         empty1($group,$errors);
        //         $group=mysqli_real_escape_string($link,$group);
        //     }
        //     if ($k['name'] == "color")
        //     {
        //         $color=$k['value'];
        //         $errors="";
        //         empty1($color,$errors);
        //         $color=mysqli_real_escape_string($link,$color);
        //     }        
            
        //     if ($k['name'] == "size")
        //     {
        //         $size=$k['value'];
        //         $errors="";
        //         empty1($size,$errors);
        //         $size=mysqli_real_escape_string($link,$size);
        //     }
        //     if ($k['name'] == "stock")
        //     {
        //         $stock=$k['value'];
        //         $errors="";
        //         empty1($stock,$errors);
        //         $stock=mysqli_real_escape_string($link,$stock);
        //     }        
            
        //     if ($k['name'] == "vahed")
        //     {
        //         $vahed=$k['value'];
        //         $errors="";
        //         empty1($vahed,$errors);
        //         $vahed=mysqli_real_escape_string($link,$vahed);
        //     } 
        //     if ($k['name'] == "bye_price")
        //     {
        //         $bye_price=$k['value'];
        //         $errors="";
        //         empty1($bye_price,$errors);
        //         $bye_price=mysqli_real_escape_string($link,$bye_price);
        //     }        
            
        //     if ($k['name'] == "sell_price")
        //     {
        //         $sell_price=$k['value'];
        //         $errors="";
        //         empty1($sell_price,$errors);
        //         $sell_price=mysqli_real_escape_string($link,$sell_price);
        //     }
        //     if ($k['name'] == "code")
        //     {
        //         $code=$k['value'];
        //         $errors="";
        //         empty1($code,$errors);
        //         $code=mysqli_real_escape_string($link,$code);
        //     }        
            

        // }
        $name=$input['name'];
        $errors="";
        empty1($name,$errors);
        $name=mysqli_real_escape_string($link,$name);
        $group=$input['group'];
        $errors="";
        empty1($group,$errors);
        $group=mysqli_real_escape_string($link,$group);
        $color=$input['color'];
        $errors="";
        empty1($color,$errors);
        $color=mysqli_real_escape_string($link,$color);
        $size=$input['size'];
        $errors="";
        empty1($size,$errors);
        $size=mysqli_real_escape_string($link,$size);
        $stock=$input['stock'];
        $errors="";
        empty1($stock,$errors);
        $stock=mysqli_real_escape_string($link,$stock);
        $vahed=$input['vahed'];
        $errors="";
        empty1($vahed,$errors);
        $vahed=mysqli_real_escape_string($link,$vahed);
        $bye_price=$input['bye_price'];
        $errors="";
        empty1($bye_price,$errors);
        $bye_price=mysqli_real_escape_string($link,$bye_price);
        $sell_price=$input['sell_price'];
        $errors="";
        empty1($sell_price,$errors);
        $sell_price=mysqli_real_escape_string($link,$sell_price);
        $code=$input['code'];
        $errors="";
        empty1($code,$errors);
        $code=mysqli_real_escape_string($link,$code);
        updatekala($link,$name,$stock,$group,$vahed,$bye_price,$sell_price,$code,$size,$color);
            
    }
    if ($request=="delete_kala") {
                $code=$input['code'];
                $errors="";
                empty1($code,$errors);
                $code=mysqli_real_escape_string($link,$code);
        deletekala($link,$code);
    }        
}
function empty1($empty,$errors){
  
    
    if (is_null($empty) || $empty=="") {
       
      $message = $errors.' نمی‌تواند خالی بماند';
      $a=[];
        $a["status"]=false;
        $a["data"]=$message;
        echo json_encode($a ,JSON_PRESERVE_ZERO_FRACTION| JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        exit;
      return;
    }

 } 
   



?>