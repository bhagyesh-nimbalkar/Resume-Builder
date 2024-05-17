<?php 
  class Database{
    private $connection;
   function __construct(){
    try{
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    }catch(Exception $e)
    {
        echo $e->getMessage();
    }
   }
   public function clean($data)
   {
       return $this->connection->real_escape_string($data);
   }
   private function getBindParmsDataType($data)
   {
         $dt='';
         foreach($data as $value)
         {
              if(is_float($value)) $dt.='d';
              else if(is_integer($value)) $dt.='i';
              else if(is_string($value)) $dt.='s';
              else $dt.='b';
         }
         return $dt;
   }
   private function getLabels($values)
   {
        $label = '';
        foreach($values as $value)
        {
              $label.='?,';
        }
        $label = substr_replace($label,'',-1);
        return $label;
   }
   private function getLabelsWithName($columns)
   {
        $label = '';
        $columns = explode(',',$columns);
        foreach($columns as $column)
        {
              $label.=$column.'=?,';
        }
        $label = substr_replace($label,'',-1);
        return $label;
   }
   public function insert($table,$columns,$value)
   {
        $label = $this->getLabels($value);
        $query = "INSERT INTO $table($columns) VALUES($label)";
        $obj = $this->connection->prepare($query);
        $obj->bind_param($this->getBindParmsDataType($value),...$value);
        return $obj->execute();
   }
   public function read($table,$columns="*",$condition="")
   {
        $query = "SELECT $columns FROM $table $condition";
        $result = $this->connection->query($query);
        return $result->fetch_all(true);
   }
   public function delete($table,$condition)
   {
        $query = "DELETE FROM $table WHERE $condition";
        return $this->connection->query($query);
   }
   public function update($table,$columns,$value,$condition)
   {
        $label = $this->getLabelsWithName($columns);
        $query = "UPDATE $table SET $label WHERE $condition";
        $obj = $this->connection->prepare($query);
        $obj->bind_param($this->getBindParmsDataType($value),...$value);
        return $obj->execute();
   }
  }
?>