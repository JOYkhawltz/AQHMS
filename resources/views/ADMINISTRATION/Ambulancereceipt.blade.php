@extends('template.main')

@section('title', $title)

@section('content_title',"AMBULANCE RECEIPT")
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
                <h3 class="box-title">{{__('AMBULANCE RECEIPT FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('AmbulancereceiptView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                      <div class="form-group">
                        <label for="transactionno" class="col-sm-2 control-label">{{__('Transaction no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="transactionno" placeholder="Auto generated" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="transdate" class="col-sm-2 control-label">{{__('Transaction Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="transdate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mrnno" class="col-sm-2 control-label">{{__('MRN #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="mrnno" placeholder="Enter MRN no.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pname" class="col-sm-2 control-label">{{__('Patient Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="pname" placeholder="Enter patient name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="transactiontype" class="col-sm-2 control-label">{{__('Transaction Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="transactiontype" placeholder="select transaction type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="debitA/C" class="col-sm-2 control-label">{{__('Debit A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="debitA/C" placeholder="select debit A/C">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="credit A/C" class="col-sm-2 control-label">{{__('Credit A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="credit A/C" placeholder="select credit A/C">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="amount" class="col-sm-2 control-label">{{__('Amount')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="amount" placeholder="Enter amount">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}}</label>
                        <div class="col-sm-10">
                            <input type="comment" 
                                class="form-control" name="comments" placeholder="Enter comments">
                        </div>
                      </div>
                      
                      
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection