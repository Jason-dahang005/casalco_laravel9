@extends('officer.index')
@section('title', 'Products Loan Details')
@section('officer_content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <div class="mb-3">
                    <a class="btn cur-p btn-primary mb-2" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Go Back</a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="col-12"><strong>Loan Type:</strong></div>
                        <br>
                        <div class="col-12"><strong>Product Loan:</strong></div>
                        <br>
                        <div class="col-12"><strong>Description:</strong></div>
                    </div>
                    <div class="col-10">
                        <div class="col-12">
                            @if ($product->loan_type === 1)
                                Express Loan
                            @elseif ($product->loan_type === 2)
                                Regular Loan
                            @else
                                Special Loan
                            @endif
                        </div>
                        <br>
                        <div class="col-12">{{ $product->product_loan }}</div>
                        <br>
                        <div class="col-12">{{ $product->description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection