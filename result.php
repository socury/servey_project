<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>설문 조회 결과</title>
</head>
<body>
    <table class=middle>
        <thead>
            <tr align=center>
                <th width=70>menu</th>
                <th width=300>date</th>
            </tr>
       </thead>
           <?php
            $conn = mysqli_connect('localhost', 'id21357778_root', '@Lgc1104', 'id21357778_servey');
            
            $sql = "SELECT * FROM userRESULT";
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
            ?>
            <tbody>
                <tr align=center>
                    <td><?php echo $row['menu'];?></td>
                    <td><?php echo $row['mdate'];?></td>
                </tr>
            </tbody>
            <?php } ?>
    </table>
</body>
</html>
