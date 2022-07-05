<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePunchRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Punch;
use App\Models\PunchPic;
use App\Models\PunchProduct;
use App\Models\PunchMaterial;
use App\Models\PunchMachine;

class PunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePunchRequest $request)
    {

        // echo "<pre>";
        // // echo print_r($request->collect(),true);
        // echo print_r($request->all(),true);
        // echo "</pre>";
        // die();

        $validatedRequest = $request->validated();

        $punch = Punch::create([
            'name' => $validatedRequest['title'],
            'ordernum' => $request->input('ordernum'),
            'year' => $request->input('year'),
            'size_length' => $validatedRequest['sizeLength'],
            'size_width' => $validatedRequest['sizeWidth'],
            'size_height' => $request->input('sizeHeight'),
            'knife_size_length' => $request->input('knifeSizeLength'),
            'knife_size_width' => $request->input('knifeSizeWidth'),
        ]);

        foreach($request->products as $product) {
            $punchProducts = new PunchProduct;
            $punch->products()->create([
                'product_id' => $product
            ]);
        };

        foreach($request->materials as $material) {
            $punchProducts = new PunchMaterial;
            $punch->materials()->create([
                'material_id' => $material
            ]);
        };

        foreach($request->machines as $machine) {
            $punchProducts = new PunchMachine;
            $punch->machines()->create([
                'machine_id' => $machine
            ]);
        };

        foreach($request->pics as $pic) {
            $file = $pic;
            $upload_folder = 'public/img';
            $path = Storage::putFile($upload_folder, $file);
            $punchPic = new PunchPic;
            $punch->pics()->create([
                'value' => $path
            ]);
        };        

        return view('test', ['request' => $request, 'pic1' => $path]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
