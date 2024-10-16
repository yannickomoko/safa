 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">
        
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                @php
                    $PermissionAdmin = App\Models\PermissionRole::getPermission('Administration système', Auth::user()->role_id);
                    $PermissionUser = App\Models\PermissionRole::getPermission('Utilisateurs', Auth::user()->role_id);
                    $PermissionAut = App\Models\PermissionRole::getPermission('Autorisations', Auth::user()->role_id);
                    $PermissionCars = App\Models\PermissionRole::getPermission('Cars', Auth::user()->role_id);
                    $PermissionGestO = App\Models\PermissionRole::getPermission('Marques', Auth::user()->role_id);  
                    $PermissionGesTyO = App\Models\PermissionRole::getPermission('Type cars', Auth::user()->role_id);     
                    $PermissionGestC = App\Models\PermissionRole::getPermission('Equipements', Auth::user()->role_id); 
                @endphp
                <li>
                    <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Tableau de bord</span>
                    </a>
                </li> 
                <li>
                    @if(!empty($PermissionAdmin)) 
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-key"></i>
                        <span key="t-ecommerce">Administration système</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if(!empty($PermissionUser))
                        <li>
                            <a href="{{ url('admin/users') }}">Utilisateurs</a>
                        </li>
                        @endif
                        @if(!empty($PermissionAut))
                        <li>
                            <a href="{{ url('admin/autorisations') }}">Autorisations</a>
                        </li>
                        @endif 
                    </ul>
                    @endif
                </li>
                <li>
                    @if (!empty($PermissionCars)) 
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-ecommerce">Cars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        @if(!empty($PermissionGestO))
                        <li>
                            <a href="#">Marques</a>
                        </li>
                        @endif
                        @if(!empty($PermissionGesTyO))
                        <li>
                            <a href="#">Type cars</a>
                        </li>
                        @endif
                        @if(!empty($PermissionGestC))
                        <li>
                            <a href="#">Equipements</a>
                        </li>
                        @endif 
                    </ul> 
                </li>
                @endif  
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End  -->         