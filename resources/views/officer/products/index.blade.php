@extends('officer.index')
@section('title', 'Product Loans')
@section('officer_content')

<div class="col-md-12">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
    @endif
    <div class="white_shd full margin_bottom_30">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-lg">
                <a href="{{ route('products.create') }}" class="btn cur-p btn-info mb-3"><i class="fa fa-plus"></i> Add Product Loan</a>
                <table class="table table-bordered table-striped" id="product_table">
                    <thead>
                        <tr>
                            <th>Loan Type</th>
                            <th>Product Loan</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>
                                    @if ($d->loan_type === 1)
                                        Express Loan
                                    @elseif ($d->loan_type === 2)
                                        Regular Loan
                                    @else
                                        Special Loan
                                    @endif
                                </td>
                                <td>{{ $d->product_loan }}</td>
                                <td>{{ date('m-d-Y h:i:s a', strtotime($d->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('products.show',$d->id) }}" class="btn cur-p btn-success"><i class="fa fa-eye"></i> Details</a>
                                    <a href="{{ route('products.edit',$d->id) }}" class="btn cur-p btn-primary"><i class="fa fa-edit"></i> Update</a>
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
