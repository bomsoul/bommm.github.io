<?php 
    namespace Model;

    use \Core\QueryBuilding;

    class Country{
        public function findAll(){
            $builder = new QueryBuilding();
            return $builder->selectAll("country");
        }
    }