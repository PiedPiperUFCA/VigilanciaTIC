<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-start">

       <h3 class="text-xl-left">@yield('title_page')</h3>

    </div>
    <div class="d-sm-flex align-items-center justify-content-start mb-4">

        <p>@yield('description_page')</p>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12">
            @yield('content')
        </div>

    </div>

</div>
<!-- /.container-fluid -->
