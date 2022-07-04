<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePunchRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Punch;
use App\Models\PunchPic;

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

        $validatedRequest = $request->validated();
        $file = $request->file('pic-1');
        $upload_folder = 'public/img';
        $path = Storage::putFile($upload_folder, $file);

        $punch = new Punch;
        $punch->name = $validatedRequest['title'];
        $punch->ordernum = $request->input('ordernum');
        $punch->year = $request->input('year');
        $punch->size_length = $validatedRequest['sizeLength'];
        $punch->size_width = $validatedRequest['sizeWidth'];
        $punch->size_height = $request->input('sizeHeight');
        $punch->knife_size_length = $request->input('knifeSizeLength');
        $punch->knife_size_width = $request->input('knifeSizeWidth');
        $punchId = $punch->save();

        // $punchPic = new PunchPic;
        // $punchPic->punch()->create([
        //     'value' => $path
        // ]);

        $punchPic = new PunchPic;
        $punchPic->punch_id = $punch->id;
        $punchPic->value = $path;
        $punchPic->save();

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
