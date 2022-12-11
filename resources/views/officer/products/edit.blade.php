@extends('officer.index')
@section('title', 'Update Products Loan')
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
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Loan Type</label>
                                <select class="form-control" name="loan_type" id="">
                                    <option  value="{{ $product->loan_type }}">
                                        @if ($product->loan_type === 1)
                                            Express Loan
                                        @elseif ($product->loan_type === 2)
                                            Regular Loan
                                        @else
                                            Special Loan
                                        @endif
                                    </option>
                                    <option value="1">Express Loan</option>
                                    <option value="2">Regular Loan</option>
                                    <option value="3">Special Loan</option>
                                </select>
                                <small class="text-danger">@error('loan_type') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                                <label for="">Product Loan</label>
                                <input type="text" class="form-control" name="product_loan" placeholder="Enter Product Loan" value="{{ $product->product_loan }}">
                                <small class="text-danger">@error('product_loan') {{ $message }} @enderror</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description">{{ $product->description }}</textarea>
                        <small class="text-danger">@error('description') {{ $message }} @enderror</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn cur-p btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection