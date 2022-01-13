@extends('template.main')

@section('title', $title)

@section('content_title',"CASH BOOK")
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
                <h3 class="box-title">{{__('CASH BOOK FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('CashbookView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="Voucher" class="col-sm-2 control-label">{{__('Voucher')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="Voucher" placeholder="Enter Voucher number" >
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
                        <label for="cashamount" class="col-sm-2 control-label">{{__('Cash Amount')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="cashamount" placeholder="enter cash amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">{{__('type')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="type" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="comments" placeholder="Enter comments">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="document" class="col-sm-2 control-label">{{__('Document No')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="document" placeholder="Enter document no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="docdate" class="col-sm-2 control-label">{{__('Doc. Date')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="docdate" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="balance" class="col-sm-2 control-label">{{__('Balance')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="balance" placeholder="Enter  amount" >
                        </div>
                    </div>
                    
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>A/c ID</th>
                                    <th>A/c Name</th>
                                    <th>Comments</th>
                                    <th>Effect</th>
                                    <th>Amount</th>
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