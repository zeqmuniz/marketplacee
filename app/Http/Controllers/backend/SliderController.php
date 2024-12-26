<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * exibir uma lista dos resultados da pesquisa.
     */
    public function index()
    {
        return view('admin/slider/index');
    }

    /**
     * Mostrar o formulário para criar um novo ...
     */
    public function create()
    {
        return view('admin/slider/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            //'banner' => ['required', 'image', 'max:2048'],
            'title_on' => ['string', 'max:200'],
            'title_two' => ['required', 'max:200'],
            'starting_price' => ['max:200'],
            'link' => ['url'],
            'serial' => ['required','integer'],
            'status' => ['required'],

        ]);

        $slider = new Slider();

        $slider->title_on = $request->title_on;
        $slider->title_two = $request->title_two;
        $slider->starting_price = $request->starting_price;
        $slider->link = $request->link;
        $slider->serial = $request->serial;
        $slider->status = $request->status;
        $slider->save();

        toastr()->success('Cadastrado com sucesso!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
