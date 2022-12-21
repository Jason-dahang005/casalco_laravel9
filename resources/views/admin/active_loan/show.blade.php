@extends('admin.index')
@section('title', 'Active Loan Details')
@section('admin_content')

<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column4 graph">
            <div class="col-md-12">
                <div class="white_shd full">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <a href="/active_loan"><i class="fa fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="full gallery_section_inner padding_infor_info">
                        <div class="row margin_bottom_30">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <strong>Member's Name</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ ucwords($loan->last_name) }}, {{ ucwords($loan->first_name) }} {{ ucwords($loan->middle_name) }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Account ID</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ $loan->acc_id }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Date Applied</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ date('M. d, Y h:i a', strtotime($loan->created_at)) }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Date Approved</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ date('M. d, Y h:i a', strtotime($loan->updated_at)) }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Contact No.</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ $loan->contact_number }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Contact No.</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ $loan->contact_number }}
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Loan Type</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        {{ ucwords($loan->TypeOfLoan) }} Loan
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Product Loan</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($loan->TypeOfLoan === 'express' || $loan->TypeOfLoan === 'lad')
                                            {{ ucwords($loan->express_loan) }}
                                        @elseif($loan->TypeOfLoan === 'regular' || $loan->TypeOfLoan === 'special')
                                            {{ ucwords($loan->prod_l) }}
                                        @endif
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Term Applied</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($loan->TypeOfLoan === 'express' || $loan->TypeOfLoan === 'lad')
                                            {{ $loan->exp_ta > 1 ? $loan->exp_ta . ' months' : $loan->exp_ta . ' month' }}
                                        @elseif($loan->TypeOfLoan === 'regular' || $loan->TypeOfLoan === 'special')
                                            {{ $loan->term_ap > 1 ? $loan->term_ap . ' months' : $loan->term_ap . ' month' }}
                                        @endif
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Amount Applied</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($loan->TypeOfLoan === 'express' || $loan->TypeOfLoan === 'lad')
                                            &#8369; {{ number_format(($loan->exp_aa / 100), 2, '.', ',') }}
                                        @elseif($loan->TypeOfLoan === 'regular' || $loan->TypeOfLoan === 'special')
                                            &#8369; {{ number_format(($loan->am_ap / 100), 2, '.', ',') }}
                                        @endif
                                    </div>
                                    {{-- ===================================================================== --}}
                                    <br>
                                    <br>
                                    <div class="col-lg-2">
                                        <strong>Payment Mode</strong>
                                    </div>
                                    <div class="col-lg-1">
                                        :
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($loan->TypeOfLoan === 'express' || $loan->TypeOfLoan === 'lad')
                                            {{ ucwords($loan->exp_mop) }}
                                        @elseif($loan->TypeOfLoan === 'regular' || $loan->TypeOfLoan === 'special')
                                            {{ ucwords($loan->mode_op) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
