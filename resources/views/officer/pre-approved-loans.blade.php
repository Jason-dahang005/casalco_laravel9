@extends('officer.index')
@section('title', 'Loan')
@section('officer_content')

<div class="col-md-12">
<div class="white_shd full margin_bottom_30">
    <div class="table_section padding_infor_info">
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped table-sm" id="example2">
                <thead>
                <tr>
                <th>Name</th>
                <th>Account Number</th>
                <th>Loan Catergry</th>
                <th>Loan Type</th>
                <th>Amount</th>
                <th>Date Applied</th>
                <th>Status</th>
                {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($loan as $l)
                @foreach ($l->express as $e)

                    <tr>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->acc_id }}</td>
                    <td>
                    @if ($e->loan_cat == 0)
                        <span class="badge badge-info">Express Loan</span>
                    @else
                        <span class="badge badge-info">Regular Loan</span>

                    @endif
                    </td>
                    <td>
                    @if ($e->loanApp_type == 0)
                        <span class="badge badge-info">Online</span>
                    @else
                        <span class="badge badge-info">Walk-in</span>
                    @endif
                    </td>
                    <td>{{ $e->amount }}</td>
                    <td>{{ $e->created_at }}</td>
                    <td>
                        @if($l->is_approved)
                        <span class="badge badge-info">Pre-approved</span>
                        @endif
                    </td>
                    {{-- <td>

                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>

                    </td> --}}
                    </tr>

                @endforeach
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection
