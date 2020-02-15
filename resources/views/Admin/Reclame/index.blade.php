@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  @include('Admin/include/header-form')

  <div class="content">
@include('Admin.include.reclame-liste')

 <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
 
 
  </div>

</div>

@endsection