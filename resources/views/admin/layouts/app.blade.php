<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.header')
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                @include('includes.sidebar')
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('includes.footer')
    
</body>
</html>