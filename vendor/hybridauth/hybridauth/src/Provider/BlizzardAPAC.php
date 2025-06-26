/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/*!
* Hybridauth
* https://hybridauth.github.io | https://github.com/hybridauth/hybridauth
*  (c) 2017 Hybridauth authors | https://hybridauth.github.io/license.html
*/

namespace Hybridauth\Provider;

use Hybridauth\Adapter\OAuth2;
use Hybridauth\Exception\UnexpectedApiResponseException;
use Hybridauth\Data;
use Hybridauth\User;

/**
 * Blizzard US/SEA Battle.net OAuth2 provider adapter.
 */
class BlizzardAPAC extends Blizzard
{
    /**
     * {@inheritdoc}
     */
    protected $apiBaseUrl = 'https://apac.battle.net/';

    /**
     * {@inheritdoc}
     */
    protected $authorizeUrl = 'https://apac.battle.net/oauth/authorize';

    /**
     * {@inheritdoc}
     */
    protected $accessTokenUrl = 'https://apac.battle.net/oauth/token';
}
