@extends('template.main')

@section('title', $title)

@section('content_title',"HOLIDAY FILE")
@section('content_description',"")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('main_content')
<script src="/js/WebCam/webcam.js"></script>
<div class="container" style="padding-right:100px;">
  <h2>Filterable Table</h2> 
  <input class="p200 form-control " id="myInput" type="TEXT" placeholder="Search..">
  <br>
  <div class="table-responsive ">          
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr style="background-color: lightblue;">
        <th>HOLIDAY</th>
        <th>DATE</th>
        <th>DAY</th>
        <th>REMARKS/REASON</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>YES</td>
        <td>DEC 2021</td>
        <td>MONDAY</td>
        <td>ASDASD</td>
      </tr>
      <tr>
        <td>NO</td>
        <td>DEC 2022</td>
        <td>TUESDAY</td>
        <td>QWEQWE</td>
      </tr>
      <tr>
        <td>NO</td>
        <td>DEC 2023</td>
        <td>WEDNESDAY</td>
        <td>ZXCZXC</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>





<!-- <div class="row">
     right column 
    <div class="col-md-1"></div>
        <div class="col-md-10">
             Horizontal Form 
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('PURCHASE INVOICE Form')}}</h3>
                </div>     
            </div>
        </div>
</div> -->
@endsection