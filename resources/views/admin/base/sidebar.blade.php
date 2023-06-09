<aside id="left-panel" class="left-panel">


    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">
                <h4>Kiblah Admin</h4>
            </a>
            <a class="navbar-brand hidden" href="./">
                <h4>Kiblah Admin</h4>
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('adminDashbord')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Users</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Suppliers</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="#">Add Suppliers</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('suppliersPage')}}">Manage Suppliers</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Customers</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('customersPage')}}">Manage Customers</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Products</h3><!-- /.menu-title -->
               
                <li><a href="widgets.html"> <i class="menu-icon ti-email"></i>Add Product </a></li>
                <li><a href="{{route('pendingProductsPage')}}"> <i class="menu-icon ti-email"></i>Pending Products </a></li>
                <li><a href="{{route('manageProductsPage')}}"> <i class="menu-icon ti-email"></i>Manage Products </a></li>
                <li><a href="widgets.html"> <i class="menu-icon ti-email"></i>Category Product </a></li>

                
                <h3 class="menu-title">Orders</h3><!-- /.menu-title -->
                <li><a href="{{route('ordersPage')}}"> <i class="menu-icon ti-email"></i>View All Orders </a></li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Report</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Monthly</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Suppliers</a></li>
                    </ul>
                </li>
            </ul>
        </div> 
    </nav>
</aside> 