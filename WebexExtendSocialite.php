<?php

namespace Dafyd\SocialiteWebex;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WebexExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('webex', __NAMESPACE__.'\Provider');
    }
}
