@extends('admin.index')
@section('title', 'Approved Loan Applications List')
@section('admin_content')
<div class="col-md-12">
  <div class="white_shd full margin_bottom_30">
      <div class="table_section padding_infor_info">
          <div class="table-responsive-lg">
              <table class="table table-bordered table-striped table-sm" id="example5">
                  <thead>
                  <tr>
                    <th>Account No</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Loan Type</th>
                    <th>Date Applied</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach ($loan as $l)
                    <tr>
                        <td>{{ $l->acc_id }}</td>
                        <td>{{ ucwords($l->last_name) }}</td>
                        <td>{{ ucwords($l->first_name) }}</td>
                        <td>{{ ucwords($l->TypeOfLoan) }} Loan</td>
                        <td>{{ date('m-d-Y h:i:s a', strtotime($l->created_at)) }}</td>
                        <td>
                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
                        </td>
                    </tr>
                 @endforeach

                </tbody>
              </table>
          </div>
      </div>
  </div>
  </div>

@endsection
