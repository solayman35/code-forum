<?PHP 
session_start();
?>


<!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr">

<
<head>
<base  />
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="cssa79e.css?styleid=38&amp;td=ltr&amp;sheet=css_reset.css,css_unreset.css,css_utilities.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="csse17a.css?styleid=38&amp;td=ltr&amp;sheet=css_imgareaselect-animated.css,css_jquery-ui-1_11_4_custom.css,css_jquery_qtip_min.css,css_jquery_selectBox.css,css_global.css,css_fonts.css,css_b_link.css,css_b_layout.css,css_b_button.css,css_b_button_group.css,css_b_icon.css,css_b_tabbed_pane.css,css_b_form_control.css,css_b_form_input.css,css_b_form_select.css,css_b_form_textarea.css,css_b_media.css,css_b_divider.css,css_b_avatar.css,css_b_ajax_loading_indicator.css,css_b_topicpreview.css,css_b_menu.css,css_responsive.css&amp;ts=1478724531" />
<!--<![endif]-->
<script type="text/javascript" src="js/header-rollup-524.js"></script>
<link rel="canonical" href="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
		Home		
	</title>
<meta name="description" content="vBulletin Forums" />


<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<
<link rel="stylesheet" type="text/css" href="css78f0.css?styleid=38&amp;td=ltr&amp;sheet=quarto_theme_prefooter_blocks.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css4bd8.css?styleid=38&amp;td=ltr&amp;sheet=quarto_theme_social_icons.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css07fb.css?styleid=38&amp;td=ltr&amp;sheet=quarto_font_awesome.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css395f.css?styleid=38&amp;td=ltr&amp;sheet=css_b_top_background.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="cssc533.css?styleid=38&amp;td=ltr&amp;sheet=css_b_post.css,css_b_post_control.css,css_b_post_attachments.css,css_b_post_notice.css,css_b_comments.css,css_b_comment.css,css_b_comment_entry.css,css_b_userinfo.css,css_b_meter.css,css_b_inlinemod.css,css_b_bbcode_user.css,css_b_comp_menu_horizontal.css,css_b_comp_menu_dropdown.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css69a5.css?styleid=38&amp;td=ltr&amp;sheet=css_b_module.css&amp;ts=1478724531" />
<link rel="stylesheet" type="text/css" href="css14c7.css?styleid=38&amp;td=ltr&amp;sheet=css_b_post_sm.css&amp;ts=1478724531" />
<link class="js-additional-css" rel="stylesheet" type="text/css" href="css8c67.css?styleid=38&amp;td=ltr&amp;sheet=css_additional.css&amp;ts=1478724531" />
<!--<![endif]-->




</head>

<body id="vb-page-body" class="l-desktop page1 vb-page view-mode logged-out" itemscope itemtype="" data-usergroupid="1">
<!--<![endif]-->




<div id="main-navbar-wrapper" class="noselect">
    
<div id="main-navbar" class="h-clearfix">
<ul class="main-nav h-left h-hide"></ul>
<ul class="secondary-nav h-right h-disabled js-shrink-event-parent js-top-secondary-nav">
<li class="username-container h-right js-menu__dropdown b_menu__dropdown js-shrink-event-child">
    <?PHP 
    
    if(!isset($_SESSION['memberName'])){
        ?>
    <a href="login.php"><span id="lnkLoginSignupMenu" class="b_menu__dropdownbutton">Login or Sign Up</span></a>
    <?PHP } else{  ?>
    <a href="profile.php"><span id="lnkLoginSignupMenu" class="b_menu__dropdownbutton"><?PHP echo $_SESSION['memberName'] ?></span></a>
    <a id="lnkLoginSignupMenu" class="b_menu__dropdownbutton" href="destroy_session.php">Logout </a>
    <?PHP } ?>
  
</li>
</ul>
</div>
 
    
</div>
<div id="sitebuilder-wrapper" class="noselect h-clearfix">
</div>
<div class="main-navbar-bottom-line"></div>
<
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
<div class="b-top-background__header-mainnav-subnav">
<div class="b-top-background__header-mainnav">
<div id="header" class="noselect">
<div class="header-cell">
<div class="site-logo header-edit-box">
    <a href="index.php"><img src="" data-orig-src="" alt="Logo" title="" /></a>
