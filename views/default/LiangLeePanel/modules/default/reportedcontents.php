<?php
/* LiangLeePanel
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeePanel
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File reportedcontents.php
 */
if (elgg_is_admin_logged_in()) {
$list = elgg_list_entities(array(
	'types' => 'object',
	'subtypes' => 'reported_content',
	'limit' => $vars['entity']->num_display,
));
if (!$list) {
	$list = '<p class="mtm">' . elgg_echo('reportedcontent:none') . '</p>';
}

echo $list;
}

?>