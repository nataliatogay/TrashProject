@extends('layouts.app')


{{-- @section('styles')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection --}}

@section('content')






    <h1>My account</h1>
    <label>Name: </label>
    <label>{{ $user->name }}</label><br/>

    <img style="height: 100%; max-height:160px; width: 100%;  max-width:120px" id="preview_image" src="{{ asset($user->img_path) }}"/>
    <p>
        <a href="javascript:changeProfile()" style="text-decoration: none;">
            <i class="glyphicon glyphicon-edit"></i> Change
        </a>&nbsp;&nbsp;
    </p>
    <input type="file" id="file" style="display: none"/>
    <input type="hidden" id="file_name"/>
    <form method="POST" action="/profile" class="box" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="field">
            <div class="control">
                <input type="file" name="img_input" ><br/>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name" value="{{ $user->name }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="text" class="input" name="phone" placeholder="phone" value="{{ $user->phone_number }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="email" class="input" name="email" placeholder="email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Update profile</button>
            </div>
        </div>

        @include('errors')
    </form>

    <p>
        <a href="/profile/password/edit">Change password</a>
    </p>


@endsection






















    {{-- <img style="height: 100%; max-height:160px; width: 100%;  max-width:120px" src="{{ asset($user->img_path) }}"><br/> --}}






    {{-- <div  style="width:160;height: 160; border: 1px solid whitesmoke ;text-align: center;" id="image">


            <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div> --}}







{{-- <!DOCTYPE html>
<html>
<head>
    <title>Ajax Image Upload with Laravel</title>
</head>
<body style="background: lightgrey">
    <br/><br/>
    <div style="width:350px;height: 350px; border: 1px solid whitesmoke ;text-align: center;position: relative" id="image">
        <img width="100%" height="100%" id="preview_image" src="{{ asset($user->img_path) }}"/>
        <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div>
    <p>
        <a href="javascript:changeProfile()" style="text-decoration: none;">
            <i class="glyphicon glyphicon-edit"></i> Change
        </a>&nbsp;&nbsp;
        {{-- <a href="javascript:removeFile()" style="color: red;text-decoration: none;">
            <i class="glyphicon glyphicon-trash"></i>
            Remove
        </a>--}}


    </p>
    <input type="file" id="file" style="display: none"/>
    <input type="hidden" id="file_name"/>






@section('scripts')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/2c7a93b259.js"></script>

<script>
    function changeProfile() {
        $('#file').click();
    }
    $('#file').change(function () {
        if ($(this).val() != '') {
            upload(this);
        }
    });
    function upload(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('ajax-image-upload')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image').attr('src', '{{asset($user->img_path)}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name').val(data);

                    $('#preview_image').attr('src', '{{ asset('storage')}}/' + data);
                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', '{{asset($user->img_path)}}');
            }
        });
    }
</script>

@endsection