</div>
</div>
<div class="toolbar">
<ul class="h-right">
<li class="search-container">
<form id="searchForm" action="" class="h-left" method="GET">
<div class="h-left">
<div class="search-box search-btn-inside-box">
<input type="text" name="q" id="q" placeholder="Search" class="textbox search-term" autocomplete="off" />
<button type="submit" id="btnSearch" class="search-btn" title="Search"><span class="vb-icon vb-icon-search"></span></button>
<div class="vertical-divider-left"></div>
<div id="searchPopupControl" title="Filter search"><span class="vb-icon vb-icon-arrow-down-small"></span></div>
<div id="searchPopupContent"><div class="searchPopupBody">
<label><input type="checkbox" name="search" class="searchFields_title_only" value="1" />Search in titles only</label>
<div class="h-clear"></div>
<label><input type="checkbox" name="search" class="searchFields_channel" value="1" />Search in Home only</label>
<label><span class="vb-icon vb-icon-adv-search"></span><a href="#" id="btnAdvSearch" class="adv-search-btn">Advanced Search</a></label>
<div class="h-clear"></div>
<div>
&nbsp;
<button type="submit" id="btnSearch-popup" class="b-button b-button--primary h-right">Search</button>
</div>
</div>
<input type="hidden" name="searchJSON" value="" /></div>
</div>
</div>
</form>
</li>
</ul>
</div>
</div>
<div id="channel-tabbar" class="h-clearfix noselect">
<ul class="channel-tabbar-list h-left b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-comp-menu-dropdown--inactive js-comp-menu-dropdown__content--main-menu h-hide-on-small">
<li class="current section-item">
<a href="index.php" class="h-left navbar_home">Forums</a>
<span class="channel-tabbar-divider"></span>
<span class="mobile dropdown-icon"><span class="icon h-right"></span></span>
</li>
<li class=" section-item">
<a href="" class="h-left navbar_blogs">Blogs</a>
<span class="channel-tabbar-divider"></span>
<span class="mobile dropdown-icon"><span class="icon h-right"></span></span>
</li>

</ul>
</div>
</div>
<div id="channel-subtabbar" class="h-clearfix  h-hide-on-small h-block">
<ul class="h-left channel-subtabbar-list js-channel-subtabbar-list">
<li class=""><a href="" class="navbar_todays_posts">Today's Posts</a></li>

<li class=""><a href="memberlist.php" class="navbar_member_list">Member List</a></li>
</ul>
</div>
</div>


<div id="content">
<div class="canvas-layout-container js-canvas-layout-container">
<div id="canvas-layout-wide-narrow" class="canvas-layout" data-layout-id="2">

<div class="canvas-layout-row no-columns h-clearfix l-row">
<div class="canvas-widget-list section-2 js-sectiontype-notice h-clearfix l-col__large-12 l-col__small--full">

<div class="b-module canvas-widget default-widget announcement-widget empty" id="widget_1" data-widget-id="88" data-widget-instance-id="1">
<div class="widget-header h-clearfix">
<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode"></h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
<div class="widget-content">

</div>
</div>


<div class="b-module canvas-widget default-widget page-title-widget widget-no-header-buttons widget-no-border" id="widget_2" data-widget-id="111" data-widget-instance-id="2">
<div class="widget-header h-clearfix">
<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode">Forums</h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
</div>

</div>
</div>

<div class="canvas-layout-row has-columns l-row l-row__fixed--right">
<div class="canvas-widget-list section-0 js-sectiontype-primary has-adjacent-right-col l-col__flex-6 l-col--flex-first l-col__small--full h-padding-right-xl">
<div class="l-col__flex-content">

<div class="b-module canvas-widget default-widget activity-stream-widget forum-activity-stream-widget widget-tabs ui-tabs widget-no-header-buttons widget-no-border" id="widget_3" data-widget-id="63" data-widget-instance-id="3" data-widget-default-tab="#forum-tab">

<div class="widget-content widget-tabs-panel">
<div id="activity-stream-tab" class="h-hide">
<div class="conversation-toolbar-wrapper  top h-clear hide-on-editmode
	
		scrolltofixed-floating
		scrolltofixed-top
	
" data-allow-history="0">
<div class="conversation-toolbar">
<ul class="toolset-right">
<li class="toolbar-filter toolbar-filter-top">
<div class="filter-wrapper h-clearfix js-button" tabindex="0">
<div class="label h-left">Filter</div>
<div class="arrow vb-icon-wrapper h-left"><span class="vb-icon vb-icon-triangle-down-wide"></span></div>
</div>
</li>
</ul>
</div>
<form action="" method="post" class="toolbar-filter-overlay h-clearfix">
<input type="hidden" name="nodeid" value="0" />
<input type="hidden" name="view" value="activity" />
<input type="hidden" name="per-page" value="10" />
<input type="hidden" name="pagenum" value="1" />
<input type="hidden" name="maxpages" value="20" />
<input type="hidden" name="userid" value="0" />
<input type="hidden" name="showChannelInfo" value="1" />
<ul class="filter-options-list">


