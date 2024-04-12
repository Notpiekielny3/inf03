<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Port lotniczy</title>
	<link rel="stylesheet" type="text/css" href="styl5.css">
</head>
<body>
	<section class="banner">
		<img src="zad5.png" alt="logo lotnisko">
	</section>
	<section id="middle-banner">
		<h1>Przyloty</h1>
	</section>
	<section class="banner">
		<h3>przydatne linki</h3>
		<a target="blank" href="kwerendy.txt">Pobierz ...</a>
	</section>
	<section id="main">
		<table>
			<tr>
				<th>czas</th>
				<th>kierunek</th>
				<th>numer resju</th>
				<th>status</th>
			</tr>
			<!-- Efekt działania skryptu 1 -->
			<?php

		$id_polaczenia = mysqli_connect("localhost", "root", "", "egzamin");


		$sql = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC";
		$result = mysqli_query($id_polaczenia, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["czas"] . "</td>";
			echo "<td>" . $row["kierunek"] . "</td>";
			echo "<td>" . $row["nr_rejsu"] . "</td>";
			echo "<td>" . $row["status_lotu"] . "</td>";
			echo "</tr>";
		}


// Zamknięcie połączenia
mysqli_close($id_polaczenia);
?>
		</table>
	</section>
	<section id="footer-left">
		<!-- Efekt ddziałania skryptu 2 -->
	</section>
	<section id="footer-right">
		Autor: 823465378465
	</section>
</body>
</html>