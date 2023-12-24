<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('category.index') }}" class="header-logo">
            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
            <h5 class="logo-title light-logo ml-3">{{ env('APP_NAME') }}
            </h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-4">
            <!-- <i class="wrapper-menu fas fa-bars"></i> -->
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                {{-- <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li> --}}
       
                <li class=" ">
                    {{-- <a href="#setup" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">Master</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a> --}}
                    <ul id="setup" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">


                        <li class="{{ Route::is('category.index') ? 'active' : '' }}">
                            <a href=" {{ route('category.index') }}">
                                <i class="las la-minus"></i><span>Category</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li
                    class="{{ Route::is('note.index') ? 'active' : '' }} {{ Route::is('note.create') ? 'active' : '' }} {{ Route::is('note.edit') ? 'active' : '' }}">
                    <a href="{{ route('note.index') }}" class="svg-icon">
                        <i class="fas fa-book"></i> <span class="ml-4">Note</span>

                    </a>
                </li>
               
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
