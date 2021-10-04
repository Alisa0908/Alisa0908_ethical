<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ethical;

class EthicalController extends Controller
{
    public function index()
    {
        $ethicals = Ethical::all();
        return view('ethicals.index', compact('ethicals'));
    }

    public function show(Ethical $ethical)
    {
        return view('ethicals.show', compact('ethical'));
    }
}
