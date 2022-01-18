@extends('template.main')

@section('title', $title)

@section('content_title',"LAB TEST")
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
                <h3 class="box-title">{{__('LAB TEST FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('LabtestView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="code" class="col-sm-2 control-label">{{__('Code')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="code" placeholder="Enter code no." >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="transdate" class="col-sm-2 control-label">{{__('Transaction Date')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="transdate" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="admno" class="col-sm-2 control-label">{{__('ADM no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="admno" placeholder="enter ADM number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mrnno" class="col-sm-2 control-label">{{__('MRN no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="mrnno" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patientname" class="col-sm-2 control-label">{{__('Patient Name')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="patientname" placeholder="select patient name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="referedby" class="col-sm-2 control-label">{{__('Refered By')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="referedby" placeholder="select refered name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Invoiceno" class="col-sm-2 control-label">{{__('Invoice no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="Invoiceno" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="accesscode" class="col-sm-2 control-label">{{__('Access Code')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="accesscode" placeholder="Enter  access code" >
                        </div>
                    </div>
                    
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>Lab Test</th>
                                    <th>chargeable</th>
                                    <th>amount</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button>Delete row </button> 
                </div>
                
        </div>
    </div>
</div>
@endsection