<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class SellersController extends Controller
{
    private $view = '';

    public function __construct()
    {
        $this->view = 'sellers';
    }


    public function index()
    {
        return view($this->view.'index');
    }

    public function edit($id)
    {
        Seller::findOrFail($id);
        return view($this->view.'edit');
    }
}
