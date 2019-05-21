<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">

    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>

    <img id="output" width="200" src="{{ asset($user->img_path) }}"/>
    {{-- <img id="output" width="200" /> --}}

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>


</body>
</html>







