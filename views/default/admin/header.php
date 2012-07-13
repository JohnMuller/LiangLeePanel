<?php
/* LiangLeePanel
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeePanel
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File header.php
 */
 
$user = elgg_get_logged_in_user_entity()->username;
$admin_title = elgg_get_site_entity()->name . ' ' . elgg_echo('admin');

$view_site = elgg_view('output/url', array(
	'href' => elgg_get_site_url(),
	'text' => elgg_echo('admin:view_site'),
	'is_trusted' => true,
));
$logout = elgg_view('output/url', array(
	'href' => 'action/logout',
	'text' => elgg_echo('logout'),
	'is_trusted' => true,
));
if (elgg_is_admin_logged_in()) { 
$url = elgg_get_site_url();
?>
<?php
echo "<div id=\"wrapper\"> <div id=\"head\"> <div id=\"logo_user_details\"> <h1 id=\"logo\"><a href=\"#\"></a></h1> <div id=\"user_details\"> <ul id=\"user_details_menu\"> <li> <table width=\"200\" border=\"0\"> <tr> <td>".elgg_view_entity_icon(elgg_get_logged_in_user_entity(), 'tiny')."</td> <td>".elgg_echo('leepanel:welcome').elgg_get_logged_in_user_entity()->name."</td> </tr> </table> </li> <li> <ul id=\"user_access\"> <li class=\"LIANGLEECSS10054\">".$view_site."</li> <li class=\"LIANGLEECSS10055\">".$logout."</li> </ul> </li> </ul> <div id=\"server_details\"> <dl> <dt>".elgg_echo('lleepanel:server:time')."</dt> <dd>".LiangLeePanelServer_date("h:i:s d F Y")."</dd> </dl> <dl> <dt>".elgg_echo('leepanel:server:adr')."</dt> <dd>".LiangLeepanelServer_ip()."</dd> </dl> </div> <div id=\"search_wrapper\"> <fieldset> <table width=\"70\" border=\"0\"> <tr> <td width=\"97\">".elgg_view('search/search_box', array('class' => 'elgg-search-header'))."</td> </tr> </table> <label> </label> </fieldset> </div> </div> </div> <div id=\"menus_wrapper\"> <div id=\"main_menu\"> <ul> <li><a href=\"#\" class=\"LIANGLEECSS10057\"><span><span>".elgg_echo('leepanel:mc')."</span></span></a></li> <li><a href=\"".$url."admin/settings/advanced\"><span><span>".elgg_echo('leepanel:advance:settings')."</span></span></a></li> <li><a href=\"".$url."admin/settings/basic\"><span><span>".elgg_echo('leepanel:basic:settings')."</span></span></a></li> <li><a href=\"".$url."settings/statistics/".$user."\"><span><span>".elgg_echo('leepanel:m:account')."</span></span></a></li> <li><a href=\"".$url."admin/plugin_settings/logrotate\"><span><span>".elgg_echo('leepanel:log:rotate')."</span></span></a></li> <li class=\"LIANGLEECSS10055\"><a href=\"".$url."admin/dashboard\"><span><span>".elgg_echo('leepanel:dashboard:label')."</span></span></a></li> </ul> </div> <div id=\"sec_menu\"> <ul> <li><a href=\"".$url."settings/user/".$user."\" class=\"LIANGLEECSS10058\">".elgg_echo('leepanel:pwd:change')."</a></li> <li><a href=\"".$url."admin/statistics/server\" class=\"LIANGLEECSS10059\">".elgg_echo('leepanel:sitestat')."</a></li> <li><a href=\"".$url."admin/appearance/menu_items\" class=\"LIANGLEECSS10060\">".elgg_echo('leepanel:menuitems')."</a></li> <li><a href=\"".$url."admin/users/online\" class=\"LIANGLEECSS10061\">".elgg_echo('leepanel:on:users')."</a></li><li><a href=\"".$url."admin/appearance/default_widgets\" class=\"LIANGLEECSS10063\">".elgg_echo('leepanel:dashboard:widgets')."</a></li><li><a href=\"".$url."messages/inbox/".$user."\" class=\"LIANGLEECSS10064\">".elgg_echo('leepanel:ibox')."</a></li> \n"; 
echo "    <li><a href=\"".$url."admin/appearance/profile_fields\" class=\"LIANGLEECSS10063\">".elgg_echo('leepanel:profilefield')."</a></li>\n"; 
echo "    <li> <span class=\"LIANGLEECSS10067\"><span><span><a href=\"#\" class=\"LIANGLEECSS10065\"></a></span></span></span><a class=\"LIANGLEECSS10066\" href=\"".$url."admin/plugin_settings/garbagecollector\">".elgg_echo('leepanel:gurbcollect')."</a></li> </ul> \n"; 
echo "</div>\n"; 
}
?>