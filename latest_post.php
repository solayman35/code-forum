<?PHP
 //include './database/db_member.php';
 $obj=new Member();
 $data=$obj->LatestPost();

?>


<div class="b-module canvas-widget search-widget" id="widget_6" data-widget-id="67" data-widget-instance-id="6">
<div class="widget-header h-clearfix">
<div class="module-title h-left">
<h1 class="main-title js-main-title hide-on-editmode">Latest Topics</h1>
</div>
<div class="module-buttons">
<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="vb-icon vb-icon-toggle">Collapse</span></span>
</div>
</div>
<hr class="widget-header-divider" />


<div class="widget-content">
    
    <?PHP while ($row= mysqli_fetch_array($data)){ ?>
<ul class="conversation-list list-container h-clearfix">
<li class="b-post-sm js-post-sm" data-nodeid="237">
<div class="b-post-sm__avatar avatar h-left">
<a href="">
    <img src="images/<?PHP echo $row['image'] ?>" width="32" height="32" alt="Support" />
</a>
</div>
<div class="b-post-sm__content b-post-sm__content--has-avatar">
<div class="b-post-sm__title ellipsis">
<a href=""><?PHP echo $row['title'] ?></a>
</div>
<div class="b-post-sm__author">
<a href=""><?PHP echo $row['name'] ?></a>
</div>
<div class="b-post-sm__post-content post-content ellipsis restore">
Two potential issues have been identified in vBulletin 5.3.2 and higher. The first affects the template rendering functionality and could lead to arbitrary...
</div>
<div class="b-post-sm__date"><?PHP $row['date'] ?></div>
</div>
</li>


    <?PHP  } ?>
</ul>
<div class="widget-footer h-align-left h-clear">
    <a href="all_post.php" class="b-button">View All</a>
</div>
</div>
</div>
