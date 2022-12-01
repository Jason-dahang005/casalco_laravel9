<div class="personal-info-text">
    <h3>Credit Assessment List</h3>
    </div>
    <div class="line"></div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Borrower Income</small>
        <input type="text" name="borrower_inc" class="form-control" placeholder="ENTER THE BORROWER INCOME">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Other Income</small>
        <input type="text" name=" other_inc" class="form-control" placeholder="ENTER OTHER INCOME">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Spouse Income</small>
        <input type="text" name="spouse_inc" class="form-control" placeholder="ENTER SPOUSE INCOME">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Types of Loan Applied</small>
        <select name="loan_type" id="" class="form-control">
            @if (Request::is('special-loan-application'))
                @include('client.loan_application.special-loan-products')
            @elseif (Request::is('regular-loan-application'))
                @include('client.loan_application.regular-loan-products')
            @endif
        </select>

    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Amount Applied</small>
        <input type="text" name="amount_applied" class="form-control" placeholder="ENTER AMOUNT APPLIED">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Term Applied</small>
        <input type="text" name="term_applied" class="form-control" placeholder="ENTER TERM APPLIED">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Mode of Payment</small>
        <input type="text" name="mode_payment" class="form-control" placeholder="ENTER MODE OF PAYMENT">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Co-maker History</small>
        <input type="text" name="co_history" class="form-control" placeholder="ENTER CO-MAKER HISTORY">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Name of Co-maker</small>
        <input type="text" name="co_name" class="form-control" placeholder="ENTER NAME OF CO-MAKER">
    </div>
</div>

{{-- FOR EXPENSES/MONTH --}}
<div class="col-lg-4">
    <div class="form-group">
        <small>Food & Subsistence</small>
        <input type="text" name="food" class="form-control" placeholder="ENTER AMOUNT FOR FOOD AND SUBSISTENCE">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Education Bill</small>
        <input type="text" name="" class="form-control" placeholder="ENTER AMOUNT FOR EDUCATION">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Electric Bill</small>
        <input type="text" name="electricity" class="form-control" placeholder="ENTER AMOUNT FOR ELECTRICITY">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Water Bill</small>
        <input type="text" name="water" class="form-control" placeholder="ENTER AMOUNT FOR WATER">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Transportation</small>
        <input type="text" name="transportation" class="form-control" placeholder="ENTER AMOUNT FOR TRANSPORTATION">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Allowances</small>
        <input type="text" name="allowance" class="form-control" placeholder="ENTER AMOUNT FOR ALLOWANCES">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Others</small>
        <input type="text" name="others" class="form-control" placeholder="ENTER AMOUNT FOR OTHERS">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Member Signature</small>
        <input type="file" src="" alt="" class="form-control">
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <small>Date Signed</small>
        <input type="date" name="date_signed" id="" class="form-control">
    </div>
</div>
