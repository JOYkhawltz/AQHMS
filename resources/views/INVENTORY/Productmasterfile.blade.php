@extends('template.main')

@section('title', $title)

@section('content_title',"PORDUCT MASTER FILE")
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
                <h3 class="box-title">{{__('PORDUCT INVOICE Form')}}</h3>
            </div>
            <form method="post" action="{{ route('patient_register') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                  
                    <div class="form-row col-md-5">
                        <label for="productmasterID" class="col-sm-2 control-label">{{__('ID')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-5">
                            <input type="number" class="form-control" name="productmasterID" placeholder="Auto generate" disabled>
                        </div>
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="OLD code" class="col-sm-2 control-label">{{__('OLD CODE')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-6">
                            <input type="number" class="form-control" name="OLD code" placeholder="Auto generate" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productmasterNAME1" class="col-sm-2 control-label">{{__('NAME 1')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="productmasterNAME1" placeholder="Enter product master NAME 1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productmasterNAME2" class="col-sm-2 control-label">{{__('NAME 2')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="productmasterNAME2" placeholder="Enter product master NAME 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="openingrate" class="col-sm-2 control-label">{{__('Opening Rate')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="openingrate" placeholder="Enter opening rate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="control_details" class="col-sm-2 control-label">{{__('Control/Details')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="control_details" placeholder="Enter control details">
                        </div>
                    </div>
                    <div class="form-group form-row col-md-4">
                        <label for="purchase_rate" class="col-sm-2 col-md-6 control-label">{{__('Purchase Rate')}}</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="number" 
                                class="form-control" name="purchase_rate" placeholder="Enter Purchase Rate  ">
                        </div>
                    </div>
                    <div class="form-group form-row col-md-5">
                        <label for="paid_discount" class="col-sm-2 col-md-7 control-label">{{__('Paid Discount %')}}</label>
                        <div class="col-sm-10 col-md-5">
                            <input type="number" 
                                class="form-control" name="paid_discount" placeholder="Enter Paid Discount">
                        </div>
                    </div>
                    <div class="form-group form-row col-md-3">
                        <label for="U.O.M" class="col-sm-2 col-md-6 control-label">{{__('U.O.M')}}</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="number" 
                                class="form-control" name="U.O.M" placeholder="Enter U.O.M ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sales_rate" class="col-sm-2 control-label">{{__('Sales Rate')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="sales_rate" placeholder="Enter sales rate ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zaka_discount" class="col-sm-2 control-label">{{__('Zakat Discount %')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="zaka_discount" placeholder="Enter zaka discount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="packing" class="col-sm-2 control-label">{{__('Packing')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="packing" placeholder="Enter packing">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company" class="col-sm-2 control-label">{{__('Company')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="company" placeholder="Enter company name ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="salestax" class="col-sm-2 control-label">{{__('Sales Tax %')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                            class="form-control" name="salestax" placeholder="Enter sales tax">
                        </div>
                    </div>
                </div>
            </div>
      </div>
  </div>
</div>
@endsection