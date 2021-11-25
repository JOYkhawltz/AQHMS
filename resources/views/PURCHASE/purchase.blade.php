@extends('template.main')

@section('title', $title)

@section('content_title',"PURCHASE")
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
                <h3 class="box-title">{{__('PURCHASE RETURN Form')}}</h3>
            </div>
            <form method="post" action="{{ route('patient_register') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="transaction" class="col-sm-2 control-label">{{__('Transaction #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="transaction" placeholder="Enter transaction number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Pur./Return A/c" class="col-sm-2 control-label">{{__('Pur./Return A/c')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Pur./Return A/c" placeholder="Enter your purchase/return account no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="A/C payable" class="col-sm-2 control-label">{{__('A/C payable')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="A/C payable" placeholder="Enter your payable account no.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inpatient zaka A/C" class="col-sm-2 control-label">{{__('Inpatient zaka A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Inpatient zaka A/C" placeholder="Enter inpatient zaka account no.  ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inp. charge Med" class="col-sm-2 control-label">{{__('Inp. charge Med')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Inp. charge Med" placeholder="Enter inpatient charge medical ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Transaction Type" class="col-sm-2 control-label">{{__('Transaction Type')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="Transaction Type" placeholder="Enter transaction type ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Date" class="col-sm-2 control-label">{{__('Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="" placeholder="Enter date ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-sm-2 control-label">{{__('Comment')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="Comment" placeholder="Enter comment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Party Bill date" class="col-sm-2 control-label">{{__('Party Bill date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" 
                                class="form-control" name="Party Bill date" placeholder="Enter party bill date ">
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