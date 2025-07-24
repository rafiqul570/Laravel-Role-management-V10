@include('admin.layouts.header')
@include('admin.layouts.leftPanel')
@include('admin.layouts.headPanel')
@include('admin.layouts.header')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb mt-5">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>
  <div class="sl-pagebody">
    <div class="sl-page-title">
      

      @yield('content')
    

    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@include('admin.layouts.footer')