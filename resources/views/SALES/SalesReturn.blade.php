@extends('template.main')

@section('title', $title)

@section('content_title',"Sales Return")
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
                        <label for="sal./Return A/c" class="col-sm-2 control-label">{{__('sal./Return A/c')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="sal./Return_A/c" placeholder="Enter your sale/return account no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Account" class="col-sm-2 control-label">{{__('Account')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Account" placeholder="Enter your account no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inpatient zaka A/C" class="col-sm-2 control-label">{{__('Inpatient zaka A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Inpatient_zaka_A/C" placeholder="Enter inpatient zaka account no.  ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inp. charge Med" class="col-sm-2 control-label">{{__('Inp. charge Med')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Inp.charge_Med" placeholder="Enter inpatient charge medical ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Transaction Type" class="col-sm-2 control-label">{{__('Transaction Type')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Transaction_Type" placeholder="Enter transaction type ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Admin #" class="col-sm-2 control-label">{{__('Admin #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Admin" placeholder="Enter Admin no. type ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Date" class="col-sm-2 control-label">{{__('Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="date" placeholder="Enter date ">
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
                        <label for="Patient Name" class="col-sm-2 control-label">{{__('Patient Name')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="Patient_Name" placeholder="Enter Patient name ">
                        </div>
                    </div>
                </div>
@endsection