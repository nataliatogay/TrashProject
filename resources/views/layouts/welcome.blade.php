<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title', 'TrashProject')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
		<link rel="stylesheet" href="{{asset('css/admin.css')}}">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style_demo.css')}}">
	</head>

	<body>


        <div class="wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="images/registration-form-4.png" alt="">
                </div>

                @yield('content')

			</div>
		</div>

        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')
		{{-- <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script> --}}
	</body>
</html>
