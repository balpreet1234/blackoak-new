<!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{ asset('public/front_assets/img/logo.png') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">Blackoak Experience</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            
            <li>
              <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            
            <li class="menu-label">Pages</li>
            
            <li>
              <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bag-check"></i>
                </div>
                <div class="menu-title">Events</div>
              </a>
              <ul>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Products List</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Products Grid</a>
                </li>
                
              </ul>
            </li>
            
            <li>
              <a class="has-arrow" href="javascript:void(0);">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down"></i>
                </div>
                <div class="menu-title">Icons</div>
              </a>
              <ul>
                <li> <a href="icons-line-icons.html"><i class="bi bi-arrow-right-short"></i>Line Icons</a>
                </li>
                
              </ul>
            </li>

            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Logout</div>
              </a>
            </li>
            
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->