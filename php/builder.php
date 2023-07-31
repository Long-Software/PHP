<?php
class Query
{
    private $qury = NULL;

    function __construct()
    {
    }
    function select($field, $table, $condition='') {
        $this->clear();
        return $this->qury .= 'SELECT '.$field.' '.$this->from($table).$this->where($condition).';';
    }
    function insert($table, $data) 
    {
        $this->clear();
        return $this->qury .= 'INSERT INTO '.$table.' VALUES('.$data.');';    
    }
    function delete($table, $condition='') {
        $this->clear();
        return $this->qury .= 'DELETE'.$this->from($table).$this->where($condition).';';
    }
    function update($table, $field_data, $condition='') {
        $this->clear();
        return $this->qury .= 'UPDATE '.$table.' SET '.$field_data.' '.$this->where($condition).';';
    }
    function from($table) {
        return $this->qury .= 'FROM '.$table.' ';
    }
    function where($table=NULL) {
        return $this->qury .= 'WHERE '.$table.' '; 
    }
    function clear() {
        $this->qury = NULL;
    }
}
