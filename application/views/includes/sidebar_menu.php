<!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?php echo site_url('admin_controller/display_dashboard') ; ?>">
            <i class="fa fa-home"></i> Dashboard</a>
          </li>
          <li><a><i class="fa fa-edit"></i> Users<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo site_url('admin_controller/create_user') ; ?>">Create User</a></li>
              <li><a href="<?php echo site_url('admin_controller/display_all_users') ; ?>">View Users</a></li>
            </ul>
          </li>

          <li class="">
            <a href="<?php echo site_url('admin_controller/install_asset') ?>">
              <i class="fa fa-desktop"></i>Install New Assets </a> 
              
          <li><a><i class="fa fa-bar-chart-o"></i> Assets Record<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo site_url('admin_controller/display_all_installed_assets') ?>">Installed</a></li>
                      <li><a href="#">Deployed</a></li>
                      <li><a href="#">Returned</a></li>
                      <li><a href="#">Decomissioned</a></li>
                    </ul>
                  </li>
       <li>
        <a href="<?php echo site_url('admin_controller/create_category') ; ?>">
        <i class="fa fa-sitemap"></i> Asset Categories</a> 
        </li> 
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
