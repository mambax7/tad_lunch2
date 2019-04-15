<?php
/**
 * Tad Lunch2 module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright    XOOPS Project (https://xoops.org)
 * @license      http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package      Tad Lunch2
 * @since        2.5.0
 * @author       Tad
 * @version      $Id $
 **/
require_once dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';
require __DIR__ . '/header.php';

// require_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->getVar('dirname') . '/class/admin.php';

$adminObject = \Xmf\Module\Admin::getInstance();

//$index_admin->addConfigLabel(_AM_XDIR_CONFIG_CHECK);
//$index_admin->addLineConfigLabel(_AM_XDIR_CONFIG_PHP, $xoopsModule->getInfo('min_php'), 'php');
//$index_admin->addLineConfigLabel(_AM_XDIR_CONFIG_XOOPS, $xoopsModule->getInfo('min_xoops'), 'xoops');

$adminObject->displayNavigation(basename(__FILE__));
$adminObject->displayIndex();

require __DIR__ . '/footer.php';
xoops_cp_footer();
