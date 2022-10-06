<?php

declare(strict_types=1);
namespace R3H6\Oauth2Server\Http\Firewall;

use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
 *
 * This file is part of the "OAuth2 Server" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020
 *
 ***/

/**
 * HttpsRule
 */
class HttpsRule implements RuleInterface
{
    private $https;

    public function __construct($https)
    {
        $this->https = (bool)$https;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        if ($this->https && !GeneralUtility::getIndpEnv('TYPO3_SSL')) {
            throw OAuthServerException::accessDenied('Requires TLS');
        }
    }
}
