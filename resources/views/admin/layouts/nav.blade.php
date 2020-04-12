

<nav class="mt-2"><a href="#" class="nav-link ">
    </a><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"><li class="nav-item has-treeview menu-open"><a href="#" class="nav-link active ">
                <i class="nav-icon fas fa-tachometer-alt" style="float: right;margin-top: 3px;"></i>
                <p style=" float: right;">
                    اعدادات الموقع
                    <i class="right fas fa-angle-left pull-left " style="position: absolute;right: 13rem;top: .7rem;"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url("/adminpanel/sitsetting")}}" class="nav-link">
                        <i class="far fa-circle nav-icon" style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">
                            اعدادات رئيسيه                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon" style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">اعدادات اخري</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
{{-- users --}}
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active ">
                <i class="nav-icon fa fa-users" style="float: right;margin-top: 3px;"></i>
                <p style=" float: right;">
التحكم في الاعضاء
                    <i class="right fas fa-angle-left pull-left " style="position: absolute;right: 13rem;top: .7rem;"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/adminpanel/users/create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"  style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">                            اضافه عضو جديد
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/adminpanel/users')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"  style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">كل الاعضاء </p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>

{{-- العقارات  --}}
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active ">
                <i class="nav-icon fa fa-users" style="float: right;margin-top: 3px;"></i>
                <p style=" float: right;">
التحكم في العقارات
                    <i class="right fas fa-angle-left pull-left " style="position: absolute;right: 13rem;top: .7rem;"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/adminpanel/bu/create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"  style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">                            اضافه عقار جديد
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/adminpanel/bu')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"  style="float: right; margin-top: 4px;"></i>
                        <p style=" float: right;">كل العقارات </p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>

