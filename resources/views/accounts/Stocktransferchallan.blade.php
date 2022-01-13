@extends('template.main')

@section('title', $title)

@section('content_title',"STOCK TRANSFER CHALLAN")
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
                <h3 class="box-title">{{__('STOCK TRANSFER CHALLAN FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('StocktransferchallanView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="Transaction" class="col-sm-2 control-label">{{__('Transaction #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="Transaction" placeholder="Enter transaction number" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">{{__('Date')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" placeholder="Enter challan code" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formstore" class="col-sm-2 control-label">{{__('Form Store')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="formstore" placeholder="select store">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reference" class="col-sm-2 control-label">{{__('Reference No.')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="reference" placeholder="enter reference no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tostore" class="col-sm-2 control-label">{{__('To Store')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tostore" placeholder="select store">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="comments" placeholder="Enter comments">
                        </div>
                    </div>
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Quantity</th>
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
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection