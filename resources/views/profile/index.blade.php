@extends('layouts.app')

 {{-- @section('content')

    <h1>My account</h1>
    <label>Name: </label>
    <label>{{ $user->name }}</label><br/>

    <img style="height: 100%; max-height:160px; width: 100%;  max-width:120px" src="{{$user->img_path}}"><br/>

    <label>Id: </label>
    <label>{{ $user->id }} </label><br/>

    <label>Is admin: </label>
    <label>{{ $user->is_admin }}</label><br/>

    <label>Phone: </label>
    <label>{{ $user->phone_number }} </label><br/>

    <label>Email: </label>
    <label>{{ $user->email }} </label><br/>

    <p>
        <a href="/profile/edit">Edit</a>
    </p>
@endsection  --}}


@section('styles')
  {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
  {{-- <link rel="stylesheet" href="css/profile.css"> --}}

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

{{-- @section('scripts')
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
@endsection --}}


{{-- @section('content')
        
    <div class="container">    
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">  
                    <h4>User Profile</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img alt="User Pic" src="{{$user->img_path}}" id="profile-image1" class="img-circle img-responsive"> 
                    </div>
                
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                        <div class="container" >
                            <h2>John Doe</h2>
                            <p>an   <b> Employee</b></p>
                        </div>
                        <hr>
                        <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>i.rudberg</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>
                        </ul>
                        <hr>
                        <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: 15 Jun 2016</div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>

@endsection --}}

@section('content')
{{-- <h3 class="headalign">User Profile Card with Right Photo</h3> --}}
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
     <div class="card card-inverse" style="background-color: #333; border-color: #333;">
            <div class="card-block">
			  <div class="row">
            				<div class="col-md-8 col-sm-8">
                    <h3 class="card-title">Welcome</h3>
                    <h2 class="card-title">{{ strtoupper($user->name) }}</h2>
                    <h3>{{ $user->coins }} Total Coins</h3>
					<p class="card-text"><strong>Profile: </strong> Web Developer </p>
					<p class="card-text"><strong>Skills: </strong> Theme, plugin and website development </p>
					<p><strong>Platform: </strong>
						<span class="badge bg-primary">WordPress</span> 
						<span class="badge bg-info">Weebly</span>
						<span class="badge bg-warning">Bootstrap</span>
						<span class="badge bg-success">Wix</span>
					</p>
				</div>
			  <div class="col-md-4 col-sm-4 text-center">
					<img class="btn-md" src="{{$user->img_path}}" alt="" style=" border-radius:50%; height: 100%; max-height:160px; width: 100%;  max-width:120px">
                    
                </div>         
				<div class="col-md-4 col-sm-4 text-center">
					<h2><strong> 5.2K </strong></h2>                    
					<p><small>Fans</small></p>
					<button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<h2><strong>1.4K</strong></h2>                    
					<p><small>Following</small></p>
					<button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<h2><strong>3.8K</strong></h2>                    
					<p><small>Followers</small></p>
					<button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>  
				</div>
			  </div>
              </div>
          </div>
  </div>
  </div> 
</div>
    
@endsection
