<?php

namespace PS\Functions\Post_Types;

/**
 * Class Init
 * @package     PS\Functions\Post_Types
 * @since       1.0.0
 */
class Init {

    /**
     * Enable initialization
     * @return bool
     */
    public static function is_initialize() {
        return true;
    }

    /**
     * Init constructor.
     */
    public function __construct() {
        /*
         * Call child classes
         */
        new Advices();
        new Ambassador();
        new Coupons();
        new Instructors();
        new Letter();
        new Masters();
        new Page();
        new Partner();
        new Questionnaire();
    }

}