
<body>

  <!-- BEGIN: Header-->
  {{-- Include Navbar --}}
  @include('panels.navbar')

  {{-- Include Sidebar --}}
  {{-- @if((isset($configData['showMenu']) && $configData['showMenu'] === true)) --}}
  {{-- @include('panels.horizontalMenu') --}}
  {{-- @endif --}}

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-area-wrapper ">
      <div class="">
        <div class="sidebar">
          {{-- Include Sidebar Content --}}
          @yield('content-sidebar')
        </div>
      </div>
      <div class="">
        <div class="content-wrapper">
          <div class="content-body">
            {{-- Include Page Content --}}
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    {{-- @else
    <div class="content-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container p-0' : '' }}">
      @if($configData['pageHeader'] == true)
      @include('panels.breadcrumb')
      @endif

      <div class="content-body">

        @yield('content')

      </div>
    </div>
    @endif --}}

  </div>
  <!-- End: Content-->
{{--
  @if($configData['blankPage'] == false && isset($configData['blankPage']))
  @include('content/pages/customizer')

  @include('content/pages/buy-now')
  @endif --}}

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  {{-- include footer --}}
  @include('panels/footer')

  {{-- include default scripts --}}
  @include('panels/scripts')

  {{-- <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }
    })

  </script> --}}
</body>

</html>
