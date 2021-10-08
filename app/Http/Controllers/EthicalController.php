<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ethical;
use App\Models\Category;
use App\Http\Requests\EthicalRequest;

class EthicalController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $query = Ethical::query();
        if (!empty($name)) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        if (!empty($category)) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', 'like', '%' . $category . '%');
            });
        }
        $ethicals = $query->paginate(10);
        $ethicals->appends(compact('name', 'category'));

        return view('ethicals.index', compact('ethicals'));
    }

    public function show(Ethical $ethical)
    {
        return view('ethicals.show', compact('ethical'));
    }

    public function create()
    {
        $ethical = new Ethical();
        $categories = Category::all();
        return view('ethicals.create', compact('ethical', 'categories'));
    }

    public function store(EthicalRequest $request)
    {
        $ethical = new Ethical();

        $ethical->name = $request->name;
        $ethical->company = $request->company;
        $ethical->price = $request->price;
        $ethical->image_url = $request->image_url;
        $ethical->goods_url = $request->goods_url;
        $ethical->category_id = $request->category_id;
        $ethical->materials = $request->materials;
        $ethical->logistics = $request->logistics;

        $ethical->save();

        return redirect()->route('ethicals.index');
    }

    public function edit(Ethical $ethical)
    {
        $categories = Category::all();
        return view('ethicals.edit', compact('ethical', 'categories'));
    }

    public function update(Ethical $ethical, EthicalRequest $request)
    {
        $ethical->name = $request->name;
        $ethical->company = $request->company;
        $ethical->price = $request->price;
        $ethical->image_url = $request->image_url;
        $ethical->goods_url = $request->goods_url;
        $ethical->category_id = $request->category_id;
        $ethical->materials = $request->materials;
        $ethical->logistics = $request->logistics;

        $ethical->save();

        return redirect()->route('ethicals.show', $ethical);
    }

    public function destroy(Ethical $ethical)
    {
        $ethical->delete();
        return redirect()->route('ethicals.index');
    }
}
