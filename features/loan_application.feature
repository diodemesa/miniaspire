Feature: Loan Application
    In order to make sure business owners can apply for loans
    As a business owner
    I need to be able to submit application

    Scenario: Viewing all loan applications
        When I am on loan application page
        Then I should see "123"  

    Scenario: Loan Application test
        When I am on loan application page
        Then I should see "Amount required"

    Scenario: Submit loan application
        When I follow "loan/submit"
        Then I should see "Loan application submitted."