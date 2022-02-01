<aside class="main-sidebar" style="">
    <!-- Brand Logo -->
    <a href="{{ url('/main-dashboard')}}" class="brand-link" style=" padding-top: 1.4rem !important; padding-bottom: 1.25rem !important; background-color:#1f3c6b !important;">
        <span><center><img src="{{URL::to('frontend/assets/img/logo/jonaLogo.png')}}" width="100%" height="33px" alt="Logo"
           class="imgWrapper"></center>
        </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="background-color:#1f3c6b !important; ">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <br><br>
        <li class="nav-header btn btn-primary btn-header"><a href="{{ url('/main-dashboard')}}">Dashboard</a></li><br>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link nav-link2">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Content Management
              <i class="fa fa-angle-double-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="ml-3 nav-item">
              <a href="#" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Home Page</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ url('/admin-why-mueke')}}" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Why Mueke</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ url('/admin-who-is-mueke')}}" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Who is Mueke</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ url('/admin-downloads')}}" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Downloads</p>
              </a>
            </li>
          </ul>
        </li>
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link nav-link2">
            <i class="nav-icon fas fa-camera"></i>
            <p>
              Media Data
              <i class="right fa fa-angle-double-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="ml-3 nav-item">
              <a href="{{ url('/admin-news') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>News</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ url('/admin-events')}}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Events</p>
              </a>
            </li>

           <li class="ml-3 nav-item">
              <a href="{{ url('/admin-press-statement')}}" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Press Statement</p>
              </a>
          </li>
          <li class="ml-3 nav-item">
            <a href="#" class="nav-link nav-link2">
               <i class="fas fa-angle-right"></i>
              <p>My Bio</p>
            </a>
        </li>
           <li class="ml-3 nav-item">
              <a href="{{ url('/video-setting')}}" class="nav-link nav-link2">
                 <i class="fas fa-angle-right"></i>
                <p>Videos</p>
              </a>
          </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link nav-link2">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home Page
              <i class="right fa fa-angle-double-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="ml-3 nav-item">
              <a href="{{ route('admin.gallery') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Gallery</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('story') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Jona Story</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('admin-our-agenda-settings') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Agenda</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link nav-link2">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              General Settings
              <i class="right fa fa-angle-double-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="ml-3 nav-item">
              <a href="{{ route('donate') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Donation</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('volunteer') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Volunteer</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('volunteerCategory') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Volunteer Category</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('engage') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Shout Out</p>
              </a>
            </li>
            <li class="ml-3 nav-item">
              <a href="{{ route('subscribe') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Subscribers</p>
              </a>
            </li>
             <li class="ml-3 nav-item">
              <a href="{{ route('regions') }}" class="nav-link nav-link2">
                <i class="fas fa-angle-right"></i>
                <p>Regions</p>
              </a>
            </li>
          </ul>
        </li>
        @can('isAdmin', User::class)
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link nav-link2">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Communication
                <i class="fa fa-angle-double-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="ml-3 nav-item">
                <a href="#" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Emails</p>
                </a>
              </li>
              <li class="ml-3 nav-item">
                <a href="#" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>SMS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link nav-link2">
              <i class="nav-icon fas fa-trash"></i>
              <p>
                View Trash
                <i class="fa fa-angle-double-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="ml-3 nav-item">
                <a href="{{ url('/account-setting') }}" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Donation</p>
                </a>
              </li>
              <li class="ml-3 nav-item">
                <a href="#" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Volunteer</p>
                </a>
              </li>
              <li class="ml-3 nav-item">
                <a href="#" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Shoutout</p>
                </a>
              </li>
              <li class="ml-3 nav-item">
                <a href="{{ route('trashedSubscribers') }}" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Subscribers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link nav-link2">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Account Settings
                <i class="fa fa-angle-double-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="ml-3 nav-item">
                <a href="{{ url('/account-setting') }}" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="ml-3 nav-item">
                <a href="#" class="nav-link nav-link2">
                  <i class="fas fa-angle-right"></i>
                  <p>Roles & Permissions</p>
                </a>
              </li>
            </ul>
          </li>
        @endcan
        </ul>
      </nav>
    </div>
</aside>
