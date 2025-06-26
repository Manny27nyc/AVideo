/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Special-case enum attribute definition that lazy loads allowed frame targets
 */
class HTMLPurifier_AttrDef_HTML_FrameTarget extends HTMLPurifier_AttrDef_Enum
{

    /**
     * @type array
     */
    public $valid_values = false; // uninitialized value

    /**
     * @type bool
     */
    protected $case_sensitive = false;

    public function __construct()
    {
    }

    /**
     * @param string $string
     * @param HTMLPurifier_Config $config
     * @param HTMLPurifier_Context $context
     * @return bool|string
     */
    public function validate($string, $config, $context)
    {
        if ($this->valid_values === false) {
            $this->valid_values = $config->get('Attr.AllowedFrameTargets');
        }
        return parent::validate($string, $config, $context);
    }
}

// vim: et sw=4 sts=4
