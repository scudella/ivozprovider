@brand
@invoiceTemplates

Feature: Invoice templates admin page
  As a main operator
  I want to be able to access invoice templates admin page
  emulating brand operator
  In order to check and manage them

Background:
  Given I go to the admin page
  And I send valid admin credentials
  Then I am logged in
  Given I click on brand emulation button
  And I emulate the brand at position "1"
  And I click on "InvoiceTemplates" CTA
  Then I am on "InvoiceTemplates" list

Scenario: I can save invoice templates
  Given I can see at least one row
  And I click on "InvoiceTemplates" first elements edit button
  And I click on save button
  Then I can see confirmation dialog
  Given I click on close dialog button
  Then I am on "InvoiceTemplates" list

Scenario: I see new invoice template admin page
  Given I click on add button
  And I click on close button
  Then I am on "InvoiceTemplates" list

Scenario: I can click on delete invoice template button
  Given I can see at least one row
  And I click on "InvoiceTemplates" first elements delete button
  Then I can see confirmation dialog
  Given I click on close dialog button
  Then I am on "InvoiceTemplates" list
