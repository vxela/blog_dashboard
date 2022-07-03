<!DOCTYPE html>
<html lang="en">
    
    @include('pages.layouts.head')
    
    <body>
        <!-- Navigation-->
        @include('pages.layouts.navigation')

        <!-- Page Header-->
        @include('pages.layouts.header')

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                @yield('content')
            </div>
        </div>
        <!-- Footer-->
        @include('pages.layouts.footer')

        <!-- Bootstrap core JS-->
        @include('pages.layouts.js')

    </body>
</html>
