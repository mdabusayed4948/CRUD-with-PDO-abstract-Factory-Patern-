<?php
include "Main.php";

class Teacher extends Main{
    protected $table = 'tbl_teacher';
    private $name;
    private $email;
    private $dep;
    private $age;
    

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setDep($dep){
        $this->dep = $dep;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
    
    public  function insert(){
        $sql = "INSERT INTO $this->table(name, dep, age, email) VALUES(:name,  :dep, :age, :email)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }

    public function update($id){
       $sql = "UPDATE $this->table SET name=:name, email=:email, dep=:dep, age=:age WHERE id=:id"; 
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

   

    
}
?>