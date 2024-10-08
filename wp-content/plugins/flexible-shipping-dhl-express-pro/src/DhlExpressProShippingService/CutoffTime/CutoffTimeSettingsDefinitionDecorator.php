<?php
/**
 * Decorator for cutoff time.
 *
 * @package WPDesk\FlexibleShippingDhlExpressPro\DhlExpressProShippingService\CutoffTime
 */

namespace WPDesk\FlexibleShippingDhlExpressPro\DhlExpressProShippingService\CutoffTime;

use FlexibleShippingDhlExpressProVendor\WPDesk\AbstractShipping\Settings\DefinitionModifier\SettingsDefinitionModifierAfter;
use FlexibleShippingDhlExpressProVendor\WPDesk\AbstractShipping\Settings\SettingsDefinition;
use WPDesk\FlexibleShippingDhlExpressPro\DhlExpressProShippingService\LeadTime\LeadTimeSettingsDefinitionDecorator;

/**
 * Can decorate settings for lead time field.
 */
class CutoffTimeSettingsDefinitionDecorator extends SettingsDefinitionModifierAfter {

	const OPTION_CUTOFF_TIME = 'cutoff_time';

	/**
	 * CutoffTimeSettingsDefinitionDecorator constructor.
	 *
	 * @param SettingsDefinition $settings_definition .
	 */
	public function __construct( SettingsDefinition $settings_definition ) {
		parent::__construct(
			$settings_definition,
			LeadTimeSettingsDefinitionDecorator::OPTION_LEAD_TIME,
			self::OPTION_CUTOFF_TIME,
			array(
				'title'       => __( 'Cutoff Time', 'flexible-shipping-dhl-express-pro' ),
				'type'        => 'select',
				'description' => __( 'Cutoff Time is used to define what time you stop preparing orders same day. Cutoff time is only used if your lead time is set to zero.', 'flexible-shipping-dhl-express-pro' ),
				'desc_tip'    => true,
				'options'     => array(
					''   => __( 'None', 'flexible-shipping-dhl-express-pro' ),
					'1'  => __( '1 AM', 'flexible-shipping-dhl-express-pro' ),
					'2'  => __( '2 AM', 'flexible-shipping-dhl-express-pro' ),
					'3'  => __( '3 AM', 'flexible-shipping-dhl-express-pro' ),
					'4'  => __( '4 AM', 'flexible-shipping-dhl-express-pro' ),
					'5'  => __( '5 AM', 'flexible-shipping-dhl-express-pro' ),
					'6'  => __( '6 AM', 'flexible-shipping-dhl-express-pro' ),
					'7'  => __( '7 AM', 'flexible-shipping-dhl-express-pro' ),
					'8'  => __( '8 AM', 'flexible-shipping-dhl-express-pro' ),
					'9'  => __( '9 AM', 'flexible-shipping-dhl-express-pro' ),
					'10' => __( '10 AM', 'flexible-shipping-dhl-express-pro' ),
					'11' => __( '11 AM', 'flexible-shipping-dhl-express-pro' ),
					'12' => __( '12 PM', 'flexible-shipping-dhl-express-pro' ),
					'13' => __( '1 PM', 'flexible-shipping-dhl-express-pro' ),
					'14' => __( '2 PM', 'flexible-shipping-dhl-express-pro' ),
					'15' => __( '3 PM', 'flexible-shipping-dhl-express-pro' ),
					'16' => __( '4 PM', 'flexible-shipping-dhl-express-pro' ),
					'17' => __( '5 PM', 'flexible-shipping-dhl-express-pro' ),
					'18' => __( '6 PM', 'flexible-shipping-dhl-express-pro' ),
					'19' => __( '7 PM', 'flexible-shipping-dhl-express-pro' ),
					'20' => __( '8 PM', 'flexible-shipping-dhl-express-pro' ),
					'21' => __( '9 PM', 'flexible-shipping-dhl-express-pro' ),
					'22' => __( '10 PM', 'flexible-shipping-dhl-express-pro' ),
					'23' => __( '11 PM', 'flexible-shipping-dhl-express-pro' ),
				),
			)
		);
	}

}
