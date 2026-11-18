<?php
// cau 1
// $a = 10 ;
// $b = 5;

// echo "tong : ". ($a+$b) . "<br>";
// echo "hieu : ". ($a-$b) . "<br>";
// echo "tich : ". ($a*$b) . "<br>";
// echo "thuong : ". ($a/$b) . "<br>";
//cau 2
// $a = 10;
// $b ="10";

// var_dump($a == $b);
// echo "<br>";
// var_dump($a === $b);
// echo "<br>";
// var_dump($a != $b);
// echo "<br>";
// var_dump($a <> $b);
// echo "<br>";
// var_dump($a !== $b);
//cau 3
// $x =5 ;
// // tang truoc
// echo "ket qua cua tang truoc : ";
// echo ++$x. "<br>";
// //tang sau 
// echo "ket qua cua tang sau : ";
// echo $x++;
//d cau 4
// $a = "tran ";
// $b = "Duy";
// $c = $a.$b;
// echo "chuoi sau khi noi la : $c <br> "

// echo " noi chuoi theo cach khac : ". ($a.=$b);
//. de noi 2 chuoi nhung khong thay doi gias tri cua cac bien 
/*.= laf oi chuoi thay doi gia tri cua bien vi $a.=$b tuong duong
voi $a = $a.$b nen $a bi thay doi gia tri so voi gia tri ban dau 
 */ 
// cau 5 

// $chuoi1 = "Xin chào";
// echo " so luong ky tu trong chuoi la ". (strlen($chuoi1)). "<br>";
// echo " so luong ky tu trong chuoi la ". (mb_strlen($chuoi1)). "<br>";
/*strlen  la doc ky tu theo phuong phap la dem bit mot tu la 1 bit 
tu  tieng viet co ky tu rieng biet nen theo ma UTF-8 ky tu tieng viet 
laf 2 bit 
mb_strlen thi no xem ky tu do laf chuong mot ky tu  nen se doc la 1 bit 

  */

//cau 6
// $chuoi = "hello world !";
// echo "chuyen chuoi ky tu thanh chu hoa ". strtoupper($chuoi) ."<br>";
// $chuoi1 = "HELLO WORLD !";
// echo "chuyen chuoi thanh chu thuong ". strtolower($chuoi1). "<br>";
// $s="xin chào";
// $s1 = "XIN CHÀO";
// echo "Chuyển chuỗi thành chữ hoa hỗ trợ UNIKEY : ". mb_strtoupper($s). "<br>";
// echo "Chuyển chuỗi hoa thành chữ thường hỗ trợ UNIKEY : ". mb_strtolower($s1)."<br>";
// cau 7 
// $a = "123 abc";
// $a1 = "abc 123 ";
// $b = (int)$a;
// $c = (int)$a1;
// echo "gia trị ban đầu là : ";
// echo var_dump($a1)." và ";
// echo var_dump($a)."<br>";

// echo "biến sau khi ép kiểu : ";
// echo var_dump($c). " và ";
// echo var_dump($b)."<br>";
//cau 8
// $n1 = 10;
// $n2 = 7.5;
// $n3 = "duy nè";
// $n4 = $n1 >$n2;
// var_dump($n1);
// echo"<br>";
// var_dump($n2);
// echo"<br>";
// var_dump($n3);
// echo"<br>";
// var_dump($n4);
?>