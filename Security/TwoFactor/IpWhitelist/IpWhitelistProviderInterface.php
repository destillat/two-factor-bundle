<?php

namespace Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist;

interface IpWhitelistProviderInterface
{
    /**
     * Return a list of whitelisted IP addresses, which don't need to perform two-factor authentication.
     *
     * @return string[]
     */
    public function getWhitelistedIps(): array;
}
