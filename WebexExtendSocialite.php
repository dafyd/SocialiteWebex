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


/*
https://webexapis.com/v1/authorize?client_id=C02854b6b2195d1ccd19f38a5ba69a2f43fa922d0ae8f7d77d97f8fee79c6808f&response_type=code&redirect_uri=http%3A%2F%2Flocalhost%3A8080%2Fauthorize&scope=spark%3Akms%20spark%3Apeople_read&state=set_state_here
*/
