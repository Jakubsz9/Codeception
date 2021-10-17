<?php

namespace acceptance;

use AcceptanceTester;

class SampleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->wait(5);
        $I->makeScreenshot();
    }
}
