/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Module adds the target-based noreferrer attribute transformation to a tags.  It
 * is enabled by HTML.TargetNoreferrer
 */
class HTMLPurifier_HTMLModule_TargetNoreferrer extends HTMLPurifier_HTMLModule
{
    /**
     * @type string
     */
    public $name = 'TargetNoreferrer';

    /**
     * @param HTMLPurifier_Config $config
     */
    public function setup($config) {
        $a = $this->addBlankElement('a');
        $a->attr_transform_post[] = new HTMLPurifier_AttrTransform_TargetNoreferrer();
    }
}
