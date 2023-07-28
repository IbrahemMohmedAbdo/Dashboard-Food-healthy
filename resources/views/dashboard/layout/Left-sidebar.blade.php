<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{asset('assets/images/users/5907.jpg')}}" title="Mat Helme" class="img-circle" style="width: 82px">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">Welcome {{Auth::guard('admin')->user()->name ?? ''}}</a> </h5>
            <ul class="list-inline p-t-10">


                <li>
                    <a href="#" class="text-custom">
                        <i class="zmdi zmdi-settings"></i>
                    </a>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="zmdi zmdi-power" style="color: red">logout</button>
                      </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-center font-18 menu-title">Modules</li>

                <li>
                    <a href="{{route('users.create')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Create New User </span> </a>
                </li>

                <li>
                    <a href="{{route('meals.index')}}" class="waves-effect"><i class="ti-menu"></i> <span> Show All Meals  </span> </a>
                </li>
                <li>
                    <a href="{{route('plans.index')}}" class="waves-effect"><i class="ti-menu"></i> <span> Show All Plans  </span> </a>
                </li>
                <li>
                    <a href="{{route('invoices.index')}}" class="waves-effect"><i class="ti-menu"></i> <span> Show All Invoices  </span> </a>
                </li>
















            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>


