<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>
    <body>
        <form method="post">
            {{csrf_field()}}
            <input type="file" name="file" id="file"/>
            <button type="submit" id="upload">Upload</button>
        </form>
    </body>
</html>