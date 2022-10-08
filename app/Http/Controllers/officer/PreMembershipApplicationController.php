<?php

namespace App\Http\Controllers\officer;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use App\Models\MembershipApplication;
use App\Models\Spouse;

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
    public function store(Request $r)
    {
        
        // if(empty($r->spouseFname)){
        //     $m = new MembershipApplication();
        //     $m->Fname = $r->Fname;
        //     $m->Mname = $r->Mname;
        //     $m->Lname = $r->Lname;
        //     $m->suffix = $r->suffix;
        //     $m->gender = $r->gender;
        //     $m->dob = $r->dob;
        //     $m->Bplace = $r->Bplace;
        //     $m->address = $r->address;
        //     $m->unit = $r->unit;
        //     $m->occupation = $r->occupation;
        //     $m->educ = $r->educ;
        //     $m->civilStatus = $r->civilStatus;
        //     $m->religion = $r->religion;
        //     $m->MI = $r->MI;
        //     $m->contactNum = $r->contactNum;
        //     $m->TIN = $r->TIN;
        //     $m->SSSnum = $r->SSSnum;
        //     $m->email = $r->email;
        //     $m->NumDependents = $r->NumDependents;
        //     $m->membership_type = 1;
        //     $m->Mothers_Mname = $r->Mothers_Mname;
        //     $m->save();

        //     $b = new Beneficiary();
        //     $b->membership_application_id = $m->id;
        //     $b->benName = $r->benName;
        //     $b->benRelation = $r->benRelation;
        //     $b->benAge = $r->benAge;
        //     $b->benAddress = $r->benAddress;
        //     $b->save();

        // }elseif (empty($r->benName)) {
        //     $m = new MembershipApplication();
        //     $m->Fname = $r->Fname;
        //     $m->Mname = $r->Mname;
        //     $m->Lname = $r->Lname;
        //     $m->suffix = $r->suffix;
        //     $m->gender = $r->gender;
        //     $m->dob = $r->dob;
        //     $m->Bplace = $r->Bplace;
        //     $m->address = $r->address;
        //     $m->unit = $r->unit;
        //     $m->occupation = $r->occupation;
        //     $m->educ = $r->educ;
        //     $m->civilStatus = $r->civilStatus;
        //     $m->religion = $r->religion;
        //     $m->MI = $r->MI;
        //     $m->contactNum = $r->contactNum;
        //     $m->TIN = $r->TIN;
        //     $m->SSSnum = $r->SSSnum;
        //     $m->email = $r->email;
        //     $m->NumDependents = $r->NumDependents;
        //     $m->membership_type = 1;
        //     $m->Mothers_Mname = $r->Mothers_Mname;
        //     $m->save();

        //     $s = new Spouse();
        //     $s->membership_application_id = $m->id;
        //     $s->spouseFname = $r->spouseFname;
        //     $s->spouseAge = $r->spouseAge;
        //     $s->spouseOcc = $r->spouseOcc;
        //     $s->spouseMI = $r->spouseMI;
        //     $s->spouseEmplrName = $r->spouseEmplrName;
        //     $s->spouseConNum = $r->spouseConNum;
        //     $s->save();
        // }

        // elseif (empty($r->benName) && empty($r->spouseFname)) {
        //     $m = new MembershipApplication();
        //     $m->Fname = $r->Fname;
        //     $m->Mname = $r->Mname;
        //     $m->Lname = $r->Lname;
        //     $m->suffix = $r->suffix;
        //     $m->gender = $r->gender;
        //     $m->dob = $r->dob;
        //     $m->Bplace = $r->Bplace;
        //     $m->address = $r->address;
        //     $m->unit = $r->unit;
        //     $m->occupation = $r->occupation;
        //     $m->educ = $r->educ;
        //     $m->civilStatus = $r->civilStatus;
        //     $m->religion = $r->religion;
        //     $m->MI = $r->MI;
        //     $m->contactNum = $r->contactNum;
        //     $m->TIN = $r->TIN;
        //     $m->SSSnum = $r->SSSnum;
        //     $m->email = $r->email;
        //     $m->NumDependents = $r->NumDependents;
        //     $m->membership_type = 1;
        //     $m->Mothers_Mname = $r->Mothers_Mname;
        //     $m->save();
        // }

        // else{
        //     $m = new MembershipApplication();
        //     $m->Fname = $r->Fname;
        //     $m->Mname = $r->Mname;
        //     $m->Lname = $r->Lname;
        //     $m->suffix = $r->suffix;
        //     $m->gender = $r->gender;
        //     $m->dob = $r->dob;
        //     $m->Bplace = $r->Bplace;
        //     $m->address = $r->address;
        //     $m->unit = $r->unit;
        //     $m->occupation = $r->occupation;
        //     $m->educ = $r->educ;
        //     $m->civilStatus = $r->civilStatus;
        //     $m->religion = $r->religion;
        //     $m->MI = $r->MI;
        //     $m->contactNum = $r->contactNum;
        //     $m->TIN = $r->TIN;
        //     $m->SSSnum = $r->SSSnum;
        //     $m->email = $r->email;
        //     $m->NumDependents = $r->NumDependents;
        //     $m->membership_type = 1;
        //     $m->Mothers_Mname = $r->Mothers_Mname;
        //     $m->save();

        //     $s = new Spouse();
        //     $s->membership_application_id = $m->id;
        //     $s->spouseFname = $r->spouseFname;
        //     $s->spouseAge = $r->spouseAge;
        //     $s->spouseOcc = $r->spouseOcc;
        //     $s->spouseMI = $r->spouseMI;
        //     $s->spouseEmplrName = $r->spouseEmplrName;
        //     $s->spouseConNum = $r->spouseConNum;
        //     $s->save();

        //     $b = new Beneficiary();
        //     $b->membership_application_id = $m->id;
        //     $b->benName = $r->benName;
        //     $b->benRelation = $r->benRelation;
        //     $b->benAge = $r->benAge;
        //     $b->benAddress = $r->benAddress;
        //     $b->save();
        // }


        return redirect('/officer/membership-application')->with('success','Membership Application Successfully Sent, Please Just Wait For A Call/Email');
        
    }

    /**
     * Display the specified resource.
     *
     * @param App\MembershipApplication; $membership
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipApplication $membership)
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
