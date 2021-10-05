<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ethical;
use App\Models\Category;

class EthicalController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $query = Ethical::query();
        if(!empty($name)) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        if(!empty($category)) {
            $query->where('category', 'like', '%' . $category . '%');
        }
        $ethicals = $query->paginate();

        return view('ethicals.index', compact('ethicals'));
    }

    public function show(Ethical $ethical)
    {
        return view('ethicals.show', compact('ethical'));
    }

    public function create()
    {
        return view('ethicals.create');
    }

    public function store(Ethical $ethical)
    {
        return redirect('ethicals.index');
    }

    public function update(Ethical $ethical)
    {
        return redirect('ethicals.index');
    }

    public function destroy()
    {
        return redirect('ethicals.destroy');
    }
}