<li>
<div class="filter-header">New Topics</div>
<div class="filter-options">
<label><input type="radio" name="filter_new_topics" value="1" checked="checked" class="js-default-checked" /><span>On</span></label>
<label><input type="radio" name="filter_new_topics" value="0" /><span>Off</span></label>
</div>
</li>

</ul>
</form>
<div class="filtered-by h-clearfix h-hide">
<label>Filtered by:</label>
<div class="filter-text-wrapper h-left">
</div>
<a href="#" class="clear-all h-hide">Clear All</a>
</div>
<div class="new-conversations-strip"><span></span> new posts</div>
</div>
<ul class="conversation-list list-container stream-view stream-view-full-width activity-view full-activity-view h-clearfix h-hide">
</ul>
<div class="conversation-empty">No content found</div>
<div class="conversation-showmore h-hide">Show More</div>
</div>
    
    

<div id="forum-tab" class=" dataLoaded">
<table class="forum-list-container stretch">
<tr class="forum-list-header">
<th class="header-forum"><span>Directory</span></th>
<th class="header-topics"><span>Topics</span></th>
<th class="header-posts"><span>Posts</span></th>
<th class="header-lastpost"><span>Last Post</span></th>
</tr>

<tr class="category-header" id="forum3">
<td colspan="4"><a class="category" data-nodeid="3" href="">Main Forum</a></td>
</tr>



<?PHP include './database/db_member.php'; 
    $postData=new Member();
    
    $data=$postData->PostList();
    while ($rowPost= mysqli_fetch_array($data)){
?>
    
    
    
    
    <tr class="forum-item main new forum-item" id="forum16" data-channel-id="16" data-lastcontent="1513195895" data-readtime="0">
<td class="cell-forum">
<div class="forum-wrapper">
<span class="icon"></span>
<div class="forum-info">
    <a href="post_details.php?id=<?PHP echo $rowPost['pid'] ?>" class="forum-title"><?PHP echo $rowPost['category'] ?></a>
</div>
</div>
<div class="forum-desc"><?PHP echo $rowPost['title'] ?></div>
<div class="rx-forum-stats h-hide">
Topics: 157
Posts: 157
</div>
<div class="rx-lastpost-info h-hide">
Last Post:
<a href="" class="lastpost-title"><?PHP echo $rowPost['title'] ?></a>
</div>
</td>
<td class="topics-count"></td>
<td class="posts-count"></td>
<td class="lastpost">
<div class="lastpost-wrapper">
<a href="" class="avatar h-left">
    <img src="images/<?PHP echo $rowPost['image'] ?>" alt="Support" />
</a>
<div class="lastpost-info">
<a href="" class="lastpost-title ellipsis"><?PHP echo $rowPost['title'] ?></a>
<div class="lastpost-by">
    by <a href="member_details.php?id=<?PHP echo $rowPost['id'] ?>"><?PHP echo $rowPost['name'] ?></a>
</div>
<div class="lastpost-date post-date"><?PHP echo $rowPost['date'] ?></div>
</div>
</div>
</td>
</tr>
    
   
    <?PHP } ?>
    
    
    
    

<tr>
<td colspan="4" class="forum-list-divider">&nbsp;</td>
</tr>

<tr>
<td colspan="4" class="forum-list-divider">&nbsp;</td>
</tr>
</table>

</div>
        
</div>
    <div class="js-pagenav pagenav h-right js-shrink-event-parent">
<a class="js-pagenav-button js-pagenav-prev-button b-button b-button--secondary js-shrink-event-child" data-page="1" href="../second-subforum.html" tabindex="0">Previous</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary js-pagenav-first-button" data-page="1" href="../second-subforum.html" tabindex="0">1</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--primary page js-pagenav-current-button" data-page="2" href="page2.html" tabindex="0">2</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary" data-page="3" href="page3.html" tabindex="0">3</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary" data-page="4" href="page4.html" tabindex="0">4</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary" data-page="5" href="page5.html" tabindex="0">5</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary" data-page="12" href="page12.html" tabindex="0">12</a>
<a class="js-pagenav-button b-button b-button--narrow js-shrink-event-child b-button--secondary js-pagenav-last-button" data-page="16" href="page16.html" tabindex="0">16</a>
<a class="js-pagenav-button js-pagenav-next-button b-button b-button--secondary js-shrink-event-child" data-page="3" href="page3.html" tabindex="0">Next</a>
</div>
</div>




