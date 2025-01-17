<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="{{route('dashboard')}}">GMTractors</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            {{-- <a href="#" class="profile-mini">
                <img src="{{ url('/assets/images/users/avatar.jpg')}}" alt="" />
            </a> --}}
            <div class="profile">
                {{-- <div class="profile-image">
                    <img src="{{ url('/assets/images/users/avatar.jpg')}}" alt="" />
                </div> --}}
                <div class="profile-data">
                    <div class="profile-data-name">{{ Auth::user()->name }}</div>
                    <div class="profile-data-title">{{ Auth::id() }}</div>
                </div>
                {{-- <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span
                            class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span
                            class="fa fa-envelope"></span></a>
                </div> --}}
            </div>
        </li>
        <li class="xn-title">Menu</li>
        {{-- <li class="active">
            <a href="#"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li> --}}
        <li class="xn-openable">
            <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Call Visit</span></a>
            <ul>
                <li><a href="{{route('cv_new')}}"><span class="fa fa-files-o"></span> Form</a></li>
                <li><a href="{{route('cv_list')}}"><span class="fa fa-files-o"></span> List</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-clock-o"></span> <span class="xn-text">Settings</span></a>
            <ul>
                <li><a href="#"><span class="fa fa-files-o"></span> Master Supplier</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Master Item</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Master Customer</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Master Company</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Master Employee</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> User Management</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Approval Management</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Who's Online</a></li>
                <li><a href="#"><span class="fa fa-files-o"></span> Log</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
