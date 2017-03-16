<?php 
$name = $_FILES['file']['name'];
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error']; 
//$uploads = "\uploads".$name;

$target_path = "https://github.com/liuyuchia/PassHomework/tree/master/uploads/"; //指定上傳資料夾
$dest = $target_path.$name;//上傳檔案名稱

if(move_uploaded_file($tmp_name,iconv("UTF-8", "big5", $dest ))) {
	echo "檔案：". $name ."<br/>". " 上傳成功!"."<br/>"."<br/>";
}else{
	echo "檔案上傳失敗，請再試一次!"."<br/>";
}


	echo "檔案名稱: ".$name."<br/>";
	echo "檔案類型: " .$type."<br/>";
	echo "檔案大小: " .($size / 1024)." Kb<br />";
	echo "暫存名稱: " .$tmp_name."<br/>";
	echo "錯誤: " .$error."<br/>";
	

?>   

