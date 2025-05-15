        @include('layout.style')

        {{-- Navbarr --}}
        <div class="flex flex-1">
        @include('layout.navbar');
        </div>

        {{-- SideBar --}}
        <div class="flex flex-1">
        @include('layout.sidebar');
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
            


        </div>



        
        
        























