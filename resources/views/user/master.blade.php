@include('user.layouts.components.stylelinks')

     <!-- PRE LOADER -->
     @include('user.layouts.components.preloader')

     <!-- HEADER -->
     @include('user.layouts.components.top')

     <!-- navigation -->
     @include('user.layouts.components.navigation')

     <!-- banner -->
     @include('user.layouts.components.banner')

     <!-- WELCOME -->
     @include('user.layouts.components.welcome')

     <!-- TEAM -->
     @include('user.layouts.components.team')

     <!--latest NEWS -->
     @include('user.layouts.components.latestnews')

     <!-- MAKE AN APPOINTMENT -->
     {{-- @include('user.layouts.components.appointment') --}}
     <livewire:appointment>
     <!-- FOOTER -->
     @include('user.layouts.components.footer')
    
     <!-- SCRIPTS -->
     @include('user.layouts.components.script')