<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="/staradmin/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('artikel', ['ere','ketika']) }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Artikel</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/category2') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          </li>
        </ul>
      </nav>