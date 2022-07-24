<?php
namespace App\Controllers;

use App\Controllers\BaseController;
class MysqlController extends BaseController
{
    public function mysqlUseModel($keyword)
    {
        $db = $this->databaseConnectController();
        $sql = "SELECT * FROM WORD WHERE KEYWORD='".$keyword."'";
        $query = $db->query($sql);

        $result = $query->getRow();
        $data['query'] = $sql;
        $data['keyword'] = $result->KEYWORD;
        $data['content'] = $result->CONTENT;

        if(!isset($result)) {
            $data['KEYWORD'] = "NO RESULT";
            $data['CONTENT'] = "THERE IS NO RESULT";
        }
//        echo view('Templates/header',$data);
        echo view('mysqlView', $data);
//        echo view('Templates/footer');
    }
}