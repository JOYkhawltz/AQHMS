@extends('template.main')

@section('title', $title)

@section('content_title',"PRODUCT CATEGORY FILE")
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
                <h3 class="box-title">{{__('PRODUCT CATEGORY FILE')}}</h3>
            </div>
            <form method="post" action="{{ route('ProductcategoryfileView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="PCF_input" class="col-sm-2 control-label">{{__('CODE')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="PCF_input" placeholder="Auto generate" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">{{__('Name')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter pharmatec name">
                        </div>
                    </div>
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>CODE</th>
                                    <th>NAME</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>00001</td>
                                    <td>pharmatec pakistan Pvt. ltd</td>
                                </tr>
                                <tr>
                                    <td>00002</td>
                                    <td>barret hodgson</td>
                                    
                                </tr>
                                <tr>
                                    <td>00003</td>
                                    <td>abbott laboratories</td>
                                    
                                </tr>
                                <tr>
                                    <td>00004</td>
                                    <td>adamjee pharma services</td>
                                    
                                </tr>
                                <tr>
                                    <td>00005</td>
                                    <td>asian fiber</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection