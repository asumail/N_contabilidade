@if(Auth::user()->authorizeRoles(['admin']))
<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="{{ URL::asset('assets/images/profile-menu-image.png')}}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{ Auth::user()->name }}<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div>
            <ul class="menu accordion-menu">
            <li  class="active"><a href="{{url('/admin')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li id="perfil2"><a href="{{url('/perfil')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Perfil</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-sitemap"></span><p>Empresa</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/superempresa/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/superempresa')}}">Listar</a></li>
                </ul>
            </li>
            
        </ul>   
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->

@else
<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="{{ URL::asset('assets/images/profile-menu-image.png')}}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{ Auth::user()->name }}<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div>
            <ul class="menu accordion-menu">
            <li class="active"><a href="{{url('/home')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li id="perfil1"><a href="{{url('/perfil')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Perfil</p></a></li>
            <li id="empresa" class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-sitemap"></span><p>Empresa</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/empresas/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/empresas')}}">Listar</a></li>
                </ul>
            </li>
            <li id="diarios" class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-book"></span><p>Diarios</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/diarios/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/diarios')}}">Listar</a></li>
                </ul>
            </li>
            <li id="planocontas" class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-calendar"></span><p>Plano de Contas</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/planocontas/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/planocontas')}}">Listar</a></li>
                </ul>
            </li>
            <li id="docspredefinidos" class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-file"></span><p>Docs. Pré-definidos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/docspredefinidos/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/docspredefinidos')}}">Listar</a></li>
                </ul>
            </li>
            <li id='lancamentos' class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-dollar"></span><p>Lançamentos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/lancamentos/create')}}">Adicionar</a></li>
                    <li><a href="{{url('/lancamentos')}}">Listar</a></li>
                </ul>
            </li>
        </ul>
       
        
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
@endif

