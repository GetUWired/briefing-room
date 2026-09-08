<?php

namespace BTN\BriefingRoom\Helpers;

use Mo_SAML_Login_Widget;

class MiniOrangeSAML
{
    public static function loginForm()
    {
        if(class_exists('Mo_SAML_Login_Widget')) {
            ob_start();
            (new Mo_SAML_Login_Widget)->loginForm();
            return ob_get_clean();
        }
    }
}
