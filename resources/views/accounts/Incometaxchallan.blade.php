@extends('template.main')

@section('title', $title)

@section('content_title',"INCOME TAX CHALLAN")
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
                <h3 class="box-title">{{__('INCOME TAX CHALLAN FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('IncometaxchallanView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="codechallan" class="col-sm-2 control-label">{{__('Code Challan')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="codechallan" placeholder="Enter challan code" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="challandate" class="col-sm-2 control-label">{{__('Challan Date')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="challandate" placeholder="select challan date">
                        </div>
                    </div>
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>clear</th>
                                    <th>Salary Month</th>
                                    <th>Emp. Code</th>
                                    <th>Emp. Name</th>
                                    <th>Designation</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>yes</td>
                                    <td>50000</td>
                                    <td>123</td>
                                    <td>robet</td>
                                    <td>manager</td>
                                    <td>4000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection