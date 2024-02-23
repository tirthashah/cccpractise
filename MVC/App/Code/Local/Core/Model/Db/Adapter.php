<?php

class Core_Model_DB_Adapter
{

    public $config = [
        "host"=> "localhost",
        "user"=> "root",
        "password"=> "",
        "database"=>"ccc_practice",
    ];
    public $connect = null;
    public function connect()
    {
        if(is_null($this->connect)){
            $this->connect = mysqli_connect(
                $this->config["host"], 
                $this->config["user"], 
                $this->config["password"], 
                $this->config["database"]);
        }
        
        return $this->connect;
    }
   
    public function fetchPairs($query)
    {
    }
    public function fetchOne($query)
    {
    }
    public function fetchRow($query)
    {
        $row=[];
        $this->connect();
        $result = mysqli_query($this->connect, $query);
        while ($_row = mysqli_fetch_assoc($result)) {   
            $row=$_row;
        }
         return $row;
    }

    
    public function insert($query)
    {
      $this->connect();
      $result = mysqli_query($this->connect(),$query);
      echo "<br>";
    var_dump($result);
      if($result){
    echo mysqli_insert_id($this->connect());
        return mysqli_insert_id($this->connect());
        }else{
            return FALSE;
        }
    }

    
    public function update($query)
    {
        $sql = mysqli_query($this->connect(), $query);
        if ($sql) {
            echo "<script>alert('data update sucessfully ')</script>";
        } else {
            return FALSE;
        }
    }
    public function delete($query)
    {
       
        $sql = mysqli_query($this->connect(), $query);
        if ($sql) {
            echo "<script>alert('data deleted sucessfully ')</script>";
        } else {
            echo "<script>alert('')</script>";
         
        }
    }

    public function query($query)
    {
    }
    public function fetchAll($query)
    {
        $row=[];
        $result = $this->connect()->query($query);
        while($_row = mysqli_fetch_assoc($result)){
            $row[] = $_row;
        }
        return $row;
    }

}