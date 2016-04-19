(function ($) {
Drupal.behaviors.bootstrap_business = {
attach: function(context, settings) {

$('.view-legislators.view-display-id-page_1 > .view-content').addClass('col-xs-6');
$('.view-legislators.view-display-id-page_1 > .attachment').addClass('col-xs-6');

$('.view-scorecards.view-display-id-page_1 > .view-content').addClass('col-xs-6');
$('.view-scorecards.view-display-id-page_1 > .attachment').addClass('col-xs-6');

$('.view-scorecards.view-display-id-page_2 > .view-content').addClass('col-xs-6');
$('.view-scorecards.view-display-id-page_2 > .attachment').addClass('col-xs-6');

$('.view-scorecards.view-display-id-page_3 > .view-content').addClass('col-xs-6');
$('.view-scorecards.view-display-id-page_3 > .attachment').addClass('col-xs-6');

$('.page-lawmakers .page-title').insertBefore('#promoted');
$('.page-lawmakers .view-display-id-page_1 > .view-header').insertBefore('.view-content.col-xs-6 .views-row-1');

$('.page-attendance .page-title').insertBefore('#block-views-comparison-scorecards-block');
$('.view-scorecards.view-display-id-page_1 > .view-header').insertBefore('.view-content.col-xs-6 .views-row-1');

$('.page-participation .page-title').insertBefore('#promoted');
$('.view-scorecards.view-display-id-page_2 > .view-header').insertBefore('.view-content.col-xs-6 .views-row-1');

$('.page-initiatives .page-title').insertBefore('#promoted');
$('.view-scorecards.view-display-id-page_3 > .view-header').insertBefore('.view-content.col-xs-6 .views-row-1');

$('.page-bills .page-title').insertBefore('#promoted');


/*Create unique URL for Quicktabs*/
function fixQuickTabs() {
        $('.quicktabs-tabs a').each(function(){
                var oldLink = $(this).attr('href');
                var newLink = oldLink.replace('#qt','#quicktabs');
                $(this).attr('href',newLink);
        });
}

$(window).load(fixQuickTabs);

$('.quicktabs-tabs a').each(function(){
  $(this).unbind('click');
  // Refresh page whenever the tab is clicked
  $(this).click(function(){
        location.href = $(this).attr('href');
  });
});




/*For responsive tables*/
$('.views-table').stacktable();




}
};

})(jQuery);
