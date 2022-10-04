@extends('officer.index')
@section('title', 'Loan')
@section('officer_content')

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Account Number</th>
            <th>Loan Category</th>
            <th>Loan type</th>
            <th>Date Pre-Approve</th>
            <th>Status</th>
            <!-- <th>Action</th> -->
            </tr>
    </thead>
        
            <tbody>
                <tr>
                    <td>Jason Dahang</td>
                    <td>2022-1234</td>
                    <td>Express Loan</td>
                    <td>Petty Cash</td>
                    <td>10/3/2022</td>
                    <td><span class="badge badge-primary">Pre-approved</span></td>
                    <!-- <td> <button class="btn btn-success" data-toggle="modal" data-target="#">Details</button></td> -->

                </tr>
                <tr>
                    <td>Jonas Balate</td>
                    <td>2022-4568</td>
                    <td>Regular Loan</td>
                    <td>Appliance Loan</td>
                    <td>10/10/2022</td>
                    <td><span class="badge badge-primary">Pre-approved</span></td>
                    <!-- <td> <button class="btn btn-success" data-toggle="modal" data-target="#">Details</button></td> -->

                </tr>
                <tr>
                    <td>Roger Ambos</td>
                    <td>2022-3214</td>
                    <td>Special Loan</td>
                    <td>Car Loan</td>
                    <td>10/10/2022</td>
                    <td><span class="badge badge-primary">Pre-approved</span></td>
                    <!-- <td> <button class="btn btn-success" data-toggle="modal" data-target="#">Details</button></td> -->

                </tr>
                <tr>
                    <td>Venivici Carna</td>
                    <td>2022-7894</td>
                    <td>Express Loan</td>
                    <td>Grocery Loan</td>
                    <td>10/20/2022</td>
                    <td><span class="badge badge-primary">Pre-approved</span></td>
                    <!-- <td> <button class="btn btn-success" data-toggle="modal" data-target="#">Details</button></td> -->

                </tr>
            </tbody>
      
</table>

@endsection