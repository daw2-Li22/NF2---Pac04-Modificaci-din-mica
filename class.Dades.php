<?php
require("abstract.databoundobject.php");
class Dades extends DataBoundObject{

        protected $id;
        protected $word;
        protected $total;
        protected $ultimavisita;


        protected function DefineTableName() {
                return("datos");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "id",
                        "word" => "word",
                        "total" => "total",
                        "ultimavisita" => "ultimavisita"));
        }
}


?>