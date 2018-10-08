
<?PHP
session_start();
 include './database/db_member.php'; 
 $obj=new Member();
 $data=$obj->PostByMemberId($_SESSION['id']);
 
$row= mysqli_fetch_array($data);

?>



<div class="canvas-layout-row has-columns l-row">
<div class="canvas-widget-list section-1 js-sectiontype-primary has-adjacent-left-col l-col__flex-6 l-col--flex-first l-col__small--full h-padding-left-xl">
<div class="l-col__flex-content">

<div class="b-button-group h-margin-bottom-l h-hide-on-large h-block js-movable-toolbar-button-container"></div>
<div class="b-module b-module--contiguous canvas-widget default-widget profile-widget widget-no-border widget-no-header widget-no-header-buttons" id="widget_40" data-widget-id="78" data-widget-instance-id="40" data-widget-default-tab="#activities-tab">
<div class="widget-content">
<div class="profile-container h-clearfix">
<a id="profile-module-top" class="anchor js-module-top-anchor"></a>



<div class="tabs profileTabs widget-tabs ui-tabs" id="profileTabs">
<ul class="widget-tabs-nav profile-tabs-nav ui-tabs-nav" data-allow-history="1">
<li class="ui-tabs-active"><a href="#activities-tab" data-url-path="activities">Activities</a></li>

</ul>
<div class="widget-header widget-tabs-nav">
<select>
<option value="#activities-tab" selected="selected" data-url-path="activities">Activities</option>

</select>
</div>
<div id="activities-tab" class="tab activities-tab widget-tabs-panel h-clearfix inlinemod-container" data-url-path="activities">
<div class="h-left profilePreviewContainer" id="profileFilterContainer">

<div class="conversation-toolbar-wrapper  top h-clear hide-on-editmode
	
" data-allow-history="1">
<div class="conversation-toolbar">
<ul class="toolset-left ">


</ul>
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
<input type="hidden" name="view" value="conversation_stream" />
<input type="hidden" name="per-page" value="10" />
<input type="hidden" name="pagenum" value="1" />
<input type="hidden" name="maxpages" value="20" />
<input type="hidden" name="userid" value="2" />
<input type="hidden" name="showChannelInfo" value="1" />
<ul class="filter-options-list">
<li>
<div class="filter-header">Time</div>
<div class="filter-options">
<label><input type="radio" name="filter_time" value="time_all" /><span>All Time</span></label>
<label><input type="radio" name="filter_time" value="time_today" /><span>Today</span></label>
<label><input type="radio" name="filter_time" value="time_lastweek" /><span>Last Week</span></label>
<label><input type="radio" name="filter_time" value="time_lastmonth" checked="checked" class="js-default-checked" /><span>Last Month</span></label>
</div>
</li>
<li>
<div class="filter-header">Show</div>
<div class="filter-options">
<label><input type="radio" name="filter_show" value="show_all" checked="checked" class="js-default-checked" /><span>All</span></label>
<label><input type="radio" name="filter_show" value="vBForum_Text" /><span>Discussions only</span></label>
<label><input type="radio" name="filter_show" value="vBForum_Gallery" /><span>Photos only</span></label>
<label><input type="radio" name="filter_show" value="vBForum_Video" /><span>Videos only</span></label>
<label><input type="radio" name="filter_show" value="vBForum_Link" /><span>Links only</span></label>
<label><input type="radio" name="filter_show" value="vBForum_Poll" /><span>Polls only</span></label>
</div>
</li>
<li>
<div class="filter-header">Source</div>
<div class="filter-options">
<label><input type="radio" name="filter_source" value="source_all" checked="checked" class="js-default-checked" /><span>All</span></label>
<label><input type="radio" name="filter_source" value="source_user" /><span>Support only</span></label>
<label><input type="radio" name="filter_source" value="source_vm" /><span>Visitor Messages Only</span></label>
<label class="no-filter-option"><a href="../advanced_search.html">Advanced</a></label>
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
</div>
<ul class="conversation-list list-container stream-view activity-view h-clearfix ajax-order-newest-first">
    
    

<?PHP 

    while ($rowPost= mysqli_fetch_array($data)){
?>



<li data-node-id="235" data-node-publishdate="1512661449" class="b-post js-post js-comment-entry__parent list-item list-item-text h-left h-clear" itemscope itemtype="http://schema.org/CreativeWork">
<meta itemprop="name" content="vBulletin Mobile Suite 1.1.8 Released" />
<meta itemprop="url" content="d" />
<a id="post235" class="anchor"></a>
<div class="b-post__hide-when-deleted">
<hr class="b-divider--section OLD__section-divider">
<div class="list-item-header h-left">
    <a href="" class="avatar h-left avatar-2"><img src="images/<?PHP echo $rowPost['image'] ?>" alt="Support" /></a>
<div class="post-header h-left">
<div class="post-action-wrapper ellipsis multiline">
<a href="" class="user-profile author"><?PHP echo $rowPost['name'] ?></a> started a topic <a href="../forum/main-forum/second-subforum/235-vbulletin-mobile-suite-1-1-8-released.html" class="b-post__stream-post-title starter"><?PHP echo $rowPost['title'] ?></a>
</div>
<div class="channel-info ellipsis">in <a href="" class="ellipsis"><?PHP echo $rowPost['category'] ?></a></div>
</div>
<div class="info h-right">
<span class="post-date h-left"><time itemprop="dateCreated" datetime="2017-12-07T15:44:09"><?PHP echo $rowPost['date'] ?></time></span>
</div>
</div>

<div class="js-post__content-wrapper list-item-body-wrapper h-clear" data-node-type="starter">
<div class="js-post__content list-item-body conversation-body">
<h2 class="b-post__stream-post-title js-post-title h-hide"><?PHP echo $rowPost['title'] ?></h2>
<div class="post-content restore js-post__content-text h-wordwrap" itemprop="text">
v<?PHP echo $rowPost['description'] ?>
</div>
<div class="post-links">
<a href="#" class="see-link more" data-toggle-text="See less">See more</a>
<span>|</span>
<a href="" class="goto-post">
Go to post
</a>
</div>
</div>
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
<div class="h-clearfix">
<hr class="b-divider b-divider--post-controls" />
<ul class="h-left js-post-info">
</ul>
<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="235" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
<li id="postcount-235" class="h-margin-top-xs b-post-control b-post-control--responsive postcount">
<span class="b-icon b-icon__doc--gray b-post-control__icon"></span>
<span class="b-post-control__label">1 post</span>
</li>
</ul>
</div>
</div>
<div class="edit-conversation-container OLD__edit-conversation-container"></div>
</div>
</div>
</li>


    <?PHP } ?>

<div class="b-button-group h-margin-top-xl h-margin-bottom-xl h-margin-right-xxl">
    <a href="post.php"> <button class="b-button b-button--primary searchSubmitBtn" name="btnSubmit" type="submit">Post</button></a>
</div>
<li data-node-id="234" data-node-publishdate="1512205670" class="b-post js-post js-comment-entry__parent list-item list-item-text h-left h-clear" itemscope itemtype="http://schema.org/CreativeWork">
<meta itemprop="name" content="Google ReCaptcha" />
<meta itemprop="url" content="" />
<a id="post234" class="anchor"></a>

</li>
</ul>
<div class="conversation-empty h-hide">No activity results to display</div>
<div class="conversation-showmore h-hide">Show More</div>
</div>
<div id="about-tab" class="tab about-tab widget-tabs-panel h-clearfix h-hide" data-url-path="about" data-allow-history="1">
<div class="js-profile-about-container" data-user-id="2">
</div>
</div>
<div id="media-tab" class="tab media-tab widget-tabs-panel h-clearfix h-hide" data-url-path="media">
<div class="js-profile-media-container" data-user-id="2" data-perpage="15">
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="l-narrow-column canvas-widget-list section-0 js-sectiontype-secondary has-adjacent-right-col l-col__fixed-6 l-col__small--full">

<div class="b-module b-module--contiguous canvas-widget default-widget profile-sidebar-widget widget-no-border widget-no-header widget-no-header-buttons profileSidebar" id="widget_39" data-widget-id="80" data-widget-instance-id="39">
<div class="widget-header h-clearfix">
<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode">Profile Sidebar</h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
<div class="widget-content profile_sidebar_content">
<script type="text/javascript">
				(function() {
					var canvasLayout = document.querySelector('.canvas-layout-container .canvas-layout');
					canvasLayout.className += ' b-layout--contiguous';
				})();
				</script>
<div class="profileContainer h-padding-l">
<div class="profile-photo-wrapper h-align-center">
    <img class="profile-photo" src="images/IMG_20170727_162904_383.jpg" alt="Support" id="profilePicImg" />
</div>
<div class="profile-acct">
<div class="username">
Support
<span class="online-status offline" title="Support is offline"><span class="vb-icon vb-icon-status-offline"></span></span>
</div>
<div class="usertitle"><?PHP echo $row['name'] ?></div>
</div>
<div class="status-update h-wordwrap" id="userStatus">
</div>

<div class="profile-info-item"><?PHP echo $row['joinDate'] ?></div>
<div class="profile-info-item"><?PHP echo $row['location'] ?> </div>
</div>
</div>

</div>
</div>

</div>
</div>