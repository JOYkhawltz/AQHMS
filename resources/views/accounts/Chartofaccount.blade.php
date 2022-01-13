@extends('template.main')

@section('title', $title)

@section('content_title',"CHART OF ACCOUNT")
@section('content_description',"")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('main_content')
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
                  
                    <div class="form-group">
                        <label for="productmasterID" class="col-sm-2 control-label">{{__('ID')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 ">
                            <input type="number" class="form-control" name="productmasterID" placeholder="Auto generate" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productmasterNAME1" class="col-sm-2 control-label">{{__('NAME 1')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="productmasterNAME1" placeholder="Enter product master NAME 1">
                        </div>
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="nature" class="col-sm-2 control-label">{{__('Nature')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" class="form-control" name="nature" placeholder="select nature">
                        </div>
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="OLD code" class="col-sm-2 control-label">{{__('A/c. Type')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" class="form-control" name="OLD code" placeholder="select account type">
                        </div>
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="control/detail" class="col-sm-2 control-label">{{__('Control/ Detail')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" class="form-control" name="control/detail" placeholder="select control">
                        </div>
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="party" class="col-sm-2 control-label">{{__('Party')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" class="form-control" name="party" placeholder="select party">
                        </div>
                    </div>
                    
                  </div>
            </div>
      </div>
  </div>
</div>
@endsection