<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/zadanie/index.php');
    }

    // tests

    public function add(AcceptanceTester $i)
    {
        $i->click('#create');
        $i->fillField('#name','testname');
        $i->fillField('#howmuch','1001222');
        $i->click('#sub');
        $i->wait(1);
        $i->see('testname');
    }
    public function edit(AcceptanceTester $i)
    {
        $i->click('#postup');
        $i->fillField('#date','2022-12-12');
        $i->fillField('#amount','100');
        $i->selectOption('#prod', '3');
        $i->click('#sub');
        $i->wait(1);
        $i->click('#arr');
        $i->see('testname');
    }

 
   
}
