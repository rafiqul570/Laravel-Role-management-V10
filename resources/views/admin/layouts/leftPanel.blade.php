 <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo pl-5"><span class="text-uppercase logged-name text-light mr-3"><img src="{{asset('frontend/img/logo2.png')}}" alt=""></span></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="#" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
         
         <?php
        $role = Auth::user()->role;
        if($role == 'admin'){
        ?>

         <a href="#" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Visite Site</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link">Add Category</a></li>
          <li class="nav-item"><a href="#" class="nav-link">All Category</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Posts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="#" class="nav-link">All Post</a></li>
        </ul>
    
      <?php } ?>

      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    