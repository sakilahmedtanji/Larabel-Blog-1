<!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Blog
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/admin/blog-list')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/blog/post')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add new</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin/edit-setting')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Setting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin/dashboard/contactmassage')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Cotact massage</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/logout')}}" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->