@extends('client.layout.index2')
@section('title', 'Express Loan Form')
@section('client_content')
    
<div class="form">
    <label for="">Name of Member</label>
    <input type="text" name="" id=""><br>

    <label for="">Date</label>
    <input type="date" name="" id=""><br>

    <label for="">Present Address</label>
    <input type="text" name="" id=""><br>

    <label for="">Account Number</label>
    <input type="text" name="" id=""><br>

    <label for="">Permanent Address</label>
    <input type="text" name="" id=""><br>

    <label for="">Type of loan applied</label>
    <input type="checkbox" name="PCL" id="">PCL
    <input type="checkbox">FCL
    <input type="checkbox">ICL
    <input type="checkbox">BDL
    <input type="checkbox">CALAMITY
    <br>

    <label for="">Employer</label>
    <input type="text"><br>

    
</div>




@endsection