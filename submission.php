<?php
echo 'These are the GET key:value pairs:<br />';
print_r('fruit:' . htmlspecialchars($_GET['fruit']) . '<br />');
print_r('asr:' . htmlspecialchars($_GET['asr']) . '<br /><br /> OR <br /><br />');
print_r($_GET);

echo '<br /><br />These are the POST key:value pairs:<br />';
print_r('show:' . htmlspecialchars($_POST['show']) . '<br />');
print_r('game:' . htmlspecialchars($_POST['game']) . '<br /><br /> OR <br /><br />');
print_r($_POST);
?>