@extends('officer.index')
@section('title', 'Loan Application List')
@section('officer_content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <table class="table table-bordered table-striped table-sm" id="loan_application">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Account No</th>
                            <th>Loan Type</th>
                            <th>Date Applied</th>
                            <th>Status</th>
                            <th style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($loan as $l)
                            <tr>
                                <td>{{ ucwords($l->last_name) }}</td>
                                <td>{{ ucwords($l->first_name) }}</td>
                                <td>{{ $l->acc_id }}</td>
                                <td>{{ ucwords($l->TypeOfLoan) }}</td>
                                <td>{{ date('m-d-Y h:i:s a', strtotime($l->DATE_APPLIED)) }}</td>

                                <td>
                                    @if($l->LS == 0)
                                        <span class="badge badge-secondary">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('loan-applications.show',$l->LOAN_ID) }}" class="btn cur-p btn-success"data-toggle="tooltip" data-placement="bottom" title="View Details"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn cur-p btn-primary"data-toggle="tooltip" data-placement="bottom" title="Approve Application"><i class="fa fa-check-square"></i></a>
                                    <a href="" class="btn cur-p btn-danger"data-toggle="tooltip" data-placement="bottom" title="Decline Application"><i class="fa fa-ban"></i></a>
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
