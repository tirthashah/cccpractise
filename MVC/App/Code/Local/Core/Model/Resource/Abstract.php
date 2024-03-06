<?php
class Core_Model_Resource_Abstract {
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName,$primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
    public function getPrimaryKey(){
        return $this->_primaryKey;
    }
    public function getTableName(){
        return $this->_tableName;
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();//adapter no obj apse
    }

    public function load($id,$column=null){
        $query = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id}";  
        
        return $this->getAdapter()->fetchRow($query);
    }

    public function save(Core_Model_Abstract $abstract)
    {
        $data = $abstract->getData();
        print_r($data);
        print_r($this->getPrimaryKey());
        if(isset($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()])){
            unset($data[$this->getPrimaryKey()]);
            $sql = $this->editSql(
                $this->getTableName(),
                $data, 
                [$this->getPrimaryKey()=>$abstract->getId()]
            );
            $id = $this->getAdapter()->update($sql);
        }else{
        $sql = $this->insertSql($this->getTableName(),$data);
        $id = $this->getAdapter()->insert($sql);
        $abstract->setId($id);
    }
    }

    public function delete(Core_Model_Abstract $abstract )
    {
        $id = $abstract->getId();
        $where = [$this->getPrimaryKey() => $id];
        $sql = $this->deleteSql($this->getTableName(),$where);
        return $this->getAdapter()->delete($sql);
    }

    function editSql( $table, $data, $condition=[]) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }
        $set = rtrim($set, ", ");
    
        $conditions = "";
        foreach ($condition as $key => $value) {
            $conditions .= "$key = '$value' AND ";
        }
        $conditions = rtrim($conditions, " AND ");
        $query = "UPDATE $table SET $set WHERE $conditions";
        return $query;
    }
    public function deleteSql($table_name, $where)
    {
        $where_con_arr = [];
        foreach ($where as $field => $value) {
            $where_con_arr[] = "`$field`='$value'";
        }
        $where_con_str = implode(" AND ", $where_con_arr);
        return "DELETE FROM {$table_name} WHERE {$where_con_str}";

    }

    public function insertSql($tableName, $data)
    {
        // print_r($data);
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", ($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values});";
    }

 
}