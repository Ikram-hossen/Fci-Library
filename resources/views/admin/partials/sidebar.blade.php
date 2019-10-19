<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <h4 class="text-center text-light pb-3" style="border-bottom: 1px solid #fff;"><i class="fa fa-user-circle"></i> Profile</h4>
    <ul class="app-menu">
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Students</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.student.show' ? 'active' : '' }}" href="{{ route('admin.student.show')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Student List</span>
                    </a>
                </li>
                <li>
                <a class="app-menu__item {{ Route::currentRouteName() == 'admin.student.create' ? 'active' : '' }}" href="{{ route('admin.student.create')}}">
                        <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Add Student</span>
                    </a>
                </li>
            </ul>
         </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Book Setup</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.book.show' ? 'active' : '' }}" href="{{ route('admin.book.show')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Book List</span>
                    </a>
                </li>
                <li>
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.book.create' ? 'active' : '' }}" href="{{ route('admin.book.create')}}">
                        <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Add Book</span>
                    </a>
                </li>
            </ul>
         </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-wrench"></i><span class="app-menu__label">Year Setup</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.year.year-setup' ? 'active' : '' }}" href="{{route('admin.year.year-setup')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Year Setup</span>
                    </a>
                </li>
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.department.department-setup' ? 'active' : '' }}" href="{{route('admin.department.department-setup')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Department Setup</span>
                    </a>
                </li>
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.shift.shift-setup' ? 'active' : '' }}" href="{{route('admin.shift.shift-setup')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Shift Setup</span>
                    </a>
                </li>
                <li> 
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.language.language-setup' ? 'active' : '' }}" href="{{route('admin.language.language-setup')}}">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Language Setup</span>
                    </a>
                </li>
                <li> 
                    <a class="app-menu__item " href="#">
                            <i class="app-menu__icon fa fa-check"></i>
                        <span class="app-menu__label"> Category Setup</span>
                    </a>
                </li>
               
            </ul>
         </li>
    </ul>
</aside>