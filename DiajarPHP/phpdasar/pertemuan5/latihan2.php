<?php 
// pengulangan pada array
// for / foreach
$angka = [1, 2, 3, 4, 5, 6, 60, 97, 5647];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: #BADA55;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 			transition: 1s;
 		}
 		.kotak:hover {
 			transform: rotate(360deg);
 			border-radius: 50%;
 		}
 		.clear { clear: both; }
 	</style>
 </head>
 <body>

 	<?php for( $i = 0; $i < count($angka); $i++ ) {?>
 	<div class="kotak"><?= $angka [$i]; ?></div>
 <?php } ?>

 <div class="clear"></div>

 <?php foreach($angka as $d ) { ?>
 	<div class="kotak"><?= $d; ?></div>
 <?php } ?>

 <div class="clear"></div>

<?php foreach($angka as $d ) : ?>
	<div class="kotak"><?= $d; ?></div>
<?php endforeach; ?> 




 </body>
 </html>