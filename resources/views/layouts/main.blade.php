
<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

@include('layouts.navbar')

  <!-- ======= Sidebar ======= -->
  @include('layouts.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              @yield('content')
            </div>
          </div>
        </div>
      </div>
  </main>

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
<!-- End Footer -->

{{-- Script --}}
@include('layouts.script')
{{-- End of Script --}}
</body>

</html>