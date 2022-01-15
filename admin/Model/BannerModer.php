<?php
include_once("DataProvider.php");
class Banner {
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
    function getBannerDuaVaoID($id){
        $sql = "SELECT * FROM banner WHERE banner_id = $id";
        return $this->da->Fetch($sql);
    }
    function getBanner(){
        $sql = "SELECT * FROM banner";
        return $this->da->ExecuteQuery($sql);
    }
    public function getID(){
        $sql = self::$conn->prepare("SELECT banner_id FROM banner");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function DeleteBanner($id)
    {
        $sql = "Delete from banner where banner_id=$id";
        return $this->da->ExecuteQuery($sql);
    }
    public function InsertBanner($banner_title, $banner_content, $banner_img)
    {
        $sql = "Insert into banner(banner_title, banner_content, banner_img) values ('$banner_title', '$banner_content', '$banner_img')";
        return $this->da->ExecuteQuery($sql);
    }
    public function UpdateBanner($banner_id, $banner_title, $banner_content, $banner_img)
        {
            if ($banner_img=="") {
                $sql = "Update banner set banner_title = '$banner_title', banner_content = '$banner_content' where banner_id = $banner_id";
            } else {
                $sql = "Update banner set banner_title = '$banner_title', banner_content = '$banner_content', banner_img = '$banner_img' where banner_id = $banner_id";
            }
            return $this->da->ExecuteQuery($sql);
        }
}