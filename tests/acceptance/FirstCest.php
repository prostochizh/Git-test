<?php


class FirstCest
{
    /**
     * @group 8798700
     * @param \AcceptanceTester $I
     */
   public function second(\AcceptanceTester $I)
   {
       $I->wantTo( 'Open google webpage' );
       $I->amOnPage('/');
       $I->waitForElementVisible("//*[@class = 'main-logo ']");
   }
}
