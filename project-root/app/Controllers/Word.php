<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Word extends BaseController
{
    public function index()
    {
        return view('wordView');
    }
    public function word($word)
    {
        $data['word'] = $word;

        echo view('Templates/header');
        echo view('wordView', $data);
        echo view('Templates/footer');
    }
}