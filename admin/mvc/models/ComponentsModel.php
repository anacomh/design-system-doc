<?php

    class ComponentsModel extends BaseModel{
        
        public function getAll(){
            return $this->database->getRows("SELECT * FROM components
                                             WHERE component_trash = 0");
          }

          public function getDetail($id){
            return $this->database->getSingleRow("SELECT * FROM components
                                                  WHERE component_id = '$id' ");
          }          


          public function update($id,$title,$status,$usage,$states,$anatomy,$guidelines){
          //Update Database
          $this->database->query("UPDATE components SET
                                 component_title = '$title',
                                 component_status = '$status',
                                 component_usage = '$usage',
                                 component_states = '$states',
                                 component_anatomy = '$anatomy',
                                 component_guidelines = '$guidelines'
                                 WHERE
                                 component_id = '$id'
                                 ");
        }          

        //Insert new record into Database
        public function create(){
            $new_id = $this->database->insert("INSERT INTO components() VALUES ()");
            return $new_id;
          }          
    
    
        }

 ?>
