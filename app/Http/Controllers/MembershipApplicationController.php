<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Models\Beneficiary;
use App\Models\Spouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MembershipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.membership-application');
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
        // $ms = MembershipApplication::create([
        //     'Fname'             => $r->Fname,
        //     'Mname'             => $r->Mname,
        //     'Lname'             => $r->Lname,
        //     'suffix'            => $r->suffix,
        //     'gender'            => $r->gender,
        //     'dob'               => $r->dob,
        //     'Bplace'            => $r->Bplace,
        //     'address'           => $r->address,
        //     'unit'              => $r->unit,
        //     'occupation'        => $r->occupation,
        //     'educ'              => $r->educ,
        //     'civilStatus'       => $r->civilStatus,
        //     'religion'          => $r->religion,
        //     'MI'                => $r->MI,
        //     'contactNum'        => $r->contactNum,
        //     'TIN'               => $r->TIN,
        //     'SSSnum'            => $r->SSSnum,
        //     'email'             => $r->email,
        //     'NumDependents'     => $r->NumDependents,
        //     'Mothers_Mname'     => $r->Mothers_Mname,
        //     // 'selfiepic'         => $r->selfiepic,
        //     'membership_type'   => 0
        // ]);
        $requestData = $r->all();
        $fileName =  time().$r->file('selfiepic')->getClientOriginalName();
        $path = $r->file('selfiepic')->storeAs('image', $fileName, 'public');
        $requestData["selfiepic"] = '/storage/'.$path;
        $ms = MembershipApplication::create($requestData);

        if (!empty($r->spouseFname)) {
            $ms->spouse()->create([
                'spouseFname'       => $r->spouseFname,
                'spouseAge'         => $r->spouseAge,
                'spouseOcc'         => $r->spouseOcc,
                'spouseMI'          => $r->spouseMI,
                'spouseEmplrName'   => $r->spouseEmplrName,
                'spouseConNum'      => $r->spouseConNum,
                'spouse_mother'     => $r->spouse_mother,
            ]);
        }

        if(!empty($r->benName)){
            $ms->ben()->create([
                'benName' => $r->benName,
                'benRelation' => $r->benRelation,
                'benAge' => $r->benAge,
                'benAddress' => $r->benAddress,
            ]);
        }

        // Alert::success('Submit Succesfully!', 'Watch the Seminar and Wait form a Call Thank you!');
        // $request->validate([
        //     'Fname'           => 'required',
        //     'Mname'           => 'required',
        //     'Lname'           => 'required',
        //     'gender'          => 'required',
        //     'dob'             => 'required',
        //     'Bplace'          => 'required',
        //     'address'         => 'required',
        //     'unit'            => 'required',
        //     'occupation'      => 'required',
        //     'educ'            => 'required',
        //     'MI'              => 'required',
        //     'civilStatus'     => 'required',
        //     'religion'        => 'required',
        //     'contactNum'      => 'required',
        //     'TIN'             => 'required',
        //     'SSSnum'          => 'required',
        //     'email'           => 'required',
        //     'NumDependents'   => 'required',
        //     'spouseFname'     => 'required',
        //     'spouseAge'       => 'required',
        //     'spouseOcc'       => 'required',
        //     'spouseMI'        => 'required',
        //     'spouseEmplrName' => 'required',
        //     'spouseConNum'    => 'required',
        //     'benName'         => 'required',
        //     'benRelation'     => 'required',
        //     'benAge'          => 'required',
        //     'benAddress'      => 'required',
        //     'benMothersLname' => 'required',
        //     'benMothersFname' => 'required',
        //     'benMothersMname' => 'required',
        //     //'selfiepic'       => 'required',
        //     // 'empIDpic'        => 'required',
        // ]);

        // $m = new MembershipApplication();
        // $m->Fname = $r->Fname;
        // $m->Mname = $r->Mname;
        // $m->Lname = $r->Lname;
        // $m->suffix = $r->suffix;
        // $m->gender = $r->gender;
        // $m->dob = $r->dob;
        // $m->Bplace = $r->Bplace;
        // $m->address = $r->address;
        // $m->unit = $r->unit;
        // $m->occupation = $r->occupation;
        // $m->educ = $r->educ;
        // $m->civilStatus = $r->civilStatus;
        // $m->religion = $r->religion;
        // $m->MI = $r->MI;
        // $m->contactNum = $r->contactNum;
        // $m->TIN = $r->TIN;
        // $m->SSSnum = $r->SSSnum;
        // $m->email = $r->email;
        // $m->NumDependents = $r->NumDependents;
        // $m->Mothers_Mname = $r->Mothers_Mname;
        // $m->membership_type = 0;
        // $m->save();

        // $b = new Beneficiary();
        // $b->membership_application_id = $m->id;
        // $b->benName = $r->benName;
        // $b->benRelation = $r->benRelation;
        // $b->benAge = $r->benAge;
        // $b->benAddress = $r->benAddress;
        // $b->save();

        // $s = new Spouse();
        // $s->membership_application_id = $m->id;
        // $s->spouseFname = $r->spouseFname;
        // $s->spouseAge = $r->spouseAge;
        // $s->spouseOcc = $r->spouseOcc;
        // $s->spouseMI = $r->spouseMI;
        // $s->spouseEmplrName = $r->spouseEmplrName;
        // $s->spouseConNum = $r->spouseConNum;
        // $s->spouse_mother = $r->spouse_mother;
        // $s->save();

        return redirect('pre_seminar');

        // return redirect('/')->with('success','Membership Application Successfully Sent, Please Just Wait For A Call/Email');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipApplication $membershipApplication)
    {
        //
    }
}
