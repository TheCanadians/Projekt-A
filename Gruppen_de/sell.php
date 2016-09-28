<!DOCTYPE html>
<html>

<body>
<!-- Tabelle mit den Handelsmöglichkeiten -->	
	<form action=gameHandler.php method=post>	
		<table>
			<tr>
				<th>Waren</th>
				<th>Anzahl</th>
				<th>Verkauf</th>
			</tr>
			<tr>
				<td>Datteln</td>
				<td id=datteln></td>
				<td><input type=number name=num_dat placeholder=0></td>
			</tr>
			<tr>
				<td>Gerste</td>
				<td id=gerste></td>
				<td><input type=number name=num_ger placeholder=0></td>
			</tr>
			<tr>
				<td>Palmen</td>
				<td id=palmen></td>
				<td><input type=number name=num_palm placeholder=0></td>
			</tr>
			<tr>
				<td>Salz</td>
				<td id=salz></td>
				<td><input type=number name=num_salz placeholder=0></td>
			</tr>
			<tr>
				<td>Wein</td>
				<td id=wein></td>
				<td><input type=number name=num_wein placeholder=0></td>
			</tr>
		</table>
		<button type=submit id=ButVerk>Verkaufen</button>
	</form>
</body>
</html>