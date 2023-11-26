<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Session;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator|administrator']);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons=Coupon::orderBy('expire_date', 'desc')->whenSearch(request()->search)
            ->paginate(5);
        return view('dashboard.coupons.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.coupons.create');

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
            'code'=>'required|unique:coupons,code',
            'percent'=>'required',
            'expire_date'=>'required',
        ]);

        Coupon::create($request->all());
        Session::flash('success','Successfully Created !');
        return redirect()->route('dashboard.coupons.index');
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
        $coupon=Coupon::find($id);
        return view('dashboard.coupons.edit',compact('coupon'));

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
            'code'=>'required|unique:coupons,code,' . $id,
            'percent'=>'required',
            'expire_date'=>'required',
        ]);
        $coupon=Coupon::find($id);

        $coupon->update($request->all());

        Session::flash('success','Successfully updated !');
        return redirect()->route('dashboard.coupons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon=Coupon::find($id);
        $coupon->delete();

        Session::flash('success','Successfully deleted !');
        return redirect()->route('dashboard.coupons.index');
    }
}
