@extends('template.main')

@section('title', $title)

@section('content_title',"THERAPY REGISTRATION")
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
                <h3 class="box-title">{{__('THERAPY REGISTRATION Form')}}</h3>
            </div>
            <form method="post" action="{{ route('TherapyregistrationView') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                      <div class="form-group">
                        <label for="Registration no" class="col-sm-2 control-label">{{__('Registration no #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="Registration no" placeholder="Enter Registration number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="regdate" class="col-sm-2 control-label">{{__('Reg Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="regdate">
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
                        <label for="therapytype" class="col-sm-2 control-label">{{__('Therapy Type')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="therapytype" placeholder="select theropy type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="referredby" class="col-sm-2 control-label">{{__('Referred by')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="referredby" placeholder="select referred type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="discount" class="col-sm-2 control-label">{{__('Discount')}}</label>
                        <div class="col-sm-10">
                            <input type="number" 
                                class="form-control" name="discount" placeholder="Enter discount">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">{{__('Comments')}}</label>
                        <div class="col-sm-10">
                            <input type="comment" 
                                class="form-control" name="comments" placeholder="Enter your comments">
                        </div>
                      </div>
                      
                      
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection