<?php require 'config.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>在线制作favicon图标</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="由刀客源码免费提供在线制作favicon图标" />
    <meta name="author" content="laodong.me" />
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>		
		<!-- Header -->
		<header id="fh5co-header" role="banner">			
			<!-- Logo -->
			<div id="fh5co-logo" class="text-center">
				<a href="https://ico.onf.cc/">
					<img src="images/logo.png" alt="在线ICO图标制作">
				</a>
			</div>
			<!-- Logo -->			
			<!-- Mobile Toggle Menu Button -->
			<a href="https://ico.onf.cc/" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			
			<!-- Main Nav -->
			<div id="fh5co-main-nav">
			<nav id="fh5co-nav" role="navigation">
				<ul>
					<li class="active"><a href="#">首页</a></li>
					
				</ul>
			</nav>
			</div>
			<!-- Main Nav -->
		</header>
		<!-- Header -->
		
		<!-- Main -->
		<main role="main">

				<!-- Slider -->
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-4 col-sm-8 col-sm-4">
						<p style="text-align:center;"><img src="images/ico.jpg" alt="favicon.ico" class="img-thumbnail"></p>
						<h1 class="fh5co-intro">在线ICO图标制作</h1><hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="form">

<form action="index.php?do=create"  enctype="multipart/form-data" method="post">
<p><strong>目标尺寸:</strong>
<select style="width: 200px;" name="image_dimensions" class="btn btn-info" type="button">
<option selected="selected" value="16" class="btn btn-default" type="button">16px &nbsp;x&nbsp; 16px</option>
<option value="32" class="btn btn-success" type="button">32px &nbsp;x&nbsp; 32px</option>
</select></p>
<p><strong>原始图片（不超过175kb）:</strong>
<input name="image" size="40" type="file" class="btn btn-info" width="200px;" /></p><hr>
<input style="font-weight: bold;" name="submit" type="submit" value="点击制作ICO" class="btn btn-danger"/>
</form>

<?php

if(isset($_GET['do'])){
	if($_GET['do'] == "create"){
		if(isset($_POST['submit'])){
			$generate_favicon = "<p>".generate_favicon()."</p>";			
              $generate_favicon .= '   
            <p><strong>完成!</strong></p>';
		} else {
			$generate_favicon = "";	
		}
	}
}

?>

            <p>
            <?=$generate_favicon;?>
            </p>
            
</div>
						</div>
					</div>
				</div>
<div class="fh5co-spacer fh5co-spacer-lg"></div>
				<!-- Slider -->
               <div class="container">
					<div class="row">
						<div class="fh5co-section-title text-center">
							<h2 class="fh5co-intro">Favicon/ICO图标使用</h2><hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						    <p>1、根据上面过程，选择目标尺寸，选择本地的jpg, jpeg, gif, png图标，制作</p>
							<p>2、将我们下载的.ICO图标保存为"favicon.ico"名称</p>
							<p>3、将.ico图标上传到我们网站根目录下</p>
							<p>4、在网站首页源代码<code>&lt;head&gt;....&lt;/head&gt;</code>之间加入"<code>&lt;link rel=&quot;shortcut icon&quot; href=&quot;    /favicon.ico&quot; /&gt;  </code>"</p>
							<hr>
<blockquote><p>示范例子：</p><p>&lt;head&gt;<br />
                        ...<br />
                        &lt;link rel=&quot;shortcut icon&quot; href=&quot;/favicon.ico&quot; /&gt;<br />
                        &lt;/head&gt;</p></blockquote>
						</div>
					</div>
				</div>
				<div class="fh5co-spacer fh5co-spacer-lg"></div>
				
				<!-- Features -->
				<div class="fh5co-features">
					<div class="container">
						<div class="fh5co-section-title text-center">
							<h2 class="fh5co-intro">Favicon/ICO图标介绍</h2><hr>
						</div>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
						<div class="row">

							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-command"></i>
								</span>
								<h3 class="fh5co-feature-title">有什么用</h3>
								<p>Favicon.ico图标在一定程度上可以体验网站的特诊，类似LOGO一样。</p>
							</div>
							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-eye2"></i>
								</span>
								<h3 class="fh5co-feature-title">简单制作</h3>
								<p>我们通过上面的步骤制作属于自己的.ico图标，加入到网站中。</p>
							</div>

							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-monitor"></i>
								</span>
								<h3 class="fh5co-feature-title">附加作用</h3>
								<p>增强用户体验的同时，在搜索结果或者搜索引擎也有一定的加分价值。</p>
							</div>

							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-cog2"></i>
								</span>
								<h3 class="fh5co-feature-title">大小要求</h3>
								<p>一般，我们制作32像素大小的.ico图标，上传已有的图标不要超过175px。</p>
							</div>

							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-paragraph"></i>
								</span>
								<h3 class="fh5co-feature-title">添加要求</h3>
								<p>我们需要将安装脚本添加到所有网站头部区域，需要全站显示。</p>
							</div>
							<div class="col-md-4 col-sm-6 fh5co-feature text-center">
								<span class="fh5co-feature-icon">
									<i class="icon-box2"></i>
								</span>
								<h3 class="fh5co-feature-title">图标后缀</h3>
								<p>个人建议上传素材最好是.png/.jpg，这样制作出来的.ico不失真。</p>
							</div>

						</div>
					</div>
				</div>
				<!-- Features -->				
				
		</main>
		<!-- Main -->
		
		<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<div class="row">
					<div class="col-md-6">
						<p class="fh5co-copyright">2021&copy;版权所有.<a href="#">在线ICO图标制作</a> </p>
					</div>
					
				</div>
			</div>
		</footer>
		<!-- Footer -->
		
		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>				
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
