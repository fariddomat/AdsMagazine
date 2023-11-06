<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdSlot;
use Illuminate\Http\Request;

class AdSlotController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adSlots=AdSlot::orderBy('name', 'asc')->whenSearch(request()->search)
            ->paginate(5);
        return view('dashboard.adSlots.index',compact('adSlots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.adSlots.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',

        ]);

        AdSlot::create($request->all());
        session()->flash('success','Successfully Created !');
        return redirect()->route('dashboard.adSlots.index');
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
        $adSlot=AdSlot::find($id);
        return view('dashboard.adSlots.edit',compact('adSlot'));

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
        $request->validate([
            'name'=>'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
        ]);
        $adSlot=AdSlot::find($id);

        $adSlot->update($request->all());

        session()->flash('success','Successfully updated !');
        return redirect()->route('dashboard.adSlots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adSlot=AdSlot::find($id);
        $adSlot->delete();

        session()->flash('success','Successfully deleted !');
        return redirect()->route('dashboard.adSlots.index');
    }
}
