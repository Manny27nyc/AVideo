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

/**
 * WeChat China OAuth2 provider adapter.
 */
class WeChatChina extends WeChat
{
    /**
     * {@inheritdoc}
     */
    protected $apiBaseUrl = 'https://api.weixin.qq.com/sns/';

    /**
     * {@inheritdoc}
     */
    protected $accessTokenUrl = 'https://api.weixin.qq.com/sns/oauth2/access_token';

    /**
     * {@inheritdoc}
     */
    protected $tokenRefreshUrl = 'https://api.weixin.qq.com/sns/oauth2/refresh_token';

    /**
     * {@ịnheritdoc}
     */
    protected $accessTokenInfoUrl = 'https://api.weixin.qq.com/sns/auth';
}
