<?php

echo date('D, d M Y H:i:s').'<br>';
$a = 15;
$b = 89;
if ($a>=$b) {
    echo 'true';
}
else
{
    echo 'false';
}
?>

<?php
if ($a<$b or $a != $b) {
    echo 'true';
}
else
{
    echo 'false';
}

?>
