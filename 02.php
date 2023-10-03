<?php
    $con=mysqli_connect("localhost", "root", "@lgc1104", "servey") or die("MYSQL 접속 실패");

    $menu=$_POST["menu"];
    $mDate= date("Y-m-d");

    $sql="INSERT INTO userRESULT VALUES('".$menu."','".$mDate."')";

    $ret=mysqli_query($con, $sql);

    echo "<h1>메뉴 입력 결과</h1>";
    if($ret) {
        echo "데이터가 성공적으로 입력됨.";
    }
    else {
        echo "데이터 입력 실패"."<br>";
        echo "실패 원인 : ".mysqli_error($con);
    }
    mysqli_close($con);

?>