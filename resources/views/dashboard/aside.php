    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/dashboards\images\user_logo.png" alt="User Image" width="50" height="50">
        <div>
          <p class="app-sidebar__user-name">Anas Obaid</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item <?php echo $_SERVER['QUERY_STRING'] == "dashboard/" ? "active" : ""   ?>" href="\dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <!-- categories list -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Categories</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php echo $_SERVER['QUERY_STRING'] == "dashboard/category" ? "active" : ""   ?>" href="\dashboard\category"><i class="icon fa fa-circle-o"></i> views</a></li>
            <li><a class="treeview-item <?php echo $_SERVER['QUERY_STRING'] == "dashboard/category/create" ? "active" : ""   ?>" href="\dashboard\category\create" rel="noopener"><i class="icon fa fa-circle-o"></i> create</a></li>
          </ul>
        </li>

        <!-- blogs list -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Blogs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php echo $_SERVER['QUERY_STRING'] == "dashboard/blog" ? "active" : ""   ?>" href="\dashboard\blog"><i class="icon fa fa-circle-o"></i> views</a></li>
            <li><a class="treeview-item <?php echo $_SERVER['QUERY_STRING'] == "dashboard/blog/create" ? "active" : ""   ?>" href="\dashboard\blog\create" rel="noopener"><i class="icon fa fa-circle-o"></i> create</a></li>
          </ul>
        </li>
        <!-- <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
      </ul>
    </aside>