<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="#" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('admin/dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="menu ">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>
                    </li>
                  
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="menu__title"> My Shop <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin.categories') }}" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Categories </div>
                                </a>
                            </li>
                           
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Products <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{ route('admin.products') }}" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.product.add') }}" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Add New ProDuct</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Coupons
                                         <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{ route('admin.coupons') }}" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Coupon List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.coupon.add') }}" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Add New Coupon</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('admin.orders') }}" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Orders </div>
                                </a>
                            </li>

                        </ul>
                    </li>
              
                    
                    
    
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin.users') }}" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> User List </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.user.add') }}" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Add New User </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
            
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> Admin </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="side-menu ">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                            </div>
                        </a>
                    </li>
                  
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title">
                                My Shop
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin.categories') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Categories </div>
                                </a>
                            </li>
                           
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Products 
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{ route('admin.products') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.product.add') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Add New Prouct</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Coupons 
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{ route('admin.coupons') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Coupon List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.coupon.add') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Add New Coupon</div>
                                        </a>
                                    </li>
                                </ul>
                                <li>
                                    <a href="{{ route('admin.orders') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Orders </div>
                                    </a>
                                </li>
                            </li>
                        </ul>
                    </li>
                  
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title">
                                Users 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a> 
                                <ul class="">
                                    <li>
                                        <a href="{{ route('admin.users') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">User List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.user.add') }}" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Add New User</div>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    
                    
                    
                    
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <main class="main">
                    @yield('main')
                </main>
                <!-- BEGIN: Top Bar -->
                <!-- <div class="top-bar">
                   
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                
                 
                 
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="font-medium">Admin</div>
                                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Software Engineer</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                             
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> -->
                <!-- END: Top Bar -->
          
            </div>
            <!-- END: Content -->
        </div>
     
        
        <!-- BEGIN: JS Assets-->

        <script src="{{ asset('admin/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>