<?php

namespace App\Http\Controllers\officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipApplication;

class PreMembershipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $membership = MembershipApplication::where('is_approved', 0)->get();
        return view('officer.membership-application', compact('membership'));
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
    public function store(Request $request)
    {
        // $member_app = Membership::all();
        // return view('officer.membership')->with('member_app', $member_app);
        
    }

    /**
     * Display the specified resource.
     *
     * @param App\Membership; $membership 
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        $membership = MembershipApplication::where('is_approved', 1)->get();
        return view('officer.membership-application', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membership = MembershipApplication::find($id);
        return view('officer.membership-application', compact('membership'));
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
        $membership = MembershipApplication::find($id);
        $membership->is_approved = $request->is_approved;
        $membership->acc_id = $request->acc_id;
        $membership->or_no = $request->or_no;
        $membership->save();

        return back();
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
