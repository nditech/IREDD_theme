<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>

  <?php if ($is_front): ?>
        <style>
                .front #promoted .col-xs-6 {
                        width:75%;
                        display:inline-block;
                        float:none;
                        vertical-align:top;
                }
                @media (min-width:680px) {
                        .front #promoted .col-xs-6 {
                                width:36%;
                        }
                }
		@media (min-width:768px) {
			.col-sm-4 {
				width:33.33333333%;
				float:left;
			}
		}
        </style>
  <?php endif; ?>


  <?php if (theme_get_setting('responsive_respond','bootstrap_business')): global $base_path; global $base_root; ?>
  <!-- Media Queries support for IE6-8 -->  
  <!--[if lt IE 9]>
    <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php endif; ?>
  
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php if ($is_front): ?>
        <script>
                function insertAfter(referenceNode, newNode) {
                        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
                }
                var legislators = document.getElementById('views-exposed-form-legislators-page-1');
                var viewLegislators = document.getElementById('block-block-3');
		var bills = document.getElementById('views-exposed-form-bills-page-1');
		var viewBills = document.getElementById('block-block-4');
                
		insertAfter(legislators, viewLegislators);
		insertAfter(bills, viewBills);	
        </script>

  <?php endif; ?>

</body>
</html>
