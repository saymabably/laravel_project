<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button">
                         <li>
                    <a href="{{ url('/product/add') }}"> Add Product </a>
                </li>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/user/add') }}"> Add User </a>
                </li>
                <li>
                    <a href="{{ url('/user/manage') }}"> Manage User </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/category/add') }}"> Add Category </a>
                </li>
                <li>
                    <a href="{{ url('/category/manage') }}"> Manage Category </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manufacturer Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/manufacturer/add') }}"> Add Manufacturer </a>
                </li>
                <li>
                    <a href="{{ url('/manufacturer/manage') }}"> Manage Manufacturer </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/product/add') }}"> Add Product </a>
                </li>
                <li>
                    <a href="{{ url('/product/manage') }}"> Manage Product </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
    </ul>
</div>