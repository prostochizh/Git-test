<?php

namespace Tests\Acceptance;

use Codeception\Example;
use Page\Search;

/**
 * Класс для тестирования поиска
 *
 */
class SearchCest 
{
    /**
     * Тест на проверку поиска легковых по типу кузова
     * 
     * @param Example $data
     * @dataProvider getDataForSearchCarsByBody
     */
    public function searchCarsByBodyType(\AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->waitForElementClickable(Search::$autoCarsLink);
        $I->click(Search::$autoCarsLink);
        $I->waitForElementClickable(Search::$optionalSearchLink);
        $I->click(Search::$optionalSearchLink);
        $I->waitForElementClickable(Search::$carBodyTypeField);
        $I->click(Search::$carBodyTypeField);
        $I->click(sprintf(Search::$carBodyType, $data['carBodyType']));
        $I->click(Search::$searchButton);
        $I->seeInCurrentUrl($data['url']);
    }

    protected function getDataForSearchCarsByBody()
    {
        $carBodyTypedata = [
            ['carBodyType' => 'sedan', 'url' => 'sds'],
            ['carBodyType' => 'station-wagon', 'url' => 'statsdsdsion-wagon'],
           
        ];

        return [$carBodyTypedata[array_rand($carBodyTypedata)]];
    }
}
