<?PHP
//session_start();
?>

<!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr">

<head>
<base  />
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css26a2.css?styleid=47&amp;td=ltr&amp;sheet=css_reset.css,css_unreset.css,css_utilities.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css460a.css?styleid=47&amp;td=ltr&amp;sheet=css_imgareaselect-animated.css,css_jquery-ui-1_11_4_custom.css,css_jquery_qtip_min.css,css_jquery_selectBox.css,css_global.css,css_fonts.css,css_b_link.css,css_b_layout.css,css_b_button.css,css_b_button_group.css,css_b_icon.css,css_b_tabbed_pane.css,css_b_form_control.css,css_b_form_input.css,css_b_form_select.css,css_b_form_textarea.css,css_b_media.css,css_b_divider.css,css_b_avatar.css,css_b_ajax_loading_indicator.css,css_b_topicpreview.css,css_b_menu.css,css_responsive.css&amp;ts=1478724531" />
<!--<![endif]-->
<script type="text/javascript" src="js/header-rollup-524.js"></script>
<meta name="robots" content="noindex" />
<link rel="canonical" href="advanced_search.html" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
	
	</title>
<meta name="description" content="vBulletin Search" />


<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="cssbdb0.css?styleid=47&amp;td=ltr&amp;sheet=quarto_theme_prefooter_blocks.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css0d8e.css?styleid=47&amp;td=ltr&amp;sheet=quarto_theme_social_icons.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css9d3e.css?styleid=47&amp;td=ltr&amp;sheet=quarto_font_awesome.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css0dfe.css?styleid=47&amp;td=ltr&amp;sheet=css_search.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="csseb64.css?styleid=47&amp;td=ltr&amp;sheet=css_sitebuilder.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css7aea.css?styleid=47&amp;td=ltr&amp;sheet=css_form.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css0392.css?styleid=47&amp;td=ltr&amp;sheet=css_b_top_background.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="cssaf59.css?styleid=47&amp;td=ltr&amp;sheet=css_b_post.css,css_b_post_control.css,css_b_post_attachments.css,css_b_post_notice.css,css_b_comments.css,css_b_comment.css,css_b_comment_entry.css,css_b_userinfo.css,css_b_meter.css,css_b_inlinemod.css,css_b_bbcode_user.css,css_b_comp_menu_horizontal.css,css_b_comp_menu_dropdown.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="cssb115.css?styleid=47&amp;td=ltr&amp;sheet=css_b_module.css&amp;ts=1478724531" />
<link class="js-additional-css" rel="stylesheet" type="text/css" href="css394d.css?styleid=47&amp;td=ltr&amp;sheet=css_additional.css&amp;ts=1478724531" />
<!--<![endif]-->




</head>

<body id="vb-page-body" class="l-desktop page2 vb-page view-mode logged-out" itemscope data-usergroupid="1">
<!--<![endif]-->


<div id="main-navbar-wrapper" class="noselect">
<div id="main-navbar" class="h-clearfix">
<ul class="main-nav h-left h-hide"></ul>
<ul class="secondary-nav h-right h-disabled js-shrink-event-parent js-top-secondary-nav">
<li class="username-container h-right js-menu__dropdown b_menu__dropdown js-shrink-event-child">
    
    <?PHP if(isset($_SESSION['memberName'])){
        ?>
    <span id="lnkLoginSignupMenu" class="b_menu__dropdownbutton"><?PHP echo $_SESSION['memberName'] ?>  </span>
    <a id="lnkLoginSignupMenu" class="b_menu__dropdownbutton" href="destroy_session.php">Logout </a>
    <?PHP } ?>
<ul class='js-menu__dropdown-submenu b-menu__dropdown-submenu'>
<li id="idLoginIframeContainer" class="b-menu__login-iframe-container">
<iframe id="idLoginIframe" class="js-menu__login-iframe b-menu__login-iframe" src=""></iframe>
</li>
<li id="externalLoginProviders" class="b-menu__login-external">
<span class="b-menu__login-external-title h-margin-left-xl">Log in with</span>
</li>
</ul>
</li>
</ul
</div>
</div>
<div id="sitebuilder-wrapper" class="noselect h-clearfix">
</div>
<div class="main-navbar-bottom-line"></div>

<div id="outer-wrapper">
<div id="wrapper">
<!--<![endif]-->
<div id="header-axd" class="header-edit-box axdnum_1 h-clearfix">
<div class="axd-container axd-container_header">
<div class="admin-only">
</div>
<div class="axd axd_header">
</div>
</div>
<div class="axd-container axd-container_header2">
<div class="admin-only">
</div>
<div class="axd axd_header2">
</div>
</div>
</div>