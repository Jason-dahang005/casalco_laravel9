@extends('officer.index')
@section('title', 'Membership')
@section('officer_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Unit</th>
      <th>Date Pre-approved</th>
      <th>Status</th>
      {{-- <th>Actions</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach ($membership as $m)
        <tr>
        <td>{{ $m->Fname }}</td>
        <td>{{ $m->Lname }}</td>
        <td>{{ $m->unit }}</td>
        <td>{{ $m->updated_at }}</td>
        <td>
            @if($m->status == 1)
            <span class="badge badge-info">Pre-approved</span>
            @else
            <span class="badge badge-success">Approved</span>
            @endif
        </td>
        {{-- <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $m->id }}">Details</button>
        </td> --}}
        </tr>
    @endforeach
  </tbody>
</table>

@endsection