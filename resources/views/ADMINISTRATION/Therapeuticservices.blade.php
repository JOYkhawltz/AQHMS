@extends('template.main')

@section('title', $title)

@section('content_title',"THERAPEUTIC SERVICES")
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
                    
                    
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>Registration no.</th>
                                    <th>MRN</th>
                                    <th>Patient Name</th>
                                    <th>Thrp. service Type</th>
                                    <th>Amount</th>
                                    <th>Balance Amt.</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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