<?php

    class BlogModel extends BaseModel{

        //Return all posts from DB
        public function getAll(){
            return $this->database->getRows("SELECT * FROM blog WHERE blog_trash = 0 AND blog_visible = 1 ORDER BY blog_date DESC");
        }

        //Return post detail
        public function getDetail($id){
            $id = $this->database->escape($id);
            return $this->database->getSingleRow("SELECT * FROM blog WHERE blog_trash = 0 AND blog_visible = 1 AND blog_id = '$id'");
        }

        //Return posts to show on homepage
        public function getHomePosts(){
            return $this->database->getRows("SELECT * FROM blog WHERE blog_trash = 0 AND blog_visible = 1 ORDER BY blog_date DESC LIMIT 0,3");
        }

        //Return related posts
        public function getRelated($id){
            $id = $this->database->escape($id);
            return $this->database->getRows("SELECT * FROM blog WHERE blog_trash = 0 AND blog_visible = 1 AND blog_id != '$id' ORDER BY blog_date DESC LIMIT 0,3");
        }

    }

 ?>
