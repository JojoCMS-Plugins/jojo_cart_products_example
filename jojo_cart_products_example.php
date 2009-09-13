<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Michael Holt <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_jojo_cart_products_example extends JOJO_Plugin
{
    function getProductDetails($code)
    {
        $data = array('id'             => 1,
                      'name'           => 'Test product',
                      'description'    => 'This is a test product',
                      'image'          => '',
                      'price'          => 100,
                      'currency'       => 'USD',
                      'code'           => 'test',
                      'quantity'       => 1,
                      'quantity_fixed' => false,
                      );
        return $data;
    }
}
