<?php
$registros=array(
		0=>array (
				"id"=>"1",
				"titulo"=>"contenido uno",
				"contenido"=>"este parrafo 
				es el contenido numero uno ",
				"autor"=>"juan"
				
		),

		1=>array (
				"id"=>"2",
				"titulo"=>"contenido dos",
				"contenido"=>"este parrafo
				es el contenido numero dos ",
				"autor"=>"arturo"
		
		),
		2=>array (
				"id"=>"3",
				"titulo"=>"contenido tres",
				"contenido"=>"este parrafo
				es el contenido numero tres ",
				"autor"=>"chuy"
		
		),
		3=>array (
				"id"=>"4",
				"titulo"=>"contenido cuatro",
				"contenido"=>"este parrafo
				es el contenido numero cuatro ",
				"autor"=>"pedro"
		
		),
		4=>array (
				"id"=>"5",
				"titulo"=>"contenido cinco",
				"contenido"=>"este parrafo
				es el contenido numero cinco ",
				"autor"=>"carlos"
		
		),
);

?>




<?php foreach ($registros as $registro){?>
<?php foreach ($registro as $campo){?>

<?php echo $campo ?><br>
 
<?php  }?>
<?php }?>

