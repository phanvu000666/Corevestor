<?php
include_once("DataProvider.php");
class Services{
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
    function getDichVuDuaVaoID($id){
        $sql = "SELECT * FROM services WHERE services_id = $id";
        return $this->da->Fetch($sql);
    }
    function getBannerDichVu($id){
        $sql = "SELECT * FROM services INNER JOIN banner ON services.services_id = banner.services_id WHERE services_id = $id";
        return $this->da->Fetch($sql);
    }
    function getDichVu(){
        $sql = "SELECT * FROM services";
        return $this->da->ExecuteQuery($sql);
    }
    public function getID(){
        $sql = self::$conn->prepare("SELECT services_id FROM services");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function DeleteServices($id)
    {
        $sql = "Delete from services where services_id=$id";
        return $this->da->ExecuteQuery($sql);
    }
    public function InsertServices($services_name, $services_title, $services_content, $services_img)
    {
        $sql = "Insert into services(services_name,services_title, services_content, services_img) values ('$services_name', '$services_title', '$services_content', '$services_img')";
        return $this->da->ExecuteQuery($sql);
    }
    public function UpdateServices($services_id, $services_name, $services_title, $services_content, $services_img="")
        {
            if ($services_img=="") {
                $sql = "Update services set services_name = '$services_name', services_title = '$services_title', services_content = '$services_content' where services_id = $services_id";
            } else {
                $sql = "Update services set services_name = '$services_name', services_title = '$services_title', services_content = '$services_content', services_img = '$services_img' where services_id = $services_id";
            }
            return $this->da->ExecuteQuery($sql);
        }
    //==================
    function Search($keyword)
    {
        $key="%$keyword%";
        //var_dump(self::$conn);
        $sql = self::$conn->prepare("SELECT * FROM products WHERE ProductName  LIKE  ? ");
        $sql-> bind_param('s',$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        //var_dump($items);
        return $items; //return an array

    }
    public function countAll(){
        $sql = "SELECT * FROM products";
        $result = self::$conn->query($sql);
        return $result->num_rows;
    }
    public function getServicesManage()
        {
            $sql = "Select ProductID, ProductName, ImageUrl, Price, Quantity, ManufacturerName, CategoryName from products p join Categories c on p.CategoryID=c.CategoryID join Manufacturers m on p.ManufacturerID=m.ManufacturerID order by p.ProductID desc";
            return $this->da->FetchAll($sql);
        }
}