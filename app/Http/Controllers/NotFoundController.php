<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ContractView;
use Illuminate\Contracts\View\Factory as FactoryView;

class NotFoundController extends Controller
{
    public function index(): FactoryView|ContractView
    {
        return view('404');
    }
}
