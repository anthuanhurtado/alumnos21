 <?php
        $db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // 
        $db_name = "m8hu70549sd5hz6o"; //nombre de base de datos
        $db_user = "vhr4alktn0c9217k"; //nombre de usuario
        $db_password = "msutue0q12dumhtr";  //contraseña 
    
      $connection = mysqli_connect('if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'vhr4alktn0c9217k', 'msutue0q12dumhtr');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");
   $sql_query = "SELECT * FROM alumnos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>