<?php
$testing = 20.22;
//"lizhengxiang";
echo "is a string".is_double($testing);
echo "<br/>";
echo $testing;

echo "<br/>";
settype($testing, 'integer');
echo "is a string".is_integer($testing);
echo "<br/>";
echo $testing;
echo "<br/>";
echo "30cm" + "40cm";
echo "<br/>";
$name_a = "lizhengxiang";
$name_b = "lizhengqian";
echo $name_a.$name_b;
?>
