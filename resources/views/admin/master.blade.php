<!DOCTYPE html>
<html>

<head>
  @include('admin.partial.head')
</head>

<body class="hold-transition skin-purple sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('admin.partial.header')

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    @include('admin.partial.aside')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Content @yield('title')
          {{-- <small>it all starts here</small> --}}
        </h1>
        {{-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Blank page</li>
        </ol> --}}
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        @yield('content')
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- @include('admin.partial.footer') --}}

    <!-- Control Sidebar -->
    {{-- @include('admin.partial.control') --}}
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  @include('admin.partial.foot')
</body>

</html>