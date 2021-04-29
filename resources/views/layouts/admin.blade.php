<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
  <meta name="locale" content="{{ App::getLocale() }}"/>
  <title>Admin | Dashboard</title>

  <link rel="stylesheet" href="{{asset('admin/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/bootstrap-4.5.3-dist/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <aside class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{trans('tpl.name.website.admin')}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{trans('tpl.home.admin')}}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                {{trans('tpl.table.admin')}}
            </div>

            <!-- Nav Item - Pages Category Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category"
                    aria-expanded="true" aria-controls="category">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{trans('tpl.category')}}</span>
                </a>
                <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                        <a class="collapse-item" href="{{URL::to('category')}}">{{trans('tpl.list.category')}}</a>
                        <a class="collapse-item" href="{{URL::to('category/create')}}">{{trans('tpl.add.category')}}</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - news type Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#newstype"
                    aria-expanded="true" aria-controls="newstype">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{trans('tpl.newstype')}}</span>
                </a>
                <div id="newstype" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{URL::to('newstype')}}">{{trans('tpl.list.newstype')}}</a>
                        <a class="collapse-item" href="{{URL::to('newstype/create')}}">{{trans('tpl.add.newstype')}}</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - news Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#news"
                    aria-expanded="true" aria-controls="news">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{trans('tpl.news')}}</span>
                </a>
                <div id="news" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{URL::to('news')}}">{{trans('tpl.list.news')}}</a>
                        <a class="collapse-item" href="{{URL::to('news/create')}}">{{trans('tpl.add.news')}}</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - advertisement Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#advertisement"
                    aria-expanded="true" aria-controls="advertisement">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{trans('tpl.advertisement')}}</span>
                </a>
                <div id="advertisement" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{URL::to('advertisement')}}">{{trans('tpl.list.advertisement')}}</a>
                        <a class="collapse-item" href="{{URL::to('advertisement/create')}}">{{trans('tpl.add.advertisement')}}</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - users Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user"
                    aria-expanded="true" aria-controls="user">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>{{trans('tpl.users')}}</span>
                </a>
                <div id="user" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{URL::to('user')}}">{{trans('tpl.list.users')}}</a>
                        <a class="collapse-item" href="{{URL::to('user/create')}}">{{trans('tpl.add.users')}}</a>
                    </div>
                </div>
            </li>
        </aside>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        {{-- <li>
                            <a href="{!! route('change-language', ['en']) !!}">English</a>
                            <a href="{!! route('change-language', ['vi']) !!}">Vietnam</a>
                        </li> --}}
                        <li class="nav-item no-arrow">
                            <div class="btn-group">
                                <button type="button" class="btn select btn-info dropdown-toggle" style="margin-top: 5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{trans('tpl.header.lang')}}
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{!! route('change-language', ['en']) !!}"><img src="{{asset('upload/images//us.png')}}">{{trans('tpl.header.lang_en')}}</a>
                                    <a class="dropdown-item" href="{!! route('change-language', ['vi']) !!}"><img src="{{asset('upload/images//vi.png')}}">{{trans('tpl.header.lang_vi')}}</a>
                                </div>
                              </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{URL::to('upload/images/'.Auth::user()->url_images)}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{trans('tpl.header.auth.profile')}}
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{trans('tpl.header.auth.settings')}}
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ata-toggle="modal" data-target="#logoutModal">
                                        {{ __('tpl.header.auth.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{__('logout')}}
                                </a> --}}
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- <footer class="footer sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> --}}
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
<script src="{{asset('admin/jquery/jquery.min.js')}}"></script>
{{-- <script src="{{asset('admin/bootstrap-4.5.3-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bootstrap-4.5.3-dist/js/bootstrap.js')}}"></script> --}}
<script src="{{asset('admin/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
