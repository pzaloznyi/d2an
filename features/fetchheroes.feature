Feature: asd dota2:heroes:fetch
  In order to fetch heroes from http://www.dota2.com

Scenario: Fetch heroes
  Given I am in a project directory
  And I have a folder named 'bin'
  When I run 'app/console dota2:heroes:fetch AnyHero'
  Then I should get 'Hello AnyHero!'