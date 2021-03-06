<?php
/**
 * Xcaptcha extension module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         xcaptcha
 * @since           2.6.0
 * @author          Laurent JEN (Aka DuGris)
 */
require_once __DIR__ . '/preloads/autoloader.php';

$modversion['version'] = 1.00;
$modversion['module_status'] = 'alpha';
$modversion['release_date'] = '2019/02/10';
$modversion['name'] = _MI_XCAPTCHA_NAME;
$modversion['description'] = _MI_XCAPTCHA_DESC;
$modversion['author'] = 'Xoops Core Development Team';
$modversion['nickname'] = 'Laurent JEN (aka DuGris)';
$modversion['credits'] = 'The XOOPS Project';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['official'] = 1;
$modversion['help'] = 'page=help';
$modversion['image'] = 'images/xcaptcha_logo.png';
$modversion['dirname'] = basename(__DIR__);
//about
$modversion['module_website_url'] = 'dugris.xoofoo.org';
$modversion['module_website_name'] = 'XooFoo.org - Laurent JEN';
$modversion['min_php'] = '7.1.0';
$modversion['min_xoops'] = '2.6.0';
// paypal
$modversion['paypal'] = [];
$modversion['paypal']['business'] = 'xoopsfoundation@gmail.com';
$modversion['paypal']['item_name'] = _MI_XCAPTCHA_DESC;
$modversion['paypal']['amount'] = 0;
$modversion['paypal']['currency_code'] = 'USD';

// Admin menu
$modversion['system_menu'] = 1;

// Manage extension
$modversion['extension'] = 1;
$modversion['extension_module'][] = 'system';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Scripts to run upon installation or update
$modversion['onInstall'] = '';
