<?php 
use Step\Acceptance\CRMOperatorSteps as OperatorTest;  

$I = new OperatorTest($scenario);
/*
$I->wantTo('Переходим на страницу аутентификации и  заполняем форму как менеджер');
$I->amOnPage('/site/login');
$I->fillLoginFormManager();
$I->submitLogin();

$I->wantTo('Переходим на страницу создания пользователя');
$I->amOnPage('/users/create');
$I->see('Create User Record');

$I->wantTo('Переходим на страницу списка пользователей');
$I->amOnPage('/users/index');
$I->see('Forbidden');

$I->wantTo('Выполняем разлогин');
$I->amOnPage('/');
$I->click('выйти');
$I->see('войти');
*/