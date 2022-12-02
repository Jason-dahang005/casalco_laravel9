@extends('client.dashboard.index')
@section('title', 'Loan Application')
@section('client_dashboard_content')


<div class="card">
    <div class="card-body">
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <table class="table" id="loan_application">
                            <thead>
                                <tr>
                                    <th>Loan Type</th>
                                    <th>Date Applied</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loan as $l)
                                    <tr>
                                        <td>{{ ucwords($l->loan_type) }}</td>
                                        <td>{{ date('m-d-Y, h:s:i ', strtotime($l->created_at)) }}</td>
                                        <td>
                                            <span class="badge badge-secondary">Pending</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm bg-success">View Details</button>
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
