<html>
<body>
<?php
	$xml=simplexml_load_file("cinema.xml");
	foreach($xml->filme as $f) {
		echo "<b>".$f["nome"]."</b><br>";
		echo "Gênero: ".$f->genero."<br>";
		echo "Duração: ".$f->duracao."<br>";
		echo "Sala: ".$f->sala."<br>";
		echo "Capacidade da sala: ".$f->capacidade."<br>";
		echo "Horário de exibição: ".$f->horarios."<br><br>";
	}
?>
</body>
</html>