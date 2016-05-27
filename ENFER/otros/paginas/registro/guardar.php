<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

require('../../conf/config.php');
$id_preguntas=$post[$rowTotal["id_preguntas"]];
$id_respuestas = $post['checkbox'];
$guardar="INSERT INTO usuario (num_consulta, id_preguntas, id_Respuestas) VALUES (1, '$id','$nombre')";
$resultados = $mysqli->query($guardar);

if($_POST['checkbox'] != "")
{
		 if(is_array($_POST['checkbox']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['checkbox'])) 
        	{
				$sql=mysql_query("INSERT INTO deporte (num_consulta, id_preguntas, id_Respuestas) VALUES (1, '$rowTotal','$rowTotal2')");
       	 	    ?>
                <hreef = "../../index.php">
                <?php
			}
   		 }
}

if($guardar and $sql){
echo '<h1>El proceso de guardado se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
}
else{
echo '<h1>El proceso de guardado no se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
		}
?>