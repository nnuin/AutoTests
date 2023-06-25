<?php

namespace Tests\Acceptance;

use \Tests\Support\AcceptanceTester;

class BasicCest
{
    // test
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        
        $I->see('Подключение не защищено');
        $I->click('Дополнительные');
        $I->click('Перейти на сайт usa.yourketo.diet.local.qa-test-task.1ff.space (небезопасно)');
        $I->fillField('email', 'nikolaus.abbey@qa.1ff.space');
        $I->fillField('password', '123qwerty');
        $I->click('Sign in');
    }
}
