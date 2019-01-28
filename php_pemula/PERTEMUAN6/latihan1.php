<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			float: left;
			margin: 10px;
			transition: 0.5s;

		}
		.kotak:hover{
			transform: rotate(180deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<?php 
	$angka = [[1,2,3],[4,5,6],[7,8,9]];
	//echo  $angka[1][2];
	 ?>

	<?php foreach($angka as $a) : ?>
		<?php foreach ( $a as $b ) : ?>
			<div class="kotak"><?= $b; ?></div> 
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>