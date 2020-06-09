<HTML>
<head>
</head>
<body>
<?PHP
include "evenement.php";
include "eventCore.php";
if (isset($_GET['id_event'])){
	$eventC=new eventCore();
    $result=$eventC->recupererevent($_GET['id_event']);
	foreach($result as $row){
		$id_event=$row['id_event'];
		$id_prom=$row['id_prom'];
		$nom_event=$row['nom_event'];
		$theme=$row['theme'];
		$date_event=$row['date_event'];
?>
<form method="POST">
<table>
<caption>Modifier Evenement</caption>
<tr>
<td>id_event</td>
<td><input type="number" name="id_event" value="<?PHP echo $id_event ?>"></td>
</tr>
<tr>
<td>id_prom</td>
<td><input type="number" name="id_prom" value="<?PHP echo $id_prom ?>"></td>
</tr>
<tr>
<td>nom_event</td>
<td><input type="text" name="nom_event" value="<?PHP echo $nom_event ?>"></td>
</tr>
<tr>
<td>theme</td>
<td><input type="text" name="theme" value="<?PHP echo $theme ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date_event" value="<?PHP echo $date_event ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_event" value="<?PHP echo $_GET['id_event'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$event=new event($_POST['id_event'],$_POST['id_prom'],$_POST['nom_event'],$_POST['theme'],$_POST['date_event']);
	$eventC->modifierevent($event,$_POST['id_event']);
	echo $_POST['id_event'];
	header('Location: starter.php');
}
?>
</body>
</HTMl>