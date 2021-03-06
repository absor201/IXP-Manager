<?php
/**
 * OSS Framework
 *
 * This file is part of the "OSS Framework" - a library of tools, utilities and
 * extensions to the Zend Framework V1.x used for PHP application development.
 *
 * Copyright (c) 2007 - 2012, Open Source Solutions Limited, Dublin, Ireland
 * All rights reserved.
 *
 * Open Source Solutions Limited is a company registered in Dublin,
 * Ireland with the Companies Registration Office (#438231). We
 * trade as Open Solutions with registered business name (#329120).
 *
 * Contact: Barry O'Donovan - info (at) opensolutions (dot) ie
 *          http://www.opensolutions.ie/
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * It is also available through the world-wide-web at this URL:
 *     http://www.opensolutions.ie/licenses/new-bsd
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@opensolutions.ie so we can send you a copy immediately.
 *
 * @category   OSS
 * @package    OSS_Smarty
 * @subpackage Functions
 * @copyright  Copyright (c) 2007 - 2012, Open Source Solutions Limited, Dublin, Ireland
 * @license    http://www.opensolutions.ie/licenses/new-bsd New BSD License
 * @link       http://www.opensolutions.ie/ Open Source Solutions Limited
 * @author     Barry O'Donovan <barry@opensolutions.ie>
 * @author     The Skilled Team of PHP Developers at Open Solutions <info@opensolutions.ie>
 */

/**
 * @category   OSS
 * @package    OSS_Smarty
 * @subpackage Functions
 * @copyright  Copyright (c) 2007 - 2012, Open Source Solutions Limited, Dublin, Ireland
 * @license    http://www.opensolutions.ie/licenses/new-bsd New BSD License
 */

    /**
     * Function to execute a model method with (optional) parameters
     *
     * NOTICE: Works only with Doctrine1
     *
     * @category   OSS
     * @package    OSS_Smarty
     * @subpackage Functions
     *
     * @param array $params (model, id, method, params)
     * @param Smarty $smarty A reference to the Smarty template object
     * @return mixed
     */
    function smarty_function_modelOperation( $params, &$smarty )
    {
        //print "Doctrine::getTable('{$params['model']}')->find({$params['id']})->{$params['method']}({$params['params']});";

        $params['id'] = (int) $params['id'];

        if( $params['id'] <= 0 )
            return;

        if( !in_array( $_SESSION['Zend_Auth']['storage']['user']['type'], array( 'SUPERADMIN' ) ) )
            return;

        if( in_array( $params['method'], array( 'save', 'delete', '__construct', 'setUp', 'construct', 'deleteNode' ) ) )
            return;

        return Doctrine::getTable( $params['model'] )->find( $params['id'] )->$params['method']( $params['params'] );
    }
