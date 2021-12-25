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
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}

.button3:hover {
  background-color: red;
  color: white;
}

</style>


<h1>MORE ACCOUNT OPTIONS</h1>


<button class="button button1">General Account</button>
<button class="button button2">Staff Account</button>
<button class="button button3">Patient Account</button>
@endsection