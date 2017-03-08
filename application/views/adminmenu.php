<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">RAK Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li  class="active">
            <a href="<?php echo base_url()?>Admin_Home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_Faq"><i class="fa fa-fw fa-bar-chart-o"></i> Faq</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_contact"><i class="fa fa-fw fa-table"></i> Contact</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_aboutus"><i class="fa fa-fw fa-edit"></i> About us</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_Restaurant"><i class="fa fa-fw fa-desktop"></i> Restaurant</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_menu"><i class="fa fa-fw fa-desktop"></i> Menu</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
        <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
        </li>
    </ul>
</div>