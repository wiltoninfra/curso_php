<html>
<body>
<table>
<?php
require 'mysql_connect.php';
$result = (listar('posts'));
while ($row = mysql_fetch_array($result)) {
   
?>


    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['titulo'];?></td>
    <td><?php echo $row['conteudo'];?></td>
     <td>
   
    
    <a href="mysql.php?e=true&id=<?php echo $row['id'];?>">
    EDITAR</a>
    <a href="mysql.php?d=true&id=<?php echo $row['id'];?>">
    | EXLUIR </a>
    </td>
     </tr>
 <?php 
      
    
}

?>
</table>
</body>
</html>