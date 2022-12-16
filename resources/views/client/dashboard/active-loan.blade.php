@extends('client.dashboard.index')
@section('title', 'My Active Loans')
@section('client_dashboard_content')

<div class="midde_cont">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-lg">
                        <table class="table table-bordered table-striped" id="loan_application">
                            <thead>
                                <tr>
                                    <th>Loan Type</th>
                                    <th>Date Applied</th>
                                    <th>Date Approved</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loan as $l)
                                        <tr>
                                            <td>{{ ucwords($l->TypeOfLoan) }} Loan</td>
                                            <td>{{ date('m-d-Y, h:s:i ', strtotime($l->created_at)) }}</td>
                                            <td>{{ date('m-d-Y, h:s:i ', strtotime($l->updated_at)) }}</td>
                                            <td>
                                                @if ($l->TypeOfLoan == 'express' || $l->TypeOfLoan == 'lad' )
                                                    <a href="{{ route('express_amort.show', $l->id) }}">
                                                        <button class="btn cur-p btn-success" data-toggle="tooltip" data-placement="bottom" title="View Active Loan Details"><i class="fa fa-eye"></i></button>
                                                    </a>
                                                @elseif ($l->TypeOfLoan == 'regular' || $l->TypeOfLoan == 'special' )
                                                    <a href="{{ route('regular_special_amort.show', $l->id) }}">
                                                        <button class="btn cur-p btn-success" data-toggle="tooltip" data-placement="bottom" title="View Active Loan Details"><i class="fa fa-eye"></i></button>
                                                    </a>
                                                @endif

                                                @if ($l->TypeOfLoan == 'express' || $l->TypeOfLoan == 'lad' )
                                                    <a href="{{ route('express_amort.show', $l->id) }}">
                                                        <button class="btn cur-p btn-primary" data-toggle="tooltip" data-placement="bottom" title="View Loan Amortization Schedule"><i class="fa fa-calendar"></i></button>
                                                    </a>
                                                @elseif ($l->TypeOfLoan == 'regular' || $l->TypeOfLoan == 'special' )
                                                    <a href="{{ route('regular_special_amort.show', $l->id) }}">
                                                        <button class="btn cur-p btn-primary" data-toggle="tooltip" data-placement="bottom" title="View Loan Amortization Schedule"><i class="fa fa-calendar"></i></button>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
