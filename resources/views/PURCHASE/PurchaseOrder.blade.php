@extends('template.main')

@section('title', $title)

@section('content_title',"PURCHASE ORDER")
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
                <h3 class="box-title">{{__('PURCHASE ORDER Form')}}</h3>
            </div>
            <form method="post" action="{{ route('patient_register') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="Purchase Order" class="col-sm-2 control-label">{{__('Purchase Order #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="purchase order" placeholder="Enter purchase order">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Party Account" class="col-sm-2 control-label">{{__('Party Account')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="party account" placeholder="Enter party account">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Order type" class="col-sm-2 control-label">{{__('Order Type')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="order type" placeholder="Enter order type">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="Date" class="col-sm-2 control-label">{{__('Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="date" placeholder="Enter date ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company" class="col-sm-2 control-label">{{__('Company')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="company" placeholder="Enter company">
                        </div>
                    </div>
                </div>
                

                    <!-- <form action="/action_page.php"> -->
  <!-- <label for="Transaction">Transaction #:</label>
  <input type="number" id="Transaction" name="Transaction"  ><br>
  <label for="Pur./Return A/c:">Pur./Return A/c:</label>
  <input type="number" id="Pur./Return A/c:" name="Pur./Return A/c:"><br>
  <label for="A/C payable">A/C payable:</label>
  <input type="number" id="A/C payable" name="A/C payable" ><br>
  <label for="Inpatient zaka A/C">Inpatient zaka A/C:</label>
  <input type="number" id="Inpatient zaka A/C" name="Inpatient zaka A/C" ><br>
  <label for="Inp. charge Med">Inp. charge Med:</label>
  <input type="number" id="Inp. charge Med" name="Inp. charge Med"><br>
  <label for="Transaction Type">Transaction Type:</label>
  <input type="number" id="Transaction Type" name="Transaction Type"><br>
  <label for="Date">Date:</label>
  <input type="Date" id="Date" name="Date" ><br>
  <label for="Comment">Comment:</label>
  <input type="Text" id="Comment" name="Comment"><br>
  <label for="Party Bill date">Party Bill date:</label>
  <input type="DATE" id="Party Bill date" name="Party Bill date" ><br>
  <input type="submit" value="Submit"> -->
<!-- </form>  -->
@endsection