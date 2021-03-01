<?php

    class ComponentsModel extends BaseModel{

        //Return all posts from DB
        public function getComponents(){
            return $this->database->getRows("SELECT * FROM components WHERE component_trash = 0 AND component_visible = 1 ORDER BY component_date DESC");
        }

        //Return post detail
        public function getDetail($id){
            // $id = $this->database->escape($id);
            return $this->database->getSingleRow("SELECT * FROM components WHERE component_trash = 0 AND component_visible = 1 AND component_id = '$id'");
        }

    }

 ?>
