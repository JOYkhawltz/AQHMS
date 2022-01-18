@extends('template.main')

@section('title', $title)

@section('content_title',"ADMISSION DETAILS")
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
                <h3 class="box-title">{{__('ADMISSION DETAILS FORM')}}</h3>
            </div>
            <form method="post" action="{{ route('AdmissiondetailsView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                      <div class="form-group">
                        <label for="Registrationno" class="col-sm-2 control-label">{{__('Admission no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="Registrationno" placeholder="Enter Registration number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="admdate" class="col-sm-2 control-label">{{__('Admission Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="admdate">
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
                        <label for="pname" class="col-sm-2 control-label">{{__('Patient Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="pname" placeholder="Enter patient name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Admissiontype" class="col-sm-2 control-label">{{__('Admission Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="Admissiontype" placeholder="select Admission type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="roomtype" class="col-sm-2 control-label">{{__('Room Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="roomtype" placeholder="select room type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="patienttype" class="col-sm-2 control-label">{{__('Patient Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="patienttype" placeholder="select patient type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bedno" class="col-sm-2 control-label">{{__('Bed #')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="bedno" placeholder="select bed">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="admitteddoctor" class="col-sm-2 control-label">{{__('Admitted Doctor')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="admitteddoctor" placeholder="select admitted doctor">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="approveddoctor" class="col-sm-2 control-label">{{__('Approved Doctor')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="approveddoctor" placeholder="select approved doctor">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="dischargeddate" class="col-sm-2 control-label">{{__('Discharged Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dischargeddate">
                        </div>
                      </div>
                      
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection