<!DOCTYPE html>

<html lang="en">

    @include('backend.include.header')
   <!--begin::Body-->
   <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
      <!--begin::Main-->

      <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">

            @include('backend.include.sidebar')

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                @include('backend.include.bodyheader')

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                <!--begin::Subheader-->

                  <!--end::Subheader-->

                  <div class="flex-column-fluid">
                    <div class="w-full p-2">
                        @yield('content')

                    </div>
                  </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
         </div>
         <!--end::Page-->
      </div>
      <!--end::Main-->


      @include('backend.include.userpanel')

      @include('backend.include.footer')
      <!--end::Page Scripts-->
   </body>
   <!--end::Body-->
</html>
