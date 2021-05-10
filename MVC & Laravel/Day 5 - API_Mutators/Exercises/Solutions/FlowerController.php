<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlowerRequest;
use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.flowers-list', ['flowers' => $flowers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flowers.create-flower');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlowerRequest $request)
    {
        /*
            We can create a 'Form Request' to deal with our own validation and logic.
        */

        // Use my own validation rules (defined in the StoreFlowerRequest)
        $request->validated();

        //1. create new flower
        $flower = new Flower;
        //2. set properties of the flower
        $flower->name = $request->name;
        $flower->price = $request->price;
        //3. Save the Flower : this will insert into db
        $flower->save();

        // Redirect to flowers page and send information through session
        return redirect('flowers')->with('success', $request->name . ' was created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flower = Flower::find($id);

        return view('flowers.flower-detail', ['flower' => $flower]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Return an array even if you have only one flower as result        
        $flower = Flower::find($id);

        // Need to return only the first element in my array (the first flower)
        return view('flowers.update-flower', ['flower' => $flower]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFlowerRequest $request, $id)
    {
        /*
            We can create a 'Form Request' to deal with our own validation and logic.
        */

        // Use my own validation rules (defined in the StoreFlowerRequest)
        $request->validated();

        //1. create new flower
        $flower = Flower::find($id);
        //2. update properties of the flower
        $flower->name = $request->name;
        $flower->price = $request->price;
        //3. Save the Flower : this will insert into db
        $flower->save();

        return redirect('flowers')->with('success', $request->name . ' was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Flower::destroy($id);

        if ($result)
            return 'Deleted successfully';
        //return redirect('flowers')->with('success', 'Flower deleted.');
    }
}
