@extends('template.main')

@section('title', $title)

@section('content_title',"DAY CLOSING")
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
                        <label for="closeno" class="col-sm-2 control-label">{{__('Close #')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="closeno" placeholder="Auto generate" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">{{__('Date')}}</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="closeuser" class="col-sm-2 control-label">{{__('Close User')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="closeuser" placeholder="Select close user">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="closeby" class="col-sm-2 control-label">{{__('Close by')}}</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                class="form-control" name="closeby" placeholder="Enter close by">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="closedatetime" class="col-sm-2 control-label">{{__('Close Date Time')}}</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" name="closedatetime">
                        </div>
                      </div>
                      
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection