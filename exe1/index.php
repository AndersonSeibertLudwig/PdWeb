<html>
<body>
<?php
	$xml=simplexml_load_file("xml.xml");
	foreach($xml->disciplina as $d) {
		echo "Disclipina: ".$d["nome"]." Professor: ".$d["professor"]."<br>";
		foreach($xml->disciplina as $a){
			echo $a->aluno.": ".$a->aluno["nota"]."<br>";
		}
	}
?>
</body>
</html>