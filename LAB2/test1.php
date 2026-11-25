<?php $menu = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];?>
<?php $ls = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"]; ?>
<?php $students = [
    ["id"=>"SV001",
    "name"=>"Đinh Xuân Nội", 
    "gender"=>"khác", 
    "class"=>"CNTT1"
    ], 
    [
        "id"=> "SV002",
        "name"=> "Võ Phi Thái",
        "gender"=> "khác",
        "class"=> "CNTT2"
    ], 
    [
        "id"=> "SV003",
        "name"=> "Trần Thanh Hoài",
        "gender"=> "Nam",
        "class"=> "CNTT1"
    ], 
    [
        "id"=> "SV004",
        "name"=> "Đỗ Trung Nghĩa",
        "gender"=> "Nam",
        "class"=> "CNTT3"
    ], 
    [
        "id"=> "SV005",
        "name"=> "Trần Hoàng Ngọc Trinh",
        "gender"=>"Nữ",
        "class"=> "CNTT6"
    ]] ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin : 0px;
            padding : 0;
            box-sizing: border-box;
        }
        nav{
            background:rgb(4, 40, 94);
            margin-bottom:  20px;

        }
        nav ul{
            list-style: none;
            display: flex;
        }
        nav li{
            flex: 1;
            transform: .8s;
        }
        nav a{
            color:  white;
            text-decoration: none;
            font-weight: bold;
            display : block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover{
                background: #084298;
                border-radius: 8px;
                transform: translateY(2px);
                margin: 0 5px;
        }
        .s1{
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            margin: 10px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            
        }
        .s1 h3{
            text-align: center;
            color: #26b7f0;
        }
        .s1 ul{
            list-style: none;
        }
        .s1 li {
            background-color: #c8dbff;
            margin:  10px 0;
            padding: 10px 15px;
            border-left: 5px solid #084298;
            border-radius: 5px;
            transition:  .3s;

        }
        .s1 li:hover{
            background-color: #26b7f0;
            transform: translateX(5px);
        }
        .s2{
            box-shadow:0 0 10px rgba(0, 0, 0, 0.15);
            max-width: 80%;
            margin: 15px auto;
            padding: 10px;
            border-radius: 5px;

        }
        .s2 table{
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            
        }
        .s2 table tr{
            text-align: center;
           
        }
        .s2 tr th{
            text-align: center;
            background-color: #26b7f0;
            padding: 10px;
            border: solid 1px black;
        }
        .s2 td{
            border: solid 1px black;
        }
        .s2 table tr:nth-child(even){
            background-color: aliceblue;
        }
        .s2 table tr:hover{
            background-color: #c8dbff;
        }

      
     
    </style>
</head>
<body>
    <nav>
        <ul>
            <?php foreach ($menu as $mb){?>
            <li><a href=""><?= $mb ?></a></li>
            <?php }?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php foreach($ls as $l){ ?>
            <li><?= $l ?></li>
            <?php }?>
        </ul>

    </section>
    <section class = "s2">
        <h3>Danh Sách Sinh Viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Học Và Tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php $i=1; ?>
            <?php foreach($students as $ls){ ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $ls["id"] ?></td>
                    <td><?=$ls["name"]?></td>
                    <td><?=$ls["gender"]?></td>
                    <td><?=$ls["class"]?></td>
                    <?php $i++; ?>
                </tr>
            <?php }?>
    

        </table>
    </section>
    
    
</body>
</html>