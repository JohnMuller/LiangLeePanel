<?php
/* LiangLeePanel
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeePanel
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File footer.php
 */
if (elgg_is_admin_logged_in()) {  
$admin_title = elgg_get_site_entity()->name;
echo "<span class=\"LIANGLEE42FOOTER\">".elgg_echo('leepanel:footer:links:1')."<a href=\"";
echo  elgg_get_site_url();
echo "admin\">\n"; 
echo "".$admin_title."</a>,".elgg_echo('leepanel:footer:links:2')."<a href=\"http://community.elgg.org/profile/arsalanlee\"> ".elgg_echo('leepanel:stamp')."</a></span>\n"; 
}
?>