<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_nieuws_populair
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="populair-nieuws">
  <div class="populair-nieuws-title" style="background-color: <?PHP echo $color; ?>">
    <i class="icon-fire"></i> <?PHP echo $title; ?>
  </div>
  <div class="populair-nieuws-content">
		<ul class="<?php echo $moduleclass_sfx; ?>">
		<?php foreach ($list as $item) : ?>
			<li itemscope itemtype="https://schema.org/Article">
				<a href="<?php echo $item->link; ?>" itemprop="url">
					<span itemprop="name">
						<?php echo $item->title; ?>
					</span>
					
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
  </div>
</div>
