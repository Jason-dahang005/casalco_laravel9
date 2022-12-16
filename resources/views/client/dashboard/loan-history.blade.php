@extends('client.dashboard.index')
@section('title', 'Loan History')
@section('client_dashboard_content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd margin_bottom_20">
                    <div class="table_section padding_infor_info">
                        <table class="table table-bordered table-striped" id="loan_application">
                            <thead>
                                <tr>
                                    <th>Loan Type</th>
                                    <th>Date Applied</th>
                                    <th>Date Settled</th>
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
                                              <button class="btn cur-p btn-success">Details</button>
                                            </a>
                                          @elseif ($l->TypeOfLoan == 'regular' || $l->TypeOfLoan == 'special' )
                                          <a href="{{ route('regular_special_amort.show', $l->id) }}">
                                              <button class="btn cur-p btn-success">Details</button>
                                            </a>
                                          @endif

                                          @if ($l->TypeOfLoan == 'express' || $l->TypeOfLoan == 'lad' )
                                          <a href="{{ route('express_amort.show', $l->id) }}">
                                              <button class="btn cur-p btn-primary">Details</button>
                                            </a>
                                          @elseif ($l->TypeOfLoan == 'regular' || $l->TypeOfLoan == 'special' )
                                          <a href="{{ route('regular_special_amort.show', $l->id) }}">
                                              <button class="btn cur-p btn-primary">Details</button>
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
