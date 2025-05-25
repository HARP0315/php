<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo '私の名前は、'.$my_name.'です。<br>';
echo '注文商品は、'.$item.'です。<br>';
echo '注文数は、'.$number.'です。<br>';
echo 'ご注文ありがとうございました。<br>';