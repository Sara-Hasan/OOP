<?php
class Database {
    // Create connection
    private $conn ;
    //constructor
    function __construct(){
        $this->connect_db();
    }
    //connect
    public function connect_db(){
		$this->conn = mysqli_connect('localhost', 'root', '', 'coffee');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
    //insert
    public function create ($coffeename, $coffeetype, $country, $Coffeeprice){
        $sql    = "INSERT INTO coffee (coffeename, coffeetype, country, Coffeeprice)
                               VALUES ('$coffeename', '$coffeetype', '$country',$Coffeeprice)";
        $result = mysqli_query($this->conn, $sql);  
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //select
    public function read ($id = null){
        $sql = "SELECT * FROM coffee";
        if($id){
            $sql .= " WHERE id = $id";
        }
        $result = mysqli_query($this->conn, $sql);
 		return $result;
    }
    //update
    public function update ($coffeename, $coffeetype, $country, $Coffeeprice, $id){
    $sql = "UPDATE coffee SET coffeename='$coffeename' , coffeetype='$coffeetype', country='$country', Coffeeprice='$Coffeeprice' WHERE id = $id";
    $result = mysqli_query($this->conn, $sql); 
    if($result){
        return true;
    }else{
        return false;
    }
        
    }
    //delete
    public function delete ($id){
    $sql = "DELETE FROM coffee WHERE id=$id";
    $result = mysqli_query($this->conn, $sql); 
    if($result){
        return true;
    }else{
        return false;
    }
    }
}  
$database = new Database();
?>