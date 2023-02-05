@include('layouts.app')
@section('main')
<!-- BEGIN: Top Bar -->
<div class="top-bar">

    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">User List</li>
        </ol>
    </nav>
    
    
    
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="ADMIN" src="admin/dist/images/profile-5.jpg">
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
</div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">User <i class=" text-primary">{{ $user_id }}</i> Details</h2>
        <button class="btn btn-primary shadow-md mr-2"><a href="{{  route('admin.users') }}">Back to User List</a></button>
    </div>

 <!-- BEGIN: user Details -->
<div class="intro-y grid grid-cols-11 gap-5 mt-5">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
        <div class="box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">User Informations</div>
                
            </div>
            
            <div class="flex items-center">
                <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> ID: <a href="" class=" ml-1">{{ $user_id }}</a>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="user-check" class="w-4 h-4 text-slate-500 mr-2"></i>Name: 
                <p class=" ml-1">{{ $user->lastname }} </p>
                <p class=" ml-1">{{ $user->firstname }} </p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2"></i>Gender: 
                
                <span class="flex items-center justify-center whitespace-nowrap ml-1  ">
                    <i  class="w-4 h-4 "></i> {{ $user->gender ? 'Female' : 'Male' }}
                </span>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="mail" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Mail: <p class=" ml-1">{{ $user->email }}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="key" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Password: <p class=" ml-1">{{ $user->password }}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="phone" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Phone: <p class=" ml-1">{{ $user->phone }}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Address: <p class=" ml-1">{{ $user->address }}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Created Day: <p class=" ml-1">{{ $user->created_at}}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="dollar-sign" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Total Paying: <p class=" ml-1">${{ $sum}}</p>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="gift" class="w-4 h-4 text-slate-500 mr-2">
                    </i>Total Order: <p class=" ml-1">{{ $orders->count()}}</p>
            </div>
            
        </div>

        <div class="box p-5 rounded-md">
            
        </div>
        
        
        
    </div>
     <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
        <div class="box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Order List</div>
               
            </div>
            <div class="overflow-auto lg:overflow-visible -mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap !py-5">Order ID</th>
                            <th class="whitespace-nowrap text-center">Paying</th>
                            <th class="whitespace-nowrap text-center">Day</th>
                            <th class="whitespace-nowrap text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="!py-4">
                                    <div class="flex items-center">
                                        
                                        <a href="" class="font-medium whitespace-nowrap ml-4">{{ $order->id }}</a>
                                    </div>
                                </td>
                                <td class="text-center">${{ $order->total}}</td>
                                <td class="text-center">{{ $order->created_at }}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-primary whitespace-nowrap mr-5" href="{{ route('admin.ordersdetails',['order_id'=>$order->id])}}">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
        
    </div> 
</div>
@endsection    