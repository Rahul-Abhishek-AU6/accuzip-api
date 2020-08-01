<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
      <img src="{{ url('/') }}/admin-assets/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rushprintnyc</span>
    </a>
    <div class="sidebar">    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/listing-user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.posts.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Post</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Product 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/product-listing') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.attribute.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attribute</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('admin.product-content.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> Product Content
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Product Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/category-listing') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ url('admin/add-category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.testimonial.index') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p> Testimonial </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.order.index') }}" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Orders                
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
              <p>
                Config 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.store-address.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Store Address</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/setting-listing') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setting</p>
                </a>
              </li>
              
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>