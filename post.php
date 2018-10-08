<?PHP include './header.php'; ?>
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
<label><input type="checkbox" name="searchFields[title_only]" class="searchFields_title_only" value="1" />Search in titles only</label>
<div class="h-clear"></div>
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

</ul>
</div>
</div>
<div id="channel-subtabbar" class="h-clearfix  h-hide-on-small h-block">
<ul class="h-left channel-subtabbar-list js-channel-subtabbar-list">
<li class=""><a href="" class="navbar_todays_posts">Today's Posts</a></li>

<li class=""><a href="" class="navbar_member_list">Member List</a></li>
</ul>
</div>
</div>
<ul id="breadcrumbs" class="h-clearfix" itemprop="breadcrumb">
    <li class="crumb ellipsis"><a class="crumb-link" href="index.php">Home</a></li>


</ul>

<div id="content">
<div class="canvas-layout-container js-canvas-layout-container">
<div id="canvas-layout-full" class="canvas-layout" data-layout-id="1">

<div class="canvas-layout-row no-columns h-clearfix l-row">
<div class="canvas-widget-list section-2 js-sectiontype-notice h-clearfix l-col__large-12 l-col__small--full">

<div class="b-module canvas-widget default-widget announcement-widget empty" id="widget_20" data-widget-id="88" data-widget-instance-id="20">
<div class="widget-header h-clearfix">

<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode">Announcement</h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
<div class="widget-content">
No announcement yet.
</div>
</div>


<div class="b-module canvas-widget default-widget page-title-widget widget-no-header-buttons widget-no-border" id="widget_21" data-widget-id="111" data-widget-instance-id="21">
<div class="widget-header h-clearfix">
<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode">Member Registration Form</h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
</div>

</div>
</div>

<div class="canvas-layout-row no-columns h-clearfix l-row">
<div class="canvas-widget-list section-0 js-sectiontype-primary js-sectiontype-secondary l-col__large-12 l-col__small--full">

<div class="b-module canvas-widget search-fields-widget widget-no-header-buttons widget-no-border" id="widget_22" data-widget-id="69" data-widget-instance-id="22">
<div class="widget-content">
<div id="advancedSearchFields" class="advancedSearchFields form_layout">

    <?PHP 
    
    include './database/db_member.php';
    
    $member1=new Member();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);            
            
             $joindate= date("Y-m-d");
             $password= md5($password);
          
            $member1Insert=$member1->MemberRegistration($name, $email, $location, $password, $joindate);
            if ($member1Insert){
               
                echo " <h4>Registration Successfully</h4>";
            }
                        
            
        }
    ?>
    
    
<div class="searchConfigFields add-search-container">
    <form method="post">
<div class="add-search-fieldset form-fieldset">
<div class="form_row form-row-keywords">
<label class="label_column">Select Language</label>
<div class="field_column">
    <select style="width: 600px">
        <option value="Structure Programming C++">C++</option>
        <option value="JAVA Programming">JAVA</option>
        <option value="C Sharp ">C Sharp</option>
        <option value="PHP ">PHP </option>
    </select>

</div>
</div>
    
    <div class="form_row form-row-keywords">
<label class="label_column">Title</label>
<div class="field_column">
    <input type="text" name="title" class="js-search-keywords textbox" required=""/>

</div>
</div>
    
    
    <div class="form_row form-row-keywords">
<label class="label_column">Select Language</label>
<div class="field_column">
    <input type="text" name="name" class="js-search-keywords textbox" required=""/>

</div>
</div>
    
<div class="form_row form-row-members">
<label class="label_column">Description</label>
<div class="field_column">
    <input type="text" name="desc" class="searchFields_author textbox" required="" />
</div>

</div>
    
    


    
   
  
    
    
  
    

</div>
    <div class="b-button-group h-margin-top-xl h-margin-bottom-xl h-margin-right-xxl">
<button class="b-button b-button--primary searchSubmitBtn" name="btnSubmit" type="submit">Registration</button>
</div>
    
</form>
</div>
    
    

</div>
</div>
</div>


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

</ul>
</div>
<div class="prefooter-block prefooter-block-03">
<h6>Contacts</h6>

</div>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery/jquery-2.1.4.min.js"><\/script>');</script>
<script type="text/javascript" src="js/footer-rollup-524.js"></script>




<script type="text/javascript" src="js/search-rollup-524.js"></script>
</body>

<!-- Mirrored from vb5.pixelgoose.com/advanced_search?r=469075 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2017 19:03:40 GMT -->
</html>