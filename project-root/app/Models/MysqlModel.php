<?php
namespace App\Models;

use CodeIgniter\Model;
class MysqlModel extends Model
{
    protected $table = 'WORD';
    protected $returnType = 'array';
    protected $allowedFields = ['KEYWORD', 'CONTENT'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}