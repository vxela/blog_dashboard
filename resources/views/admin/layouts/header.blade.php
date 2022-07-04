<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard {{config('app.name')}}
        @isset($title)
            | {{$title}}
        @endisset
    </title>
    
    <link rel="shortcut icon" href="{{ asset('vendors/mazer/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('vendors/mazer/assets/images/logo/favicon.png') }}" type="image/png">

    @include('admin.layouts.css')

</head>