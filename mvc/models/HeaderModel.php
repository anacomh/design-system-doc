<?php

    class HeaderModel extends BaseModel{
        //Return all posts from DB
        public function getAll(){
            return $this->database->getRows("SELECT * FROM components WHERE component_trash = 0 AND component_visible = 1 ORDER BY component_title ASC");
        }
        //Return all posts from DB
        public function getComponents(){
            return $this->database->getRows("SELECT * FROM components WHERE component_trash = 0 AND component_visible = 1 ORDER BY component_title ASC");
        }        
    }
    
 ?>
