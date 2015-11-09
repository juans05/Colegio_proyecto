@extends('dashboard')

@section('siderbar')

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="grids.html">Grid System</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="graphs.html">Graphs</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="inbox.html">Inbox</a>
                    </li>
                    <li>
                        <a href="compose.html">Compose email</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

@endsection
