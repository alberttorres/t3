<?php
/*
// "K2 Content" Module by JoomlaWorks for Joomla! 1.5.x - Version 2.1
// Copyright (c) 2006 - 2009 JoomlaWorks Ltd. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.joomlaworks.gr and http://k2.joomlaworks.gr
// Designed and developed by the JoomlaWorks team
// *** Last update: September 9th, 2009 ***
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>


<div id="k2BNRModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock <?php echo $params->get('moduleclass_sfx'); ?> featuredBG" style="background-image: url('<?php echo $item->image; ?>');">
  <?php if($item->image): ?>
  <div class="featuredImageBG">
  <?php else: ?>
  <div class="featuredNoImage">
  <?php endif ?>
	<?php if($params->get('bnrItemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('bnrItemPreText'); ?></p>
	<?php endif; ?>
	
      <!-- Plugins: BeforeDisplay -->
      <?php echo $item->event->BeforeDisplay; ?>
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      <?php echo $item->event->K2BeforeDisplay; ?>

      <?php if($params->get('bnrItemAuthorAvatar')): ?>
			<img class="moduleItemAuthorAvatar" src="<?php echo $item->authorAvatar; ?>" alt="<?php echo $item->author; ?>" />
      <?php endif; ?>
      


      <?php if($params->get('bnrItemAuthor')): ?>
      <?php echo K2HelperUtilities::writtenBy($item->authorGender); ?>

			<?php if(isset($item->authorLink)): ?>
			<a class="moduleItemAuthorLink" href="<?php echo $item->authorLink; ?>"><?php echo $item->author; ?></a>
			<?php else: ?>
			<?php echo $item->author; ?>
			<?php endif; ?>
			<?php endif; ?>
			      

      <div class="cptextgeneral">
            <h1 class="moduleItemTitle cptext1">
                  <?php echo $item->title; ?>
            </h1>
            <!-- <div class="moduleItemDateCreated cptext2">
                  <?php echo JHTML::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>
            </div> -->
            <div class="header-social-buttons hidden-xs">
              <?php 
                JPluginHelper::importPlugin('content');
                $share = plgContentBt_socialshare::socialButtons();
                echo $share['script']; // Required
                echo $share['buttons']; // Social button
                echo $share['recommend']; // Recommendation bar
                echo $share['comment']; // facebook comment box
              ?>
            </div>
      </div>


</div>
</div>