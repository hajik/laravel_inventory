<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.temp_admin.partials._head')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- //sidebar menu -->
        @include('layouts.temp_admin.partials._sidebar_menu')

        <!-- top navigation -->
        @include('layouts.temp_admin.partials._top_navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" id="app">
          @include('flash::message')
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.temp_admin.partials._footer')
        <!-- /footer content -->
        
      </div>
    </div>

    @include('layouts.temp_admin.partials._footer_script')
	
  </body>
</html>
