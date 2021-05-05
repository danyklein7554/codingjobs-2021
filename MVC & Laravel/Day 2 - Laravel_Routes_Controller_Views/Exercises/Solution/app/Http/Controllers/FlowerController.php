<?php

namespace App\Http\Controllers;

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
        $flowers = DB::select('SELECT * FROM flowers');
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
    public function store(Request $request)
    {
        // Function to be call when you submit the form
        DB::insert('INSERT INTO flowers(name, price)
        VALUES(?, ?)', [$request->name, $request->price]);

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
        // Return an array even if you have only one flower as result
        $flower = DB::select('SELECT * 
        FROM flowers
        WHERE id = ?', [$id]);

        // Need to return only the first element in my array (the first flower)
        return view('flowers.update-flower', ['flower' => $flower[0]]);
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
        DB::update('UPDATE flowers
        SET name=?, price=?
        WHERE id=?', [$request->name, $request->price, $id]);

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
        $result = DB::delete('DELETE FROM flowers
        WHERE id = ?', [$id]);

        if ($result)
            return redirect('flowers')->with('success', 'Flower deleted.');
    }
}
