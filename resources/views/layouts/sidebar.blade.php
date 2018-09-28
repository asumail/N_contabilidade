<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{ Auth::user()->name }}<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="active"><a href="{{url('/admin')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li><a href="{{url('')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Perfil</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-sitemap"></span><p>Empresa</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/empresas/add')}}">Adicionar</a></li>
                    <li><a href="{{url('/empresas')}}">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-book"></span><p>Diarios</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/diarios/add')}}">Adicionar</a></li>
                    <li><a href="{{url('/diarios')}}">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-calendar"></span><p>Plano de Contas</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/planocontas/add')}}">Adicionar</a></li>
                    <li><a href="{{url('/planocontas')}}">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-file"></span><p>Docs. Pré-definidos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/docspredefinidos/add')}}">Adicionar</a></li>
                    <li><a href="{{url('/docspredefinidos')}}">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-dollar"></span><p>Lançamentos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('/lancamentos/add')}}">Adicionar</a></li>
                    <li><a href="{{url('/lancamentos')}}">Listar</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->