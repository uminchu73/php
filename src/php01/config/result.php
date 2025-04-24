<?php
$name   = htmlspecialchars($_POST['name'], ENT_QUOTES);
$sina   = htmlspecialchars($_POST['sina'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $name . "<br />" . "ご希望の商品は、" . $sina . "<br />" . "注文数は、" . $number;

