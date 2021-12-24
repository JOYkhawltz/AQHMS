@extends('template.main')

@section('title', $title)

@section('content_title',"Receipt and refund")
@section('content_description',"")
@section('breadcrumbs')
<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('main_content')
<script src="/js/WebCam/webcam.js"></script>


<div class="row">
    <!-- right column -->
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{__('Sales Return Form')}}</h3>
            </div>
            <form method="post" action="{{ route('patient_register') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="transaction" class="col-sm-2 control-label">{{__('Transaction #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="transaction" placeholder="Enter transaction number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ADM" class="col-sm-2 control-label">{{__('ADM #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="ADM" placeholder="Enter your ADM no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Patient Name" class="col-sm-2 control-label">{{__('Patient Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="Patient_Name" placeholder="Enter Patient name ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Transation type" class="col-sm-2 control-label">{{__('Tran Type')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Transation_type" placeholder="Enter your Transation type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Debit A/C" class="col-sm-2 control-label">{{__('Debit A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Debit_A/C" placeholder="Enter Debit account">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Credit A/C" class="col-sm-2 control-label">{{__('Credit A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Credit_A/C" placeholder="Enter Credit A/C">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="Comments" placeholder="Enter comment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Transaction date" class="col-sm-2 control-label">{{__('Transaction Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="Transaction_date" placeholder="Enter transaction date ">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="MRN #" class="col-sm-2 control-label">{{__('MRN #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="MRN" placeholder="Enter MRN no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">{{__('Amount')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="amount" placeholder="Enter Amount">
                        </div>
                    </div>
                    
                    
                </div>

@endsection