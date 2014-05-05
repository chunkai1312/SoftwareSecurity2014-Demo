<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">
                <!-- <i class="fa fa-play-circle"></i> 早回杏福 -->
                <img class="brand-img" src="assets/img/brand.png" / alt="早回杏福" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#intro"><i class="fa fa-coffee"></i> 杏福簡介</a>
                </li>
                <li class="page-scroll">
                    <a href="#menu"><i class="fa fa-cutlery"></i> 杏福餐點</a>
                </li>
                <li class="page-scroll">
                    <a href="#map"><i class="fa fa-map-marker"></i> 早回據點</a>
                </li>
            <?php if ($this->ion_auth->logged_in()): ?>       
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->ion_auth->user()->row()->username?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <?php if ($this->ion_auth->is_admin()): ?>
                        <li><a href="<?=site_url('auth')?>"><i class="fa fa-users"></i> 使用者資訊</a></li>
                    <?php endif; ?>                                 
                        <li class="divider"></li>                           
                        <li><a href="<?=site_url('auth/logout')?>"><i class="fa fa-sign-out"></i> 登出</a></li>  
                    </ul>
                </li>  
            <?php else: ?>                
                <li><a href="<?=site_url('auth')?>"><i class="fa fa-sign-in"></i> 登入杏福</a></li>  
            <?php endif; ?>               
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>