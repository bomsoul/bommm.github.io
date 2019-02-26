<?php
    namespace Core;

    use \Core\Connection;

    class QueryBuilding{
        private  $pdo;
        
        public function __construct(){ //construct
            $this->pdo = Connection::make();
        }

        public function selectAll($table){
            $query  = $this->pdo->prepare("select * from ".$table);
            $query->execute();
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }
    }