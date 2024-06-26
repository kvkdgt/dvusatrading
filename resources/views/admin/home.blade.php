@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin/dashboard.css'); }} ">
<div class="container">
    <div class="card card-up">
        <h2 class="label">Total Enquiries</h2>
        <div class="count">10</div>
    </div>

    <div class="card card-up">
        <h2 class="label">Pending Enquiries</h2>
        <div class="count">10</div>
    </div>
    <div class="card card-up">
        <h2 class="label">Seen Enquiries</h2>
        <div class="count">10</div>
    </div>
    <div class="card card-up">
        <h2 class="label">Today's Enquiries</h2>
        <div class="count">10</div>
    </div>

    <!-- Repeat similar HTML structure for more cards -->

</div>
<div class="dashboard-admin">
    <div class="welcome-logo">
      <img src="{{ URL::asset('assets/imgs/58-Teamwork.svg'); }}" alt="">  
    </div>
    <div class="welcome-text">
        <span>Welcome to DV USA Trading <span class="admin-panel"> Admin Panel</span></span>
    </div>
</div>




@endsection