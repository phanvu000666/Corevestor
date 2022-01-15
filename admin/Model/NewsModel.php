<?php
    include_once("DataProvider.php");
    class News
    {
        private $da;
        protected static $_instance;
        public static function getInstance()
        {
            if(self::$_instance !== null){
                return self::$_instance;
            }
            self::$_instance = new self();
            return self::$_instance;
        }
        public function __construct()
        {
            $this->da = new DataProvider();
        }
        function getNewsDuaVaoID($id){        
            $sql = "SELECT * FROM news WHERE news_id = $id";
            return $this->da->ExecuteQuery($sql);
        }
        function getNewsDuaVaoIDManage($id){        
            $sql = "SELECT * FROM news WHERE news_id = $id";
            return $this->da->Fetch($sql);
        }
        function get3News(){
            $sql = "SELECT * FROM news LIMIT 3";
            return $this->da->ExecuteQuery($sql);
        }
        function getNews(){
            $sql = "SELECT * FROM news";
            return $this->da->ExecuteQuery($sql);
        }
        public function getID(){
            $sql = "SELECT news_id FROM news";
            return $this->da->Fetch($sql);
        }
        public function DeleteNews($id)
        {
            $sql = "Delete from news where news_id=$id";
            return $this->da->ExecuteQuery($sql);
        }
        public function InsertNews($news_title, $news_content, $news_img, $post_athour)
        {
            $sql = "Insert into news(news_title, news_content, news_img, post_athour) values ('$news_title', '$news_content', '$news_img', '$post_athour')";
            return $this->da->ExecuteQuery($sql);
        }
        public function UpdateNews($news_id, $news_title, $news_content, $news_img="",$post_athour)
            {
                if ($news_img=="") {
                    $sql = "Update news set news_title = '$news_title', news_content = '$news_content', post_athour = '$post_athour' where news_id = $news_id";
                } else {
                    $sql = "Update news set news_title = '$news_title', news_content = '$news_content', news_img = '$news_img', post_athour = '$post_athour' where news_id = $news_id";
                }
                return $this->da->ExecuteQuery($sql);
            }
        //==================
        function Search($keyword)
        {
            $key='%$keyword%';
            $sql = "SELECT * FROM news WHERE news_title  LIKE  $key";
            return $this->da->FetchAll($sql);
        }
        public function CountNews(){
            $sql="Select news_id from news";
            return $this->da->NumRows($sql);
        }
    }