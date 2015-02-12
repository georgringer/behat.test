# features/list.feature
Feature: List
  In order to know if news list is available, at least 2 news items need to be available

  Scenario: Root page should contain news items
    Given I am on "/"
    Then I should see "Pellentesque"
    And I should see "Ut eu consectetur diam"

  Scenario: Link to detail page should lead to a detail view
    Given I am on "/"
    And I click "h3 a"
    Then I should be on "/index.php?id=2&tx_news_pi1%5Bnews%5D=2&tx_news_pi1%5Bcontroller%5D=News&tx_news_pi1%5Baction%5D=detail&cHash=8472dde5b0577bd8bb2d259fba6bf960"
    And I should see "Nam at viverra neque, vel mattis ligula"
