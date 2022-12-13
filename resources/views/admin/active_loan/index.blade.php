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
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Account No.</th>
                        <th>Product Loan</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($loan as $l)
                        <tr>
                            <td>{{ $l->last_name }}</td>
                            <td>{{ $l->first_name }}</td>
                            <td>{{ $l->acc_id }}</td>
                            <td>Instacash Loan</td>
                            <td>
                                <a href="" class="btn cur-p btn-sm btn-success">Details</a>
                                <a href="" class="btn cur-p btn-sm btn-info">Update</a>
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
