@extends('officer.index')
@section('title', 'CASALCO Loan Application Details')
@section('officer_content')

<div class="col-md-12">
  <div class="mb-3">
    <a class="btn cur-p btn-primary mb-2" href="{{ url('loan-applications') }}"><i class="fa fa-arrow-left"></i> Go Back</a>
  </div>
  <div class="white_shd full margin_bottom_30">
    <div class="table_section padding_infor_info">
      <div class="table-responsive-lg">
        <form action="">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <small>Member's Name</small>
                <input type="text" class="form-control" value="{{ $loan->user->username }}">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
