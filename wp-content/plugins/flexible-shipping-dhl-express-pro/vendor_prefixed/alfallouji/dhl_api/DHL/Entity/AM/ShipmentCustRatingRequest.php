<?php

/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */
/**
 * File:        ShipmentCustRatingRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */
namespace FlexibleShippingDhlExpressProVendor\DHL\Entity\AM;

use FlexibleShippingDhlExpressProVendor\DHL\Entity\Base;
/**
 * ShipmentCustRatingRequest Request model for DHL API
 */
class ShipmentCustRatingRequest extends \FlexibleShippingDhlExpressProVendor\DHL\Entity\Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = \false;
    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentCustRatingRequest';
    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentCustRatingRequest.xsd';
    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array('Billing' => array('type' => 'Billing', 'required' => \false, 'subobject' => \true), 'Shipper' => array('type' => 'Shipper', 'required' => \false, 'subobject' => \true), 'Consignee' => array('type' => 'Consignee', 'required' => \false, 'subobject' => \true), 'ShipmentDetails' => array('type' => 'ShipmentDetails', 'required' => \false, 'subobject' => \true), 'SpecialService' => array('type' => 'SpecialService', 'required' => \false, 'subobject' => \true));
}
