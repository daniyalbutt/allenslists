<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.8.1/css/perfect-scrollbar.css" integrity="sha512-8maxgSvVBZJRUZtR3u05O+MRRKdIkx8vUsj4eyO6GbzO75BQqN8ocGwKsMl1d+ueKheaRYU+qqfJAF8rR5pSgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
</head>
<body>
    <div class="br-logo"><a href=""><span>[</span>{{ config('app.name', 'Laravel') }}<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
         <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
         <div class="br-sideleft-menu">
            <a href="{{ route('home') }}" class="br-menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
               <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-home tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
               </div>
            </a>
            <a href="#" class="br-menu-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
               <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-list tx-22"></i>
                    <span class="menu-item-label">Categories</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
               </div>
            </a>
            <ul class="br-menu-sub nav flex-column" 
            style="{{ request()->routeIs('categories.*') ? 'display: block;' : '' }}"
            >
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}">All Categories</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.create') }}" class="nav-link {{ request()->routeIs('categories.create') ? 'active' : '' }}">Create Category</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
               <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-shopping-cart tx-22"></i>
                    <span class="menu-item-label">Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
               </div>
            </a>
            <ul class="br-menu-sub nav flex-column"
            style="{{ request()->routeIs('products.*') ? 'display: block;' : '' }}"
            >
               <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">All Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.create') }}" class="nav-link">Create Product</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="br-header">
         <div class="br-header-left">
            <div class="navicon-left hidden-md-down">
                <a id="btnLeftMenu" href="">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
         </div>
         <!-- br-header-left -->
         <div class="br-header-right">
            <nav class="nav">
               <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
                        <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
               </div>
            </nav>
        </div>
    </div>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" integrity="sha512-AFwxAkWdvxRd9qhYYp1qbeRZj6/iTNmJ2GFwcxsMOzwwTaRwz2a/2TX225Ebcj3whXte1WGQb38cXE5j7ZQw3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.8.1/js/perfect-scrollbar.min.js" integrity="sha512-vVzTPkDmFb+a2q4p7SWcenIDgdc/evbTCu47tu3fIwCzeCbsG0C0TUkKIa4q0Lb0OSAEvyfH8K+H9/hgc0R/+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.8.1/js/perfect-scrollbar.jquery.min.js" integrity="sha512-jFSfXp133/LWIx3/qzT+5z1pOij737HWwVd/yGVX0ZVTUFLy886mWPLDsGSiqorIbXJO3UgAeZxn4AytImx0lQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js" integrity="sha512-Dz4zO7p6MrF+VcOD6PUbA08hK1rv0hDv/wGuxSUjImaUYxRyK2gLC6eQWVqyDN9IM1X/kUA8zkykJS/gEVOd3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/bracket.js') }}"></script>
    <script>
        if($('#datatable1').length != 0){
            $('#datatable1').DataTable({
                responsive: true
            });
        }
    </script>
</body>
</html>
