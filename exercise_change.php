<?php
$change = 0;
// Check Submit Form

if (!empty($_POST["submit"]))
{

//รับค่าจากฟอร์ม php
    // echo $_POST["price"];
    $price = $_POST["price"];
    $money = $_POST["money"];

//คำนวณ
    $change = $money - $price;

    // echo $change;
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<!-- bg-primary สีน้ำเงิน
bg-success สีเขียว
bg-info สีฟ้า
bg-warning สีเหลือง
bg-danger สีแดง
bg-secondary สีเทา
bg-dark สีดำ
bg-light สีขาว -->
<body>
    <div class="jumbotron bg-danger text-light">
        <h1 class="display-5 text-center">โปรแกรมคิดเงินทอน</h1>
    </div>

    <div class="container">
        <form class="col-md-6 offset-md-3" method="POST" action="exercise_change.php"> <!--container ใช้ 6 ส่วน เหลือพื้นที่ ซ้าย-ขวา ข้างละ 3 ส่วน รวมกันจะได้ 12ส่วน-->
            <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label">ราคาสินค้า</label>
                <div class="col-sm-9">
                    <input type="number" step= ".01" class="form-control" name="price" id="price" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="money" class="col-sm-3 col-form-label">จ่ายเงินมา</label>
                <div class="col-sm-9">
                    <input type="number" step= ".01" class="form-control" name="money" id="money" placeholder="" required><!--input ใช้ Number step ใส่ทศนิยมได้-->
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value= "คำนวณ" class= "btn btn-primary">
                    <hr>
                    เงินทอน<?=$change;?> บาท
                </div>
            </div>
        </form>
    </div>





    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