</div>
    
    
</div>
<div class="l-narrow-column canvas-widget-list section-1 js-sectiontype-secondary has-adjacent-left-col l-col__fixed-6 l-col__small--full">

<div class="b-module canvas-widget default-widget custom-html-widget" id="widget_153" data-widget-id="61" data-widget-instance-id="153">
<div class="widget-content restore">
<a href="" target="_blank" title="Buy Metro for vBulletin 5 Connect on themeforest.net"><img class="metro-vb5-buy" src="images/metro-vb5-buy.png" alt="Buy Metro for vBulletin 5 Connect on themeforest.net" /></a>
</div>
</div>

<?PHP include './latest_post.php'; ?>




</div>
</div>

<div class="canvas-layout-row no-columns h-clearfix l-row">
<div class="canvas-widget-list section-3 js-sectiontype-extra h-clearfix l-col__large-12 l-col__small--full">
</div>
</div>
</div>
</div>
<div class="h-clear"></div>
</div>
<div id="footer">
<div class="prefooter">
<div class="prefooter-block prefooter-block-01 ">
<h6>Latest topics</h6>
<ul>

<li><i class="fa fa-file fa-fw"></i> <a href="#">Welcome to phpBB3 </a></li>
</ul>
</div>
<div class="prefooter-block prefooter-block-02">
<h6>Links</h6>
<ul>
<li><i class="fa fa-chevron-circle-right fa-fw"></i>&nbsp;<a href="#">Home</a></li>
<li><i class="fa fa-chevron-circle-right fa-fw"></i>&nbsp;<a href="#">Faq</a></li>
<li><i class="fa fa-chevron-circle-right fa-fw"></i>&nbsp;<a href="#">Members</a></li>

</ul>
</div>
<div class="prefooter-block prefooter-block-03">
<h6>Contacts</h6>

</div>
</div>
<div id="footer-tabbar" class="h-clearfix">

<ul class="nav-list h-right js-footer-nav-list h-margin-right-xxl b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-dropdown-trigger-phrase="go_to_ellipsis" data-dropdown-menu-classes="h-margin-vert-l b-comp-menu-dropdown--direction-up" data-dropdown-trigger-classes="b-comp-menu-dropdown__trigger--arrow">

<li><a href="#" class="js-footer-go-to-top">Go to top</a></li>
</ul>
</div>
</div>
</div>

</div>
<div id="loading-indicator" class="js-loading-indicator b-ajax-loading-indicator h-hide">
<span>Working...</span>
</div>
<div id="confirm-dialog" class="sb-dialog">
<div class="dialog-content h-clearfix">
<div class="icon h-left"></div>
<div class="message"></div>
</div>
<div class="b-button-group">
<button id="btnConfirmDialogYes" type="button" class="b-button b-button--primary js-button">Yes</button>
<button id="btnConfirmDialogNo" type="button" class="b-button b-button--secondary js-button">No</button>
</div>
</div>
<div id="alert-dialog" class="sb-dialog">
<div class="dialog-content h-clearfix">
<div class="icon h-left"></div>
<div class="message"></div>
</div>
<div class="b-button-group">
<button id="btnAlertDialogOK" type="button" class="b-button b-button--primary js-button">OK</button>
</div>
</div>
<div id="prompt-dialog" class="sb-dialog">
<div class="dialog-content table h-clearfix">
<div class="message td"></div>
<div class="input-box-container td">
<input type="text" class="input-box textbox" />
<textarea class="input-box textbox h-hide" rows="3"></textarea>
</div>
</div>
<div class="b-button-group">
<button id="btnPromptDialogOK" type="button" class="b-button b-button--primary js-button">OK</button>
<button id="btnPromptDialogCancel" type="button" class="b-button b-button--secondary js-button">Cancel</button>
</div>
</div>
<div id="slideshow-dialog" class="sb-dialog slideshow">
<div class="slideshow-wrapper"><div class="vb-icon vb-icon-x-square close-btn">X</div></div>
<div class="caption"></div>
<div class="thumbnails"></div>
</div>
<div class="unsubscribe-overlay-container"></div>
<script data-cfasync="false" src="cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery/jquery-2.1.4.min.js"><\/script>');</script>




</body>


</html>
