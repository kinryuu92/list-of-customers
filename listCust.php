<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of customers</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>danh sách khách hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>ngày sinh</th>
        <th>địa chỉ</th>
        <th>ảnh</th>
    </tr>
    <?php $customerslist = array (
            "1" => array("ten" => "Mai Văn Hoàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "anh" => "images/img1.jpg"),
            "2" => array("ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Hà Nội",
                "anh" => "images/img1.jpg"),
            "3" => array("ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Hà Nội",
                "anh" => "images/img1.jpg"),
            "4" => array("ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-21",
                "diachi" => "Hà Nội",
                "anh" => "images/img1.jpg"),
            "5" => array("ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Hà Nội",
                "anh" => "images/img1.jpg")
    );
    foreach ($customerslist as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value['ngaysinh']."</td>";
        echo "<td>"  .$value['diachi']."</td>";
        echo "<td><img src = '".$value['anh']."'width='100px' height='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
