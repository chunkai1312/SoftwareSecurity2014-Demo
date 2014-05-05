<div id="header" class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url()?>">
                <img src="<?=base_url()?>/assets/img/brand.png" / alt="早回杏福" />
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?=site_url('home').'#intro'?>"><i class="fa fa-coffee"></i> 杏福簡介</a></li>
                <li><a href="<?=site_url('home').'#menu'?>"><i class="fa fa-cutlery"></i> 杏福餐點</a></li>
                <li><a href="<?=site_url('home').'#map'?>"><i class="fa fa-map-marker"></i> 早回據點</a></li>
                
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
	</div>
</div>