@include('layouts.head')
<body class="compact-menu">
   <!-- START APP WRAPPER -->
    <div class="content-wrapper">

            @include('layouts.navbar')

            @include('layouts.hero')              

            @include('layouts.searchDomain')

            @include('layouts.feathureCard')
            

           <div class="content">
               <section class="page-content container-fluid">
                   @yield('content')
               </section>
           </div>

   </div>
@include('layouts.footer')
