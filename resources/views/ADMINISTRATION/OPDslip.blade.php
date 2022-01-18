@extends('template.main')

@section('title', $title)

@section('content_title',"OPD SLIP")
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
                <h3 class="box-title">{{__('OPD SLIP FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('OPDslipView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                      <div class="form-group">
                        <label for="slipno" class="col-sm-2 control-label">{{__('Slip #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="slipno" placeholder="Auto generated" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="slipdate" class="col-sm-2 control-label">{{__('Slip Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="slipdate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mrnno" class="col-sm-2 control-label">{{__('MRN no #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="mrnno" placeholder="Enter MRN no.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="admno" class="col-sm-2 control-label">{{__('Admission #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="admno" placeholder="Enter Admission no.">
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
                        <label for="oldmrn" class="col-sm-2 control-label">{{__('OLD MRN #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="oldmrn" placeholder="enter old MRN no.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="doctor" class="col-sm-2 control-label">{{__('Doctor')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="doctor" placeholder="select doctor">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="sliptyoe" class="col-sm-2 control-label">{{__('Slip Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="sliptyoe" placeholder="select slip type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="opdtype" class="col-sm-2 control-label">{{__('OPD Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="opdtyoe" placeholder="select OPD type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="amount" class="col-sm-2 control-label">{{__('Amount')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="amount" placeholder="enter amount">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="referedby" class="col-sm-2 control-label">{{__('Refered by')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="referedby" placeholder="select refered by">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}}</label>
                        <div class="col-sm-10">
                            <input type="comment" 
                                class="form-control" name="comments" placeholder="Enter comments">
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
                        <label for="drpayableA/C" class="col-sm-2 control-label">{{__('DR Payable A/C')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="drpayableA/C" placeholder="select Dr payable A/C">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tokenno" class="col-sm-2 control-label">{{__('Token #')}}</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tokenno" placeholder="auto generated" disabled>
                        </div>
                      </div>
                      
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection