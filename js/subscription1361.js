window.vBulletin=window.vBulletin||{};window.vBulletin.phrase=window.vBulletin.phrase||{};window.vBulletin.phrase.precache=window.vBulletin.phrase.precache||[];window.vBulletin.phrase.precache=$.merge(window.vBulletin.phrase.precache,["following","following_pending","following_remove","showing_x_subscribers","showing_x_subscriptions","unable_to_contact_server_please_try_again"]);(function(A){var B=[".subscriptions-widget"];if(!vBulletin.pageHasSelectors(B)){return false}A(document).ready(function(){var P=A(".subscriptions-widget .subscribeTabs"),D=A(".subscriptions-tab",P),S=A(".subscribers-tab",P),Q=A(".subscription-list",D),H,I,T={},J,R,F,L,K,Y;A(".ui-tabs-nav > li",P).removeClass("ui-state-disabled");F=P.find(".ui-tabs-nav > li");L=F.filter(".ui-tabs-active");K=L.index();$defaultTabAnchor=L.find("> a");Y=$defaultTabAnchor.data("url-path");allowTabHistory=F.parent().data("allow-history")=="1";tabHistory=new vBulletin.history.instance(allowTabHistory);var O=function(d,c,b,e,f){var a=null,Z;if(e){Z=new vBulletin.pagination({context:d,allowHistory:b,tabParamAsQueryString:false,onPageChanged:function(g,h){a.updatePageNumber(g);if(!h){a.applyFilters(false,false,false,true)}}})}a=new vBulletin.conversation.filter({context:d,allowHistory:b,tabParamAsQueryString:false,autoCheck:f?A(".toolbar-filter-overlay input[type=radio][value=conversations_on]",d).is(":checked"):undefined,scrollToTop:c,pagination:Z});return{pagination:Z,filter:a}};var X=function(e,d,b,f,g,c){var Z=O(e,d,b,f,g,null);var a=Z.filter;if(c){a.lastFilters={filters:a.getSelectedFilters(A(".toolbar-filter-overlay",e))}}return Z};var M=function(b,Z,a){return function(c){var d=A(".subscription-list-header .last-activity .arrow .vb-icon",D),e="vb-icon-triangle-down-wide",f="vb-icon-triangle-up-wide";if(b.isFilterSelected("mostactive")){d.addClass(e).removeClass(f)}else{d.addClass(f).removeClass(e)}A(Z,b.getOption("context")).html(vBulletin.phrase.get(a,c.total))}};var U=function(b,Z,d){var a=Z.id,c=(Y==A(b).data("url-path"));if(typeof T[a]=="undefined"){T[a]=A(".conversation-toolbar-wrapper",Z).data("allow-history")=="1"}if(d=="#subscriptionsTab"){if(!J){subscriptionValues=X(D,undefined,T[a],true,false,c,M(J));J=subscriptionValues.filter}J.applyFilters(false,false,false,true)}else{if(d=="#subscribersTab"){if(!R){subscriberValues=X(D,undefined,T[a],true,false,c,M(R));R=subscriberValues.filter}R.applyFilters(false,false,false,true)}}};vBulletin.tabify.call(P,{tabHistory:tabHistory,getTabIndexByHash:function(Z){Z=Z||Y;return F.filter('li:has(a[href*="#'+Z+'"])').first().index()},allowHistory:allowTabHistory,tabParamAsQueryString:false,hash:P.find(".js-module-top-anchor").attr("id"),tabOptions:{beforeActivate:function(Z,a){if(J){J.hideFilterOverlay()}},create:function(Z,a){U(a.tab,a.panel,a.panel.selector)},activate:function(Z,a){U(a.newTab,a.newPanel,a.newPanel.selector)}}});if(tabHistory.isEnabled()){var G=tabHistory.getState(),C=vBulletin.parseQueryString(location.search,["_"]),W=Object.keys(C).length;if(W==0&&(!G||A.isEmptyObject(G.data))){var E=location.pathname.match(/\/(subscriptions|subscribers)\/?$/),V=(E&&E[1])||$defaultTabAnchor.data("url-path"),N={from:"tabs",tab:V};tabHistory.setDefaultState(N,document.title,location.href)}}P.off("click",".js-subscription__follow").on("click",".js-subscription__follow",actionSubscribeButton);A(".subscriptionsContainer").off("mouseenter mouseleave",".js-subscription__follow").on("mouseenter",".js-subscription__follow",function(){var Z=A(this);if(!Z.hasClass("subcribe_pending")&&Z.hasClass("subscribed_button")){Z.data("hover-timer",setTimeout(function(){Z.toggleClass("subscribed_button unsubscribe_button").toggleClass("b-button--special b-button--secondary").find(".js-button__text-primary").text(vBulletin.phrase.get("following_remove"))},100))}}).on("mouseleave",".js-subscription__follow",function(){var Z=A(this);clearTimeout(Z.data("hoverTimer"));if(!Z.hasClass("subcribe_pending")&&Z.hasClass("unsubscribe_button")){Z.toggleClass("subscribed_button unsubscribe_button").toggleClass("b-button--special b-button--secondary").find(".js-button__text-primary").text(vBulletin.phrase.get("following"))}});A(document).off("click",".subscription-list-header .last-activity .arrow").on("click",".subscription-list-header .last-activity .arrow",function(){var a=A(".vb-icon",this).hasClass("vb-icon-triangle-down-wide")?"leastactive":"mostactive",Z=A(this).closest(".tab");if(Z.attr("id")=="subscriptionsTab"){J.updatePageNumber(1);delete J.lastFilters}else{R.updatePageNumber(1);delete R.lastFilters}Z.find(".conversation-toolbar-wrapper .toolbar-filter-overlay .filter-options input[name=filter_sort][value="+a+"]").prop("checked",false).click()});A(document).off("click",".subscription-list-header .subscription-name .arrow").on("click",".subscription-list-header .subscription-name .arrow",function(){var a=A(".vb-icon",this),b=a.hasClass("vb-icon-triangle-up-wide")?true:false,Z=A(this).closest(".subscription-list-container").find(".subscription-list");$listitems=Z.hasClass("js-subscribers-list")?Z.find(".subscription-item .subscription-name .author"):Z.find(".subscription-item .subscription-name a");$listitems.sort(function(d,c){if(b){return A(c).text().toUpperCase().localeCompare(A(d).text().toUpperCase())}else{return A(d).text().toUpperCase().localeCompare(A(c).text().toUpperCase())}});A.each($listitems,function(c,d){Z.append(A(d).closest(".subscription-item"))});if(b){a.removeClass("vb-icon-triangle-up-wide").addClass("vb-icon-triangle-down-wide")}else{a.removeClass("vb-icon-triangle-down-wide").addClass("vb-icon-triangle-up-wide")}})})})(jQuery);actionSubscribeButton=function(){var A=$(this),E=parseInt(A.attr("data-follow-id")),D=A.attr("data-type");if((D=="follow_members"||D=="follow_contents")&&E){var C="";if(A.hasClass("add")){C="add"}else{if(A.hasClass("delete")){C="delete"}}var B=vBulletin.getAjaxBaseurl()+"/profile/follow-button?do="+C+"&follower="+E+"&type="+D;$.ajax({url:B,type:"POST",dataType:"json",success:function(F){if(F==true||F=="1"){if(C=="delete"){if(A.attr("data-canusefriends")){A.addClass("add subscribe_button b-button b-button--secondary").removeClass("delete subscribed_button unsubscribe_button b-button--special").find(".js-button__text-primary").text(vBulletin.phrase.get("follow"))}else{A.remove()}}else{A.addClass("delete subscribed_button b-button b-button--special").removeClass("add subscribe_button b-button--secondary").find(".js-button__text-primary").text(vBulletin.phrase.get("following"))}}else{if(F.errors){console.log(F.errors);openAlertDialog({title:vBulletin.phrase.get("following"),message:vBulletin.phrase.get("unable_to_contact_server_please_try_again"),iconType:"error"})}else{if(F==2){A.addClass("subscribe_pending secondary").removeClass("b-button--special").prop("disabled",true).find(".js-button__text-primary").text(vBulletin.phrase.get("following_pending"))}}}},error:function(){openAlertDialog({title:vBulletin.phrase.get("following"),message:vBulletin.phrase.get("unable_to_contact_server_please_try_again"),iconType:"error"})}})}};