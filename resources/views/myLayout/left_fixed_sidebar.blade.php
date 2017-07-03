
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ URL::to('/') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span>Looms</span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Manage Looms </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#">Add New</a></li>
                        <li><a href="#">Add Components</a></li>
                    </ul>
                </li>
                 <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Masters </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ URL::to('/branch') }}">Branch</a></li>
                        <li><a href="{{ URL::to('/tehsil') }}">Tehsil</a></li>
                        <li><a href="{{ URL::to('/village') }}">Village</a></li>
                        <li><a href="{{ URL::to('/component') }}">Component</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
