<!DOCTYPE html>
<html lang=de>
<head>
	<meta charset=UTF-8>
	<title>Amyitys Login</title>
		<link rel=stylesheet type="text/css" href="Stylesheets/stylesheet.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/index.css">
	
</head>
<body>
	<?php include 'Gruppen_de/index.html';?>
</body>
</html>

<!--
===================================
=== Feedback Alpers, 2016-06-08 ===
===================================

- Leider haben Sie hier fast ausschließlich HTML 4.01 programmiert. 
Bitte ändern Sie die Dokumente auf HTML 5 um. 
(div-Container werden in HTML5 nur noch in 5% all der Fälle genutzt, wo das bei HTML 4.01 der Fall war.)
Ändern Sie alle <div>-Container in die entsprechenden Container von HTML5 ab, außer in den Fällen, 
wo es keine Alternative gibt.
- Es fehlt die Internationalisierung.
- Das zeigt sich auch dadurch, dass Sie das style-Attribut bzw. einen style-Container genutzt haben. 
In HTML5 wird das Design grundsätzlich in eigene Dateien ausgelagert, 
damit eine klare Trennung zwischen Design und Struktur vorhanden ist. 
Auf diese Weise können wir Änderungen am Design durchführen, ohne die HTML-Dokumente ändern zu müssen 
und umgekehrt Änderungen an der Struktur durchführen, ohne Änderungen an den CSS-Dateien durchführen zu müssen.
In den HTML-Dokumenten des Projekts 1 ist die Verwendung von "style" ein Verstoß gegen die Vorgaben. 
Sie dürfen CSS einsetzen, aber nicht mittels style.
- Bei HTML5 gibt es auch einen Änderung, was die Notwendigkeit von Anführungszeichen angeht. 
Arbeiten Sie das bitte in Ihre Dokumente ein.
- Kommentare sollten Sie nur dann erstellen, wenn es nötig ist, zu erklären, 
was eine Programmzeile oder ein Programmteil bewirken soll. 
Dass ein label-Container einer Beschriftung für einen anderen Container enthält ist beispielsweise 
ein HTML-Standard und damit nichts, was dokumentiert/kommentiert werden müsste.
- Benutzen Sie innerhalb von Formularen bitte ausschließlich input-Container für Elemente, 
die Nutzer bedienen können (also auch für Schaltflächen).
- Der legend-Container ist die Überschrift eines Formulars. 
Eine Designvorgabe, indem Sie einen h3-Container verwenden ist nicht zulässig.
- Bitte seien Sie mit der Verwendung von Einrückungen sparsam: 
Eine Einrückung für Elemente innerhalb eines Rumpfes ist gut. 
Mehr oder weniger Einrückungen verschlechtern die Lesbarkeit.
- Im Aufgabenteil (2.) HTML der abschließenden Aufgabenstellung ist vorgegeben, 
dass Gruppen als eigenständige PHP-Datei programmiert werden sollen. Holen Sie das bitte nach.
-->