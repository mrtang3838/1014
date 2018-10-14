<?php

   use System\Library\Core\BlackCatFactory;
   use System\Library\Core\HsinChuFactory;
   use System\Library\Core\PostOfficeFactory;
   
   include "OrderService.php";
   include "ShopService.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Web Programming">
  <meta name="author" content="JohnAxer">

  <title>Web Programming</title>
  <style>
     table, tr, td, th
     {
        border: 1px solid black;
        border-collapse:collapse;
        padding: 5px; 
     }
  </style>
</head>

<body>
  <h3>107.10.11 範例</h3>

  <table>
    <tr>
      <th>貨運商</th>
      <th>計費規則</th>
    </tr>
    <tr>
      <td>黑貓</td>
      <td>基本運費 100 元，每公斤加收 10 元</td>
    </tr>
    <tr>
      <td>新竹貨運</td>
      <td>基本運費 80 元，每公斤加收 15 元</td>
    </tr>
    <tr>
      <td>郵局</td>
      <td>基本運費 70 元，每公斤加收 20 元</td>
    </tr>
  </table>
  
  <h3>檔案清單</h3>
  <ul>
    <li>index.php 範例起始頁</li>
    <li>OrderService.php 簡單工廠模式的 Clinet 端</li>
    <li>ShopService.php 工廠模式的 Clinet 端</li>
    <li>Company.php 貨運公司的 interface 和 class 定義 </li>
    <li>SimpleFactory.php 簡單工廠 class 定義</li>
    <li>Factory.php 工廠 interface 和 class 定義</li>
  </ul>

  <hr>
  <h3>執行結果</h3>
  
  <?php
       $order = new OrderService();

       echo "<h3>簡單工廠模式</h3>";
       echo "黑貓, 30 Kg => ".$order->Calculate("黑貓", 30)."<br>";
       echo "新竹, 30 Kg => ".$order->Calculate("新竹", 30)."<br>";
       echo "郵局, 30 Kg => ".$order->Calculate("郵局", 30);

       echo "<hr>";

       $subscribe = new ShopService(new BlackCatFactory());
       echo "<h3>工廠模式</h3>";
       echo "黑貓, 30 Kg => ".$subscribe->Calculate(30)."<br>";

       $subscribe->setFactory(new HsinChuFactory());
       echo "新竹, 30 Kg => ".$subscribe->Calculate(30)."<br>";

       $subscribe->setFactory(new PostOfficeFactory());
       echo "郵局, 30 Kg => ".$subscribe->Calculate(30);

  ?>
  
</body>

</html>