@extends('officer.index')
@section('title', 'Add Products Loan')
@section('officer_content')

<div class="col-md-12">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
    @endif
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <div class="mb-3">
                    <a class="btn cur-p btn-primary mb-2" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Go Back</a>
                </div>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Loan Type</label>
                                <select class="form-control" name="loan_type" id="">
                                    <option selected disabled>Select Loan Type</option>
                                    <option value="1">Express</option>
                                    <option value="2">Regular</option>
                                    <option value="3">Special</option>
                                </select>
                                <small class="text-danger">@error('loan_type') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                                <label for="">Product Loan</label>
                                <input type="text" class="form-control" name="product_loan" placeholder="Enter Product Loan">
                                <small class="text-danger">@error('product_loan') {{ $message }} @enderror</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Enter Description"></textarea>
                        <small class="text-danger">@error('description') {{ $message }} @enderror</small>
                    </div>

                    <dib class="form-group">
                        <div class="form row">
                            <div class="col">
                                <label for="">Maximum Loanable Amount</label>
                                <input type="text" name="max_loan_amount" class="form-control" placeholder="Enter Maximum Loanable Amount">
                            </div>

                            <div class="col">
                                <label for="">Maximum Loanable Amount</label>
                                <input type="text" name="min_loan_amount" class="form-control" placeholder="Enter Minimum Loanable Amount">
                            </div>
                        </div>
                    </dib>

                    <div class="form-group">
                        <button type="submit" class="btn cur-p btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection