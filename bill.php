<?php 
session_start();

if(isset($_POST)){
    $result = $_POST["book"];
    if($result=="book1"){
        header("Location: book.html");
    }
    
}/*else {
    header("Location: cd.html");
}

/*
$books1=array("id"=>"book1","產品名稱"=>"超圖解 Arduino 互動設計入門 第3版","價錢"=>"680");
$books1=array("id"=>"book2","產品名稱"=>"第一次學 Python 就上手！","價錢"=>"480");

$cd1=array("id"=>"cd1","產品名稱"=>"LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)","價錢"=>"328");
$cd1=array("id"=>"cd2","產品名稱"=>"李千娜 / 愛 到站了","價錢"=>"459");
*/
?>