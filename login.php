<?PHP 
 session_start();
include './header.php'; ?>
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
    <a href="index.php" class="h-left navbar_home">Home</a>
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
<h1 class="main-title js-main-title hide-on-editmode">Member Login </h1>
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
        if($_SERVER['REQUEST_METHOD']=='POST'){{
            extract($_POST);            
            
             $joindate= date("Y-m-d");
             $password= md5($password);
          
            $member1Login=$member1->MemberLogin( $email,$password);
            $row= mysqli_fetch_array($member1Login);
                  if($row)  {
                      
                       $_SESSION['memberName']=$row['name'];
                       $_SESSION['id']=$row['id'];
                      echo " <h4>Login Successfully</h4>";
        }
 else {
      echo " <h4>Password Or Email Error</h4>";
 }
               
       
       
        
               
           }
                        
            
        }
    ?>
    
    
<div class="searchConfigFields add-search-container">
    <form method="post">
<div class="add-search-fieldset form-fieldset">

<div class="form_row form-row-members">
<label class="label_column">Email</label>
<div class="field_column">
    <input type="email" name="email" class="searchFields_author textbox" required="" />
</div>

</div>
   
    <div class="form_row form-row-keywords">
<label class="label_column">Password</label>
<div class="field_column">
    <input type="password" name="password" class="js-search-keywords textbox" required="" />

</div>
</div>
    
    
  
    

</div>
    <div class="b-button-group h-margin-top-xl h-margin-bottom-xl h-margin-right-xxl">
<button class="b-button b-button--primary searchSubmitBtn" name="btnSubmit" type="submit">Login</button>
</div>
    
</form>
    
    <div class="b-button-group h-margin-top-xl h-margin-bottom-xl h-margin-right-xxl">
        <a href="member_registration.php"> <h3> registration</h3></a>
</div> 
</div>
    
    

</div>
</div>
</div>


</div>
</div>
<?PHP include './footer.php'; ?>