<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that the home page works');
$I->amOnPage('/');
$I->see('Home');
