@include('admin.layout.sidebar')

<!-- Konten Wrapper -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
<!-- End Konten -->

@include('admin.layout.top')

                <!-- Begin Page Content -->
                <div class="container-fluid">

@yield('content')

</div>
    </div>
        <!-- </div>
            </div> -->
@include('admin.layout.footer')
