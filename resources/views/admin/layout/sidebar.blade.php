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
                    $PermissionCars = App\Models\PermissionRole::getPermission('Gestion des cars', Auth::user()->role_id);
                    $PermissionGestO = App\Models\PermissionRole::getPermission('Marques', Auth::user()->role_id);  
                    $PermissionTypC = App\Models\PermissionRole::getPermission('Type de cars', Auth::user()->role_id);   
                    $PermissionGesTyO = App\Models\PermissionRole::getPermission('Cars', Auth::user()->role_id);     
                    $PermissionGestC = App\Models\PermissionRole::getPermission('Equipements', Auth::user()->role_id); 
                    $PermissionBP = App\Models\PermissionRole::getPermission('Bons plans', Auth::user()->role_id);  
                    $PermissionActu = App\Models\PermissionRole::getPermission('Actualités', Auth::user()->role_id);  
                    $PermissionCat = App\Models\PermissionRole::getPermission('Categories', Auth::user()->role_id);  
                    $PermissionPost = App\Models\PermissionRole::getPermission('Posts', Auth::user()->role_id);  
                    $PermissionCom = App\Models\PermissionRole::getPermission('Commentaires', Auth::user()->role_id);  
                    $PermissionTech = App\Models\PermissionRole::getPermission('Téléchargements', Auth::user()->role_id);   
                @endphp
                <li>
                    <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Tableau de bord</span>
                    </a>
                </li> 
                @if(!empty($PermissionAdmin)) 
                <li>
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
                </li>
                @endif
                @if (!empty($PermissionCars)) 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-car"></i>
                        <span key="t-ecommerce">Gestion des cars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        @if(!empty($PermissionGestO))
                        <li>
                            <a href="{{ url('admin/marques') }}">Marques</a>
                        </li>
                        @endif
                        @if(!empty($PermissionTypC))
                        <li>
                            <a href="{{ url('admin/typecars') }}">Type de cars</a>
                        </li>
                        @endif
                        @if(!empty($PermissionGesTyO))
                        <li>
                            <a href="{{ url('admin/cars') }}">Cars</a>
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
                @if (!empty($PermissionBP)) 
                <li>
                    <a href="{{ url('admin/bonplans') }}" class="has-arrow waves-effect">
                        <i class="bx bx-archive"></i>
                        <span key="t-ecommerce">Bons plans</span>
                    </a> 
                </li>
                @endif 
                @if (!empty($PermissionActu))
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-ecommerce">Actualités</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        @if(!empty($PermissionCat))
                        <li>
                            <a href="{{ url('admin/categories') }}">Categories</a>
                        </li>
                        @endif
                        @if(!empty($PermissionPost))
                        <li>
                            <a href="{{ url('admin/posts') }}">Posts</a>
                        </li>
                        @endif
                        @if(!empty($PermissionCom))
                        <li>
                            <a href="#">Commentaires</a>
                        </li>
                        @endif 
                    </ul> 
                </li>
                @endif
                @if (!empty($PermissionTech)) 
                <li>
                    <a href="{{ url('admin/download') }}" class="has-arrow waves-effect">
                        <i class="bx bx-download"></i>
                        <span key="t-ecommerce">Téléchargements </span>
                    </a> 
                </li>  
                @endif           
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End  -->         