<?php

function insert($table_name,$dbname){
    $colomns =$values =[];
    foreach($colomns as $key => $val1)
    {
        $columns[] = "'$key'";
        $values[] = "'". addslashes( $val1) ."'";  // add shleshe mate use thay
        }

        $columns = implode(",", $columns);
        $sql = implode(",",$values);
   echo "INSERT INTO{$table_name} ({$columns} VALUES ({$values}))";
}

insert("abc",$_POST["group1"]);

//echo"<pre>";  //formate mate
echo $_POST(["group1"]);
echo $_POST(["group1"]);
die();
// group ma array print  karavo hoy tyare
//addsplace ---  database ma code sathe enter krvu hoy toh 



function update ($t,$d = [],$where = [])

$colums = $wherecond = [];
{
  foreach($d as $feild => $val){
    $colums[] = "'$field = '$val'";



  }

  foreach($d as $feild => $val){
    $colums[] = "'$field = '$val'";
  }


  $colums = implode(",", $colums);
  $wherecode = implode (" AND",$wherecode);
"UPDATE {$T} SET {$colum} where {$wherecode};";

    //echo "UPDATE {$table_name} SET ($contct) = {VALUES} = {$values} WHERE {$colum}={$color} & ";






function getpost($key);
return $_post($key);


$procutbane = getpost('productname'); 

//getparam thi 
//mysql 

return type array string format ma ape
get post $_REQUEST

//php  insert update delete












}




















UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;

?>