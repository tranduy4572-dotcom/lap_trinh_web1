<?php $menu = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];?>
<?php $ls = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"]; ?>
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
        }
        .s1{
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            margin: auto;
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
    
</body>
</html>