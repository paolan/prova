<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

?>
<h1>Il mio primo template override</h1>

<ul class="latestnews<?php echo $moduleclass_sfx; ?>">

<?php foreach ($list as $item) :  ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
		<?php //echo JHtmlString::truncate(strip_tags($item->introtext), 53); ?>
		<?php echo JHtml::_('string.truncate', strip_tags($item->introtext), 53); ?>
	</li>
<?php endforeach; ?>

</ul>