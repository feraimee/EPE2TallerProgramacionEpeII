<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        body{
           font-size:35px;
           display:inline-block;
        }
        .btn_new{
            display:inline-block;
            background: #239baa;
            color:#fff;
            padding: 5px  25px;
            border-radius: 4px;
            margin: 20px;
        }
        table{
           border-collapse:collapse;
           font-size: 12pt;
           font-family: 'arial';         
           width: 100%
        }
        table th{
           text-align: left;
           padding: 10px;
           background: #3d7ba8;
           color: #fff; 
        }

    </style>
</head>
<body>
    <h1>List de Usuarios</h1>
    <a href="../Login/member.html"class="btn_new">Crear usuario</a>
    <table>
       <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Correo</th>
           <th>Rol</th>
           <th>Acciones</th>
       </tr>
       <?php   
    $query = ./database($conection "SELECT id, username, name FROM user INNER JOIN user ON user = user"); 
    
    $result = mysqli_num_rows($query);
    if($result > 0){
          
       while ($data = mysqli_fetch_array($query)){  

          <tr>
            <td><?php echo $data["id"];?></td>    
            <td><?php echo $data["username"];?></td>    
            <td><?php echo $data["name"];?></td>     
            <td>
              <a class="link_edit" href="#">Editar</a>
              <a class="link_delete" href="#">Eliminar</a>
            </td>        

            </tr>
       
    </table>
 

</body>
</html>