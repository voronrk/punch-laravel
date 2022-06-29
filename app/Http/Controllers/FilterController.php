<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Material;
use App\Models\Machine;


class FilterController extends Controller
{
    public function __invoke() {
        $products = Product::all();
        $materials = Material::all();
        $machines = Machine::all();
        return view('admin', [
            'products' => $products,
            'materials' => $materials,
            'machines' => $machines,
        ]);
    }
}
