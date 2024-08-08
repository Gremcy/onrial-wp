<?php

namespace FlexibleShippingDhlExpressProVendor\WPDesk\License\Page;

use FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\LicenseActivation;
use FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\LicenseDeactivation;
use FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\Nothing;
/**
 * Action factory.
 *
 * @package WPDesk\License\Page\License
 */
class LicensePageActions
{
    /**
     * Creates action object according to given param
     *
     * @param string $action .
     * @param bool   $add_settings_error .
     *
     * @return Action
     */
    public function create_action($action, $add_settings_error = \true)
    {
        if ('activate' === $action) {
            return new \FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\LicenseActivation($add_settings_error);
        }
        if ('deactivate' === $action) {
            return new \FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\LicenseDeactivation($add_settings_error);
        }
        return new \FlexibleShippingDhlExpressProVendor\WPDesk\License\Page\License\Action\Nothing();
    }
}
