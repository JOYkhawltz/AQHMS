@extends('template.main')

@section('title', $title)

@section('content_title',"General Ledger Reports")
@section('content_description',"")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('main_content')

<section class="content">

    <div class="row">

        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a data-toggle="pill" href="#ledger">LEDGER</a></li>
                    <li><a data-toggle="pill" href="#trial_balance">TRIAL BALANCE</a></li>
                    <li><a data-toggle="pill" href="#audit_trial">AUDIT TRIAL</a></li>
                    <li><a data-toggle="pill" href="#account_summary">A/C. SUMMARY</a></li>
                    <li><a data-toggle="pill" href="#account_activity">A/C. ACTIVITY </a></li>
                </ul>


                <div class="tab-content">
                    <div id="ledger" class="tab-pane fade in active">
                        <h2>LEDGER</h2>
                        <p>hi this ledger sheet </p>
                    </div>
                    <div id="trial_balance" class="tab-pane fade">
                    <h2>TRIAL BALANCE</h2>
                    <p>This is trial balance sheet</p>
                    </div>
                    <div id="audit_trial" class="tab-pane fade">
                    <h2>AUDIT TRIAL</h2>
                    <p>This is audit trial balance sheet</p>
                    </div>
                    <div id="account_summary" class="tab-pane fade">
                        <h2>ACCOUNT SUMMARY</h2>
                        <p>This is account summary</P>
                    </div>
                    <div id="account_activity" class="tab-pane fade">
                        <h2>ACCOUNT ACTIVITY</h2>
                        <p>This is account activity </P>
                    </div>
                </div>   
            </div> 
        </div>
    </div> 

</section>            
@endsection