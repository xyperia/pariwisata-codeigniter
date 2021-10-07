<title> Admin &mdash; Toraja Land </title>
<div id="fh5co-header">
	<header id="fh5co-header-section">
		<div class="container">
			<div class="nav-header">
				<a href="#" onclick="IDClick(id);event.preventDefault();" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<h1 id="fh5co-logo"><a href=""> <font style="color: #962514;"> Toraja </font> <font style="color: #EEEEEE;"> Land </font> </a></h1>
				
				<nav id="fh5co-menu-wrap" role="navigation">
					<ul class="sf-menu" id="fh5co-primary-menu">
						<li>
							<a href="<?php echo site_url('/admin');?>">Beranda</a>
						</li>
						<li>
							<a href="<?php echo site_url('/admin/wisata');?>">Obyek Wisata</a>
						</li>
						<li>
							<a href="<?php echo site_url('/admin/berita');?>">Berita</a>
						</li>
						<li>
							<a href="<?php echo site_url('/admin/komentar');?>">Komentar</a>
						</li>
						<li>
							<a class="fh5co-sub-ddown">Akun</a>
							<ul class="fh5co-sub-menu">
								<li>
									<form id="akun" method="post" enctype="multipart/form-data" action="/admin/akun_detail">
	            					<input type="text" style="display: none;" name="validation" value="valid">
	            					<a onclick="document.getElementById('akun').submit(); return false;" style="border-radius: 20px;" role="button">
	            						Pengaturan
	            					</a>
	            				</form>
								</li>
								<li><a href="/login/logout">Keluar (Admin)</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>