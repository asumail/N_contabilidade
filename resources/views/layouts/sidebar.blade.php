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
            <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Perfil</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-sitemap"></span><p>Empresa</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Adicionar</a></li>
                    <li><a href="inbox-alt.html">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-book"></span><p>Diarios</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Adicionar</a></li>
                    <li><a href="inbox-alt.html">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-calendar"></span><p>Plano de Contas</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Adicionar</a></li>
                    <li><a href="inbox-alt.html">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-file"></span><p>Docs. Pré-definidos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Adicionar</a></li>
                    <li><a href="inbox-alt.html">Listar</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-dollar"></span><p>Lançamentos</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Adicionar</a></li>
                    <li><a href="inbox-alt.html">Listar</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->