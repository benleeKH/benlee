<?php
      $data1=$_POST['name'];
      $data2=$_POST['email'];
      // $data3=$_POST['cusubject'];
      $data3=$_POST['message'];

//資料庫登錄權限驗證

        $host = 'sql306.clouds.tw';
        $db_name = 'clds_33239098_comment';
        $db_user = 'clds_33239098'; 
        $db_password = '1QAZ2wsx3edc';

        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
            if (!$con) {
    die("權限連線錯誤！" . mysqli_connect_error());

}

//資料庫是否正常使用

if(!mysqli_select_db($con, $db_name)) {
    die ("資料庫連線異常！");
  }
  
  mysqli_query( $con, "set names 'utf8'");

//執行SQL語法

//執行SQL語法

$sql ="INSERT INTO `msg` (`id`, `name`, `email`, `message`) VALUES (NULL, '$data1', '$data2', '$data3')";
$result = mysqli_query($con, $sql);

echo "感謝你的回覆!";
header('Refresh:5; url=blog_index.html');

?>