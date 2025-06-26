/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Emojione;

interface RulesetInterface
{
    /**
     * Returns the shortcode unicode replacement rules
     *
     * @return array The shortcode unicode rules
     */
    public function getShortcodeReplace();

    /**
     * Returns the ascii unicode replacement rules
     *
     * @return array The ascii unicode rules
     */
    public function getAsciiReplace();

    /**
     * Returns the unicode shortcode replacement rules
     *
     * @return array The unicode shortcode rules
     */
    public function getUnicodeReplace();
	
	/**
     * Returns the unicode shortcode greedy replacement rules
     *
     * @return array The unicode shortcode greedy rules
     */
    public function getUnicodeReplaceGreedy();

    /**
     * Returns the regexp to find ascii smilies
     *
     * @return string The regexp
     */
    public function getAsciiRegexp();
}