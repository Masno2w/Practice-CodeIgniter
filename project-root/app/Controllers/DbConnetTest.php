<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;

    class DbConnectTest extends BaseController{
        public function index(){
            $db = $this->databaseConnectController();
            $sql = "SELECT * FROM WORD WHERE KEYWORD='WOONSAM'";
            $query = $db->query($sql);

            echo "AAAAA";
            $row = $query->getRow();

            echo "<h2>";
            echo $sql;
            echo ">> ";
            echo $row->KEYWORD;
            echo"</h2>";


        }
    }


?>