<style>
.product_box{
    display: inline-block;
    width: 200px;
    height: 300px;
    background-color: blueviolet;
    margin: 10px;
}
</style>


<?php

for ($a = 1; $a <= 12; $a++)
{
    if ($a % 4 == 1)
    {

    }
    echo "<div class = 'product_box'>Product", $a, "</div>";
}