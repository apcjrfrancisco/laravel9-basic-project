 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->


         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

<<<<<<< HEAD
                 <li>
                     <a href="{{ route('dashboard') }}" class="waves-effect">
                         <i class="ri-dashboard-line"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>Manage Supplier</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('supplier') }}">All Suppliers</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>Manage Customer</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('customer') }}">All Customers</a></li>
                     </ul>
                 </li>
=======
                           
                
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Home Slide Setup</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
              
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>About Page Setup</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.page') }}">About Page</a></li>
              <li><a href="{{ route('about.multi.image') }}">About Multi Image</a></li>
              <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
            </ul>
        </li>


 <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-mail-send-line"></i>
        <span>Portfolio Page Setup</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
      <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
       
    </ul>
</li>

                            
>>>>>>> 739dd764caff42d9051ad00340159d5f1e346efd

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-layout-3-line"></i>
                         <span>Layouts</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li>
                             <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                 <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                 <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                 <li><a href="layouts-preloader.html">Preloader</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                             </ul>
                         </li>

<<<<<<< HEAD
                         <li>
                             <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                 <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                 <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                 <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                 <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li class="menu-title">Pages</li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-account-circle-line"></i>
                         <span>Authentication</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="auth-login.html">Login</a></li>
                         <li><a href="auth-register.html">Register</a></li>
                         <li><a href="auth-recoverpw.html">Recover Password</a></li>
                         <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                     </ul>
                 </li>
=======
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-account-circle-line"></i>
            <span>Blog Category</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
            <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
        </ul>
    </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Blog Page</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                    <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                    
                </ul>
            </li>


<li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Footer Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                     
                    
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Contact Message </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('contact.message') }}">Contact Message</a></li>
                     
                    
                </ul>
            </li>
                           
>>>>>>> 739dd764caff42d9051ad00340159d5f1e346efd

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-profile-line"></i>
                         <span>Utility</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="pages-starter.html">Starter Page</a></li>
                         <li><a href="pages-timeline.html">Timeline</a></li>
                         <li><a href="pages-directory.html">Directory</a></li>
                         <li><a href="pages-invoice.html">Invoice</a></li>
                         <li><a href="pages-404.html">Error 404</a></li>
                         <li><a href="pages-500.html">Error 500</a></li>
                     </ul>
                 </li>






             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
