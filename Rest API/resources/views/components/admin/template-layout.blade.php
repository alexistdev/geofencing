<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <x-admin.header-layout :title="$title" />
    </head>
    <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
            <x-admin.navbar-layout />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            <x-admin.sidebar-layout />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{$slot}}
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    </body>
    </html>
</div>
