<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>latihan2</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<!-- <?php 
	// for( $i = 1; $i <= 3; $i++ ){
	// 	echo "<tr>";
	// 	for ($j = 1; $j <= 5; $j++ ){
	// 		echo "<td>$i,$j</td>";
	// 	}
	// 	echo "</tr>";
	// }
	 ?> -->
	
	 <?php for ($i = 1; $i <= 5; $i++ ) : ?>
	 	<?php if( $i % 2 == 1 ) : ?>
	 	<tr class="warna-baris">
	 		<?php else: ?>
	 		<tr></tr>
	 	<?php endif; ?>
	 		<?php for( $j = 1; $j <=5; $j++) : ?>
	 			<td> <?= "$i , $j"; ?></td>
	 			<!-- lamun maneh ek nyieun php kur dipake echo hungkul, bisa langung make "=" teu kudu nulis "php echo" -->
	 		<?php endfor; ?>
	 	</tr>
	 <?php endfor; ?>


</table>

</body>
</html>