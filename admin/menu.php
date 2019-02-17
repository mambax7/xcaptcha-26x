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
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         xcaptcha
 * @since           2.6.0
 * @author          Laurent JEN (Aka DuGris)
 * @version         $Id$
 */
$cpt = 1;
$adminmenu[$cpt]['title'] = _MI_XCAPTCHA_INDEX;
$adminmenu[$cpt]['link'] = 'admin/index.php';
$adminmenu[$cpt]['icon'] = 'home.png';

static $xcaptchaHandler;
if (!isset($xcaptchaHandler)) {
    $xcaptchaHandler = new \XoopsModules\Xcaptcha\Captcha();
}

$xoops = \Xoops::getInstance();

foreach (array_keys($xcaptchaHandler->getPluginList()) as $key) {
    ++$cpt;
    $xoops->loadLanguage($key, 'xcaptcha');

    $adminmenu[$cpt]['title'] = constant('_MI_XCAPTCHA_ADMENU_' . mb_strtoupper($key));
    $adminmenu[$cpt]['link'] = 'admin/index.php?type=' . $key;
    $adminmenu[$cpt]['icon'] = 'administration.png';
}

++$cpt;
$adminmenu[$cpt]['title'] = _MI_XCAPTCHA_ABOUT;
$adminmenu[$cpt]['link'] = 'admin/about.php';
$adminmenu[$cpt]['icon'] = 'about.png';
