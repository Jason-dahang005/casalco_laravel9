@extends('officer.index')
@section('title', 'Membership')
@section('officer_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Unit</th>
      <th>Membership Type</th>
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
        <td>
          @if ($m->membership_type == 0)
            <span class="badge badge-info">Online</span>
          @else
            <span class="badge badge-info">Walk-in</span>
          @endif
        </td>
        <td>{{ $m->updated_at }}</td>
        <td>
            @if($m->is_approved == 1)
              <span class="badge badge-primary">Pre-approved</span>
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