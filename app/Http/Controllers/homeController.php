<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Informasi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

/**
 *
 */
class HomeController extends CustomController
{

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|JsonResponse
     */
    public function index()
    {
        $informasi = Informasi::get()->last();
        return view('home', ['informasi' => $informasi]);
    }
}
