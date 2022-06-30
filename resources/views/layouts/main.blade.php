<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
<body>
    <div id="app">

        @include('layouts.sidebar')

        <div id="main">

            @include('layouts.content_head')            

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>
   
    @include('layouts.js')

</body>

</html>
