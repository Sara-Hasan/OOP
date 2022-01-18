<?php
require('connect.php');
if(isset($_POST) & !empty($_POST)){
    $id           = $_POST['id'];
     $coffeename  = $_POST['coffeename'];
     $coffeetype  = $_POST['coffeetype'];
     $country     = $_POST['country'];
     $Coffeeprice = $_POST['Coffeeprice'];  
    //  echo $Coffeeprice;
    //  echo $id;
    //  echo $coffeename;
    //  echo $coffeetype;
    //  echo $country;
}

//object
$result = $database->read();

?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Coffee</h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>coffeename</th>
    <th>coffeetype</th>
    <th>Coffeeprice</th>
    <th>Country</th>
    <th>Edit</th>
  </tr>
  <?php  while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['coffeename']; ?></td>
    <td><?php echo $row['coffeetype']; ?></td>
    <td><?php echo $row['country']; ?></td>
    <td><?php echo $row['Coffeeprice']; ?></td>
    <td> <a href="update.php?id=<?php echo $row['id']; ?>">Edit </a><a href="delete.php?id=<?php echo $row['id']; ?>"> Delete</a></td></td>  
  </tr>
  <?php   } ?>
</table>

</body>
</html>

