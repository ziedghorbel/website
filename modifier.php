<HTML>
<head>
</head>
<body>
<?PHP
include "promotioncore.php";
include "promotion.php";
if (isset($_GET['id_prom'])){
	$promotionC=new promotioncore();
    $result=$promotionC->recupererpromotion($_GET['id_prom']);
	foreach($result as $row){
		
		$id_prom=$row['id_prom'];
		
		$description=$row['description'];
		
?>
<form method="POST">
<table>
<caption>Modifier Evenement</caption>
<tr>
<td>id_prom</td>
<td><input type="number" name="id_prom" value="<?PHP echo $id_prom ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<input type="submit" name="modifier" value="modifier" class="btn btn-primary">

<input type="hidden" name="id_prom" value="<?PHP echo $_GET['id_prom'];?>">


</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$promotion=new promotion($_POST['id_prom'],$_POST['description']);
	$promotionC->modifierpromotion($promotion,$_POST['id_prom']);
	echo $_POST['id_prom'];
	header('Location: starter2.php');
}
?>
</body>
</HTMl>