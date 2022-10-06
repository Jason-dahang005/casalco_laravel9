@extends('admin.index')
@section('title', 'Member')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Account Number</th>
      <th>Unit</th>
      <th>Date Registered</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($membership as $m)
        <tr>
        <td>{{ $m->Fname }}</td>
        <td>{{ $m->Lname }}</td>
        <td>{{ $m->acc_id }}</td>
       
       <td>{{$m->unit}}</td>
       <td>{{ $m->updated_at }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection