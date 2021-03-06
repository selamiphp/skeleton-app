<?php
declare(strict_types=1);

use Codeception\Util\HttpCode;
$I = new AcceptanceTester($scenario);


$I->wantTo('See home page loaded successfully');
$I->amOnPage('/tr');
$I->see('Ana Sayfa');

$I->wantTo('See home page loaded successfully for English');
$I->amOnPage('/');
$I->see('Home ');

$I->wantTo('Get JSON data loaded successfully');
$I->sendAjaxGetRequest('/tr/basvuru/bilgiler/3');
$I->seeResponseCodeIs(HttpCode::OK);
//$I->seeResponseIsJson();
$I->see('"t":"Post:basvuru-bilgiler-3"');


