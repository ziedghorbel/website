<?PHP
include "../core/eventCore.php";
isset($_GET['id_event']);
$event1C=new eventCore();
$listeevents=$event1C->recherchereventAvancer($_POST['id_event']);
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_event</td>
<td>id_prom</td>
<td>nom_event</td>
<td>theme</td>
<td>date_event</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeevents as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_event']; ?></td>
	<td><?PHP echo $row['id_prom']; ?></td>
	<td><?PHP echo $row['nom_event']; ?></td>
	<td><?PHP echo $row['theme']; ?></td>
	<td><?PHP echo $row['date_event']; ?></td>
	
	
	
	
	
	<td><form method="POST" 
	action="supprimerevent.php">
	<input type="submit" name="supprimer" 
	value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
	</form>
	</td>
	<td><a href="modifierevent.php?id_event=
	<?PHP echo $row['id_event']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


