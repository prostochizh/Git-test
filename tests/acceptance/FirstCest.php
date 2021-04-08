<?php

class FirstCest
{
    /**
     * @group 87987
     * @param \AcceptanceTester $I
     */
   public function second(\AcceptanceTester $I)
   {

       $I->wantTo( 'Open google webpage' );
       $I->amOnPage('google.com');
       $I->seeInCurrentUrl('google');
   }
}
