<?php
require('connect.php');
if(isset($_POST) & !empty($_POST)){
    $id          = $_GET['id'];
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
$result = $database->read($id);
$row = $result->fetch_assoc();
$results = $database->update($coffeename, $coffeetype, $country, $Coffeeprice, $id);
if($results){
  echo "Successfully updated data";
}else{
  echo "failed to update data";
}

?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Coffee</h3>

<div>
    
  <form method='post' action='view.php'>
    <label for="coffeename">Coffee Name</label>
    <input type="text" id="coffeename" name="coffeename" value='<?php echo $row['coffeename']; ?>'>

    <label for="coffeetype">Coffee Type</label>
    <input type="text" id="coffeetype" name="coffeetype" value='<?php echo $row['coffeetype']; ?>'>

    <label for="country">Country</label>
    <input type="text" id="country" name="country" value='<?php echo $row['country']; ?>'>

    <label for="Coffeeprice">Coffee price</label>
    <input type="text" id="Coffeeprice" name="Coffeeprice" value='<?php echo $row['Coffeeprice']; ?>'>
    <input type="submit" value="Update">
    
  </form>
</div>


</body>
</html>
