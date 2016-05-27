<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    
    
        <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="equipo2.css"> 
        <link rel="stylesheet" href="equipo.css">


    <script type="text/javascript" src="jquery.js"></script>
     <meta charset="utf-8">



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    
  </head>

  <body>


<?php
if (isset($_POST['id'])){
$Equipo=$_POST["Equipo"];
$Jugador=$_POST["Jugador"];

}else{
$Equipo="";
$Jugador="";

}
?>
<header>
          <div class="menu" id="uno">
       <img class="icon" src="">
       <img class="icon" src="imagenes\principal.png">
       <p class="texto">Unav</p>
     </div>
     
     <div class="menu" id="dos">
       <img class="icon" src="imagenes\principal.png">
       <p class="texto">Inicio</p>
     </div>
   
     <div class="menu" id="tres">
       <img class="icon" src="imagenes\goles.png">
       <p class="texto">Goles</p>
     </div>

     <div class="menu" id="cuatro">
       <img class="icon" src="imagenes\equipo.png">
       <p class="texto">Equipo</p>
     </div>

     <div class="menu" id="cinco">
       <img class="icon" src="imagenes\jugador.png">
       <p class="texto">Jugador</p>
     </div>

     <div class="menu" id="seis">
       <img class="icon" src="imagenes\usuario.png">
       <p class="texto">Añadir usuario</p>
     </div>
  </header>

     <div class="contenedor">
       <!--reporte-->

      

       <div id="Buscar">

        <h2><span class="fontawesome-lock"></span>Buscar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><input type="text" id="Equipo" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>
            <p><input type="text" id="Jugador" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>

            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
           <input type="hidden" name="id">
  
<center><button value="1" name="env" class="button"><span>Buscar</span></button></center>


          </fieldset>

        </form>

      </div> 

         <div id="hola">

        <h2><span class="fontawesome-lock"></span>Instrucción</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><label style="color: #5353FB;">Este formulario será el encargado de ingresar, actualizar y modificar los datos de los equipos del torneo.</label></p>
          </fieldset>

        </form>

      </div> 

 <!--tabla-->
      <div id="login" class="posicion">

        <h2><span class="fontawesome-lock"></span>Goles</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
        <tr>
          <th>ID</th>
          <th>Equipo</th>
          <th>Capitan</th>
          <th>Opciones</th>
        </tr>

      <?php
include_once('reportes.php');
$tablas = new Tablas($Equipo,$Jugador);
$tabla = $tablas->usuarios();

?>  

  
        <form action="#" method="POST">
          <fieldset>
          <p><a href="equipocatalogo.php"><input type="button" id="guardar1" name="guardar" value="nuevo"></p></a>
          </fieldset>
        </form>

      </div>

  </body>	

</html>