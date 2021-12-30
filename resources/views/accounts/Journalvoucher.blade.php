@extends('template.main')

@section('title', $title)

@section('content_title',"JOURNAL VOUCHER")
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
                <h3 class="box-title">{{__('JOURNAL VOUCHER Form')}}</h3>
            </div>
                <form method="post" action="{{ route('JournalvoucherView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="voucher" class="col-sm-2 control-label">{{__('VOUCHER')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="voucher" placeholder="Auto generate" disabled>
                        </div>
                        <label for="vdate" class="col-sm-2 control-label">{{__('DATE')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="vdate"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="document" class="col-sm-2 control-label">{{__('document no.')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="document" placeholder="Enter document number">
                        </div>
                        <label for="ddate" class="col-sm-2 control-label">{{__('Document DATE')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="ddate"  >
                        </div>
                    </div>
                    <div class="table-responsive ">          
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr style="background-color: lightblue;">
                                    <th>A/C ID</th>
                                    <th>A/C Name</th>
                                    <th>Comments</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>1234</td>
                                    <td>MANAGER</td>
                                    <td>asdasd</td>
                                    <td>2000</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>4567</td>
                                    <td>doctor</td>
                                    <td>001</td>
                                    <td>3000</td>
                                    <td>6000</td>
                                    
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>PHARMACISTS</td>
                                    <td>001</td>
                                    <td>1000</td>
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