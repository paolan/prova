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
<h1>Il mio primo layout override</h1>

<ul class="latestnews<?php echo $moduleclass_sfx; ?>">

<?php foreach ($list as $item) :  ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
	</li>
<?php endforeach; ?>

</ul>