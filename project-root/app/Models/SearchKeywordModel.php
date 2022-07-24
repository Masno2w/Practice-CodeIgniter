<?php
namespace App\Models;

use CodeIgniter\Model;

class SearchKeywordModel extends Model
{
    protected $table            = "WORD";
    protected $returnType       = 'array';
    protected $allowedFields    = ['KEYWORD', 'CONTENT'];
//    public function initialize()
//    {
//        $this->table            = "WORD";
//        $this->returnType       = 'array';
//        $this->allowedFields    = ['KEYWORD', 'CONTENT'];
//    }
}