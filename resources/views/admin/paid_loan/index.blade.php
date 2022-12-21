@extends('admin.index')
@section('title', 'Settled Loans')
@section('admin_content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <table class="table table-bordered table-striped table-sm" id="settled_loan">
                    <thead>
                    <tr>
                      <th>Account No</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Date Applied</th>
                        <th>Date Settled</th>
                        <th>Status</th>
                    </tr>
                </thead>
                  <tbody>
                      @foreach ($loan as $l)
                        <tr>
                            <td>{{ $l->acc_id }}</td>
                            <td>{{$l->last_name}}</td>
                            <td>{{ $l->first_name }}</td>
                            <td>{{ date('m-d-Y h:i:s a', strtotime($l->DATE_APPLIED)) }}</td>
                            <td>{{ date('m-d-Y h:i:s a', strtotime($l->DATE_PRE_APPROVED)) }}</td>
                            <td>
                            {{-- <button type="button" class="btn cur-p btn-success" data-toggle="modal" data-target="#myModal{{ $l->LOAN_ID }}">View Details</button> --}}
                                <span class="badge badge-success">Settled</span>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection()
