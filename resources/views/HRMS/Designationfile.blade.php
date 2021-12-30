@extends('template.main')

@section('title', $title)

@section('content_title',"DESIGNATION FILE")
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
                <h3 class="box-title">{{__('DESIGNATION FILE Form')}}</h3>
            </div>
            <form method="post" action="{{ route('DesignationfileView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">{{__('Id')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="disabledInput" placeholder="Auto generate" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">{{__('Name')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter designation name">
                        </div>
                    </div>
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>ID</th>
                                    <th>DESCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>001</td>
                                    <td>MANAGER</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>IT OFFICER</td>
                                    
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>MEDICAL OFFICER</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
                    
@endsection