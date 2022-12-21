@extends('admin.index')
@section('title', 'Active Loan List')
@section('admin_content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <table class="table table-bordered table-striped" id="active_loan">
                    <thead>
                    <tr>
                        <th>Account No.</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Product Loan</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($loan as $l)
                        <tr>
                            <td>{{ $l->acc_id }}</td>
                            <td>{{ ucwords($l->last_name) }}</td>
                            <td>{{ ucwords($l->first_name) }}</td>
                            <td>Instacash Loan</td>
                            <td>
                                <form action="{{ route('active_loan.update',$l->LOAN_ID) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('active_loan.show',$l->LOAN_ID) }}" class="btn cur-p btn-sm btn-success">Details</a>
                                    <button type="submit" class="btn cur-p btn-sm btn-info">Settled</button>
                                </form>
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
