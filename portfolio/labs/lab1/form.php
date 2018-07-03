<?php print('<?xml version = "1.0" encoding = "utf-8"?>') ?>

<head>
	<title>Using PHP document</title>
</head>

<?php
    $file = fopen("form.txt", "r");
    $num = fgets($file);
    $num = $num+1;
    $file = fopen("form.txt", "w");
    fwrite($file, $num);
    fclose($file);
    $abc = 10;
?>

<body style="font-size: 2em">
    <strong>
	你的姓名為：<?php print("$_POST[username]"); ?>
    </strong>
    <br>
    你的學號為：<?php print("$_POST[usercode]"); ?>
    <br>
    你猜的數字為：<?php print("$_POST[number]"); ?>
    <br>
    <?php if($abc > "$_POST[number]"){echo "數字太小";}
          elseif ($abc < "$_POST[number]") {echo "數字太大";
          	# code...
          }else{echo "猜對了";}
    ?>
    <br>
    你總共猜了：<?php echo "$num" ?> 次
</body>

<br>

<input type="button" onclick="history.back()" value="回到上一頁"></input>
