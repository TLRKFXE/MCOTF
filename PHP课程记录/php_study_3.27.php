<?php
//while循环拆分解析
//表达式结果需要为布尔类型，非布尔类型则转换为布尔类型
//单条语句可以省略大括号，多条语句则一定要大括号

//1.开始
$a = 1;

//2.表达式
while($a <= 10)
{//循环体

    //3.如果为真时，则执行以下语句
    echo "这是在while循环内的第$a"."条循环<br>";

    //4.自增，避免死循环
    $a++;

    //5.如果条件为真，则返回表达式重新判断
}
//6.如果条件为假，则循环结束



$i = 0;
//do while：每次在循环结束时才检查
do{//语句块
    $i++;
    echo "数值的结果是"."$i";
}while($i<=5);//表达式


//计算1-50的整数的和
$sum = 0;
$c = 1;
do{
    $sum += $c;
    $c++;
}while($c<=50);

echo "1-50整数的和是"."$sum";
echo "<br>";


//while循环嵌套：输出一个十行十列的数
echo "<table border=1>";
$d = 0;
while($d < 10){
    echo '<tr align = "center">';//以表格形式生成，更加美观<tr>+<td>
    $a = 0;
    while($a < 10){
        echo '<td>'.($d*10 + $a).'</td>';//0*10，这一部分很巧妙
        $a++;
    }
    $d++;
}
echo "</table>"

//tips:循环层次过多会影响效率


?>