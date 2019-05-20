@extends('layouts.app')


@section('styles')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection






@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-inverse" style="background-color: #333; border-color: #333; opacity: 0.5">
                <div class="card-block">
			        <div class="row">
            			<div class="col-md-8 col-sm-8">
                            <h3 class="card-text">Welcome</h3>
                            <h2 class="card-title">{{ strtoupper($user->name) }}</h2>
                            <h3>{{ $user->coins }} Total Coins</h3>
                            <p>
                                <a href="/profile/edit">Edit profile</a>
                            </p>
				        </div>
			            <div class="col-md-4 col-sm-4 text-center">
					        <img class="btn-md" src="{{ $user->img_path }}" alt="" style=" border-radius:50%; height: 100%; max-height:160px; width: 100%;  max-width:120px">
                         </div>
			        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
