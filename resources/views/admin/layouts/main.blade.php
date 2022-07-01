<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.header')
<body>
    <div id="app">

        @include('admin.layouts.sidebar')

        <div id="main">

            @include('admin.layouts.content_head')            

            @yield('content')

            @include('admin.layouts.footer')
        </div>
    </div>
   
    @include('admin.layouts.js')

</body>

</html>
