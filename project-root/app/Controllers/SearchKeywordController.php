<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SearchKeywordModel;

class SearchKeywordController extends BaseController
{
//    public $skmodel = model('App\Models\SearchKeywordModel');
    public function searchKeyword($keyword)
    {
        $skmodel = new SearchKeywordModel();
        $data['keyword'] = $keyword;
        $data['content'] = $skmodel->where('KEYWORD', $keyword)->first()['CONTENT'];

//        $data['content'] = $result;
//
        if ($data['content'] === null) {
            $data['content'] = 'Not Found';
        }

//        echo view('Templates/header',$data);
        echo view('searchKeywordView', $data);
//        echo view('Templates/footer');
    }
}