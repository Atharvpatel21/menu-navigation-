<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package menu_transit
 */

get_header();
?>
 <!-- <body class="blog logged-in admin-bar custom-background hfeed no-sidebar customize-support">
	<script>
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

				request = true;
	
			b[c] = b[c].replace( rcs, ' ' );
			// The customizer requires postMessage and CORS (if the site is cross domain).
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq">
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu"><li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost:10095/wp-admin/about.php"><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu"><li id="wp-admin-bar-about"><a class="ab-item" href="http://localhost:10095/wp-admin/about.php">About WordPress</a></li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu"><li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a></li><li id="wp-admin-bar-documentation"><a class="ab-item" href="https://wordpress.org/support/">Documentation</a></li><li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/forums/">Support</a></li><li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li></ul></div></li><li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost:10095/wp-admin/">Training sustainable Mobility</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu"><li id="wp-admin-bar-dashboard"><a class="ab-item" href="http://localhost:10095/wp-admin/">Dashboard</a></li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu"><li id="wp-admin-bar-themes"><a class="ab-item" href="http://localhost:10095/wp-admin/themes.php">Themes</a></li><li id="wp-admin-bar-widgets"><a class="ab-item" href="http://localhost:10095/wp-admin/widgets.php">Widgets</a></li><li id="wp-admin-bar-menus"><a class="ab-item" href="http://localhost:10095/wp-admin/nav-menus.php">Menus</a></li><li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item" href="http://localhost:10095/wp-admin/themes.php?page=custom-background">Background</a></li><li id="wp-admin-bar-header" class="hide-if-customize"><a class="ab-item" href="http://localhost:10095/wp-admin/themes.php?page=custom-header">Header</a></li></ul></div></li><li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="http://localhost:10095/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%3A10095%2F">Customize</a></li><li id="wp-admin-bar-comments"><a class="ab-item" href="http://localhost:10095/wp-admin/edit-comments.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost:10095/wp-admin/post-new.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu"><li id="wp-admin-bar-new-post"><a class="ab-item" href="http://localhost:10095/wp-admin/post-new.php">Post</a></li><li id="wp-admin-bar-new-media"><a class="ab-item" href="http://localhost:10095/wp-admin/media-new.php">Media</a></li><li id="wp-admin-bar-new-page"><a class="ab-item" href="http://localhost:10095/wp-admin/post-new.php?post_type=page">Page</a></li><li id="wp-admin-bar-new-user"><a class="ab-item" href="http://localhost:10095/wp-admin/user-new.php">User</a></li></ul></div></li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu"><li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://localhost:10095/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150"><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"></form></div></li><li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://localhost:10095/wp-admin/profile.php">Howdy, <span class="display-name">sandhaya</span><img alt="" src="http://0.gravatar.com/avatar/ca103e3f89683a6d781ce5eeffd29b23?s=26&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/ca103e3f89683a6d781ce5eeffd29b23?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26" loading="lazy"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu"><li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://localhost:10095/wp-admin/profile.php"><img alt="" src="http://0.gravatar.com/avatar/ca103e3f89683a6d781ce5eeffd29b23?s=64&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/ca103e3f89683a6d781ce5eeffd29b23?s=128&amp;d=mm&amp;r=g 2x" class="avatar avatar-64 photo" height="64" width="64" loading="lazy"><span class="display-name">sandhaya</span></a></li><li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://localhost:10095/wp-admin/profile.php">Edit Profile</a></li><li id="wp-admin-bar-logout"><a class="ab-item" href="http://localhost:10095/wp-login.php?action=logout&amp;_wpnonce=919a186ab3">Log Out</a></li></ul></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://localhost:10095/wp-login.php?action=logout&amp;_wpnonce=919a186ab3">Log Out</a>
					</div>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><div class="container">
<div id="page" class="site">


	
<div class="row">
	<div class="col-md-8 col-xs-12">
		<div id="primary" class="content-area">
	       <main id="primary" class="site-main" role="main">
		    -->
		   
		   	
			
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
	
<div class="entry-content">
		
 <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile has-pale-cyan-blue-background-color has-background"><figure class="wp-block-media-text__media"><img width="800" height="512" src="http://localhost:10095/wp-content/uploads/2022/05/codingdevelopmentjslogo-1.png" alt="" class="wp-image-110 size-full" srcset="http://localhost:10095/wp-content/uploads/2022/05/codingdevelopmentjslogo-1.png 512w, http://localhost:10095/wp-content/uploads/2022/05/codingdevelopmentjslogo-1-300x300.png 300w, http://localhost:10095/wp-content/uploads/2022/05/codingdevelopmentjslogo-1-150x150.png 150w" sizes="(max-width: 800px) 100vw, 512px"></figure><div class="wp-block-media-text__content">
<p class="has-vivid-cyan-blue-color has-text-color" style="font-size:28px;font-style:normal;font-height:1.618;font-weight:700">Welcome to Transit </p>



<p class="has-vivid-cyan-blue-color has-text-color" style="font-size:28px;font-style:normal;font-height:1.618;font-weight:700">training and  </p>



<p class="has-vivid-cyan-blue-color has-text-color" style="font-size:28px;font-style:normal;font-height:1.618;font-weight:700">inspiration site for  </p>



<p class="has-vivid-cyan-blue-color has-text-color" style="font-size:28px;font-style:normal;font-height:1.618;font-weight:700">sustainable mobility!</p>
</div></div>  
 


<div class="wp-block-media-text alignwide is-stacked-on-mobile has-pale-cyan-blue-background-color has-background"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content">
<p class="has-large-font-size" style="font-size:28px;font-style:normal;font-height:1.618;font-weight:700"><strong>Latest news</strong></p>



<p class="has-text-color" >Stay up to date with news from the project</p>
&nbsp;
&nbsp;




<h4 class="has-text-align-left has-vivid-cyan-blue-color has-text-color" style="color:#777;font-size:18px;font-style:normal;font-height:1.618;font-weight:700">Welcome to Transit training and </br>
inspiration site for sustainable mobility!</h4>



<p>NB! This is an example of a post.&nbsp; You have two options</br>
	 with this post: Keep – and make it your own. Start editing </br>
	 this post by clicking on the Edit button at the top.<a href="https://sola.kau.se/transit1/2022/04/01/welcome-to-transit-training-and-inspiration-site-for-sustainable-mobility/">Read more…</a></p>
</div></div>



<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img loading="lazy" width="2000" height="683" class="wp-block-cover__image-background wp-image-117" alt="" src="http://localhost:10095/wp-content/uploads/2022/05/flower-1024x683.jpg" data-object-fit="cover" srcset="http://localhost:10095/wp-content/uploads/2022/05/flower-1024x683.jpg 1024w, http://localhost:10095/wp-content/uploads/2022/05/flower-300x200.jpg 300w, http://localhost:10095/wp-content/uploads/2022/05/flower-768x512.jpg 768w, http://localhost:10095/wp-content/uploads/2022/05/flower-1536x1024.jpg 1536w, http://localhost:10095/wp-content/uploads/2022/05/flower-2048x1365.jpg 2048w" sizes="(max-width: 2000px) 100vw, 1024px"><div class="wp-block-cover__inner-container">
<h2 style="margin-bottom: 30px;font-hight: 1.618; font-weight:700">Get in Touch</h2>



<h5 style="font-weight:300;font-height:1.5;font-size:18px;color:#999;">We would like to hear from you</h5>


 <!-- <div class="home__social">
	<i class="home__social-icon">::before</i>
   </div>  -->

   <div class="footer__social">
	   <h4>
                 
                 <a href="#" class="footer__icon"><i class='bx bxl-facebook'> </i></a>
    <!-- <img draggable="false" role="img" class="emoji" alt="↗" src="https://s.w.org/images/core/emoji/13.1.0/svg/2197.svg"/> -->
	
  Find us at the office </h4>
				


<p style="color:#999;font-size:14px;font-style:normal;font-height:1.3;font-weight:300;">Universitetsgatan 2, 65188 Karlstad, Sweden</p>
				
				</div>
<h4>
<img draggable="false" role="img" class="emoji" alt="↗" style="width: 350px;height:800px;" src="https://svgsilh.com/png-512/1682317.png "/>Give us a ring or mail</h4>



<p style="color:#999;font-size:14px;font-style:normal;font-height:1.3;font-weight:300;" >Magnus  Lindh<br>+46 54 700 17 90<br><a style="color:#999;font-size:14px;font-style:normal;font-height:1.3;font-weight:300;" href="mailto:magnus.lindh@kau.se">magnus.lindh@kau.se</a></p>
</div></div>
 
</div><!--col-md-8 col-xs-12-->
</div><!-- #content -->
</div><!-- #page -->
<!-- .container -->


<style>.wp-container-1 .alignleft { float: left; margin-right: 2em;margin-bottom: 3em }.wp-container-1 .alignright { float: right; margin-left: 2em; }</style>
<script src="http://localhost:10095/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
<script src="http://localhost:10095/wp-includes/js/admin-bar.min.js?ver=5.9.3" id="admin-bar-js"></script>
<script src="http://localhost:10095/wp-content/themes/menu-transit/js/navigation.js?ver=1.0.0" id="menu-transit-navigation-js"></script>



</body>
<?php
 get_sidebar();
 get_footer();
