<?php
$size = "S";
//strtolower แปลงตัวอักษร เล็ก-ใหญ่
// เหมาะกับการเช็คค่าคงที่
switch (strtolower($size))
{
    case "s":
        echo "Small Size";
        break;

    case 'm':

        echo "Medium Size";

        break;
    case 'l':

        echo "Lagre Size";ห
        break;
    default:
        echo "Unknow Size";
        break;
}
