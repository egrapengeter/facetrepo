<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
  'LBL_ACTIVITY_CREATE' => 'Μηνύματα για Δημιουργία',
  'LBL_ACTIVITY_LINK' => 'Μηνύματα για Σύνδεση',
  'LBL_ACTIVITY_POST' => 'Μηνύματα για Θέση',
  'LBL_ACTIVITY_UNLINK' => 'Μηνύματα για Αποσύνδεση',
  'LBL_ACTIVITY_UPDATE' => 'Μηνύματα για Ενημέρωση',
  'LBL_API_FILTERS_SUBPANEL_TITLE' => 'Φίλτρα',
  'LBL_ASSIGNED_TO_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή',
  'LBL_ASSIGNED_TO_ME' => 'Ανατεθειμένα Μου',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
  'LBL_CLOSED_WON' => 'Έκλεισε Κερδισμένο',
  'LBL_CLOSING_THIS_MONTH' => 'Κλείνοντας αυτό τον Μήνα',
  'LBL_CLOSING_THIS_QUARTER' => 'Κλείνοντας αυτό το Τρίμηνο',
  'LBL_CREATED' => 'Δημιουργήθηκε Από',
  'LBL_CREATED_BY_ME' => 'Δημιουργήθηκε από Εμένα',
  'LBL_CREATED_ID' => 'Δημιουργήθηκε Από Ταυτότητα',
  'LBL_CREATED_USER' => 'Δημιουργήθηκε από Χειριστή',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DELETED' => 'Διαγράφηκε',
  'LBL_DESCRIPTION' => 'Περιγραφή',
  'LBL_EDIT_BUTTON' => 'Επεξεργασία',
  'LBL_EXPIRING_TASKS' => 'Ληγμένες Εργασίες Μου',
  'LBL_FAVORITES' => 'Αγαπημένα Μου:',
  'LBL_FILTER_DEFINITION' => 'Ορισμός Φίλτρου',
  'LBL_FILTER_NEW_NAME' => 'Εισαγωγή νέου ονόματος φίλτρου',
  'LBL_FILTER_TEMPLATE' => 'Ορισμός Φίλτρου Ad-hoc',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Φίλτρων',
  'LBL_HOMEPAGE_TITLE' => 'Φίλτρα Μου',
  'LBL_ID' => 'Ταυτότητα',
  'LBL_LISTVIEW_FILTER_ALL' => 'Όλα {0}',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Φίλτρων',
  'LBL_LIST_NAME' => 'Όνομα',
  'LBL_MODIFIED' => 'Τροποποιήθηκε Από',
  'LBL_MODIFIED_ID' => 'Τροποποιήθηκε Από Ταυτότητα',
  'LBL_MODIFIED_NAME' => 'Τροποποιήθηκε Από Όνομα',
  'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από Χειριστή',
  'LBL_MODULE_NAME' => 'Φίλτρα',
  'LBL_MODULE_TITLE' => 'Φίλτρα',
  'LBL_NAME' => 'Όνομα',
  'LBL_NEGLECTED_BUGS' => 'Παραμελημένα Σφάλματα',
  'LBL_NEGLECTED_CASES' => 'Παραμελημένες Υποθέσεις',
  'LBL_NEW_FORM_TITLE' => 'Νέα Φίλτρα',
  'LBL_NEW_LEADS' => 'Νέοι Δυνητικοί Πελάτες',
  'LBL_NEW_RECORDS' => 'Πρόσφατα Δημιουργημένα',
  'LBL_OPEN_CASES' => 'Επείγουσες Ανοιχτές Υποθέσεις',
  'LBL_OPERATOR_AFTER' => 'μετά',
  'LBL_OPERATOR_BEFORE' => 'πριν',
  'LBL_OPERATOR_BETWEEN' => 'είναι μεταξύ',
  'LBL_OPERATOR_CONTAINS' => 'είναι κάποιο από',
  'LBL_OPERATOR_EQUALS' => 'είναι ίσο με',
  'LBL_OPERATOR_GREATER_THAN' => 'είναι μεγαλύτερο από',
  'LBL_OPERATOR_GREATER_THAN_OR_EQUALS' => 'είναι μεγαλύτερο από ή ίσο με',
  'LBL_OPERATOR_IS' => 'είναι',
  'LBL_OPERATOR_IS_NOT' => 'δεν είναι',
  'LBL_OPERATOR_LAST_30_DAYS' => 'τελευταίες 30 ημέρες',
  'LBL_OPERATOR_LAST_7_DAYS' => 'τελευταίες 7 ημέρες',
  'LBL_OPERATOR_LAST_MONTH' => 'τελευταίο μήνα',
  'LBL_OPERATOR_LAST_YEAR' => 'τελευταίο έτος',
  'LBL_OPERATOR_LESS_THAN' => 'είναι λιγότερο από',
  'LBL_OPERATOR_LESS_THAN_OR_EQUALS' => 'είναι λιγότερο από ή ίσο με',
  'LBL_OPERATOR_MATCHES' => 'ταιριάζει ακριβώς',
  'LBL_OPERATOR_NEXT_30_DAYS' => 'επόμενες 30 ημέρες',
  'LBL_OPERATOR_NEXT_7_DAYS' => 'επόμενες 7 ημέρες',
  'LBL_OPERATOR_NEXT_MONTH' => 'επόμενο μήνα',
  'LBL_OPERATOR_NEXT_YEAR' => 'επόμενο έτος',
  'LBL_OPERATOR_NOT_CONTAINS' => 'δεν είναι κάποιο από',
  'LBL_OPERATOR_NOT_EQUALS' => 'δεν είναι ίσο με',
  'LBL_OPERATOR_STARTS_WITH' => 'ξεκινά με',
  'LBL_OPERATOR_THIS_MONTH' => 'αυτό το μήνα',
  'LBL_OPERATOR_THIS_YEAR' => 'αυτό το έτος',
  'LBL_RECENTLY_VIEWED' => 'Πρόσφατη Προβολή',
  'LBL_REMOVE' => 'Αφαίρεση',
  'LBL_SALES_TEAM_ASSIGNED_LEADS' => 'Δυνητικοί Πελάτες Ανατεθειμένοι στην Ομάδα των Πωλήσεων Μου',
  'LBL_SALES_TEAM_ASSIGNED_OPPORTUNITIES' => 'Ευκαιρίες Ανατεθειμένες στην Ομάδα των Πωλήσεων Μου',
  'LBL_SALES_TEAM_COMPLETED_TASKS' => 'Ολοκληρωμένες Εργασίες της Ομάδας των Πωλήσεων Μου',
  'LBL_SALES_TEAM_UPCOMING_TASKS' => 'Επερχόμενες Εργασίες της Ομάδας των Πωλήσεων Μου',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Φίλτρων',
  'LBL_TEAM' => 'Ομάδες',
  'LBL_TEAMS' => 'Ομάδες',
  'LBL_TEAM_ASSIGNED_LEADS' => 'Δυνητικοί Πελάτες Ανατεθειμένοι στην Ομάδα Μου',
  'LBL_TEAM_ASSIGNED_OPPORTUNITIES' => 'Ανατεθειμένα στην Ομάδα Μου',
  'LBL_TEAM_ID' => 'Ταυτότητα Ομάδας',
  'LBL_UPCOMING_TASKS' => 'Επερχόμενες Εργασίες Μου',
  'LBL_URGENT_OPEN_BUGS' => 'Επείγον Ανοιχτά Σφάλματα',
  'LNK_IMPORT_API_FILTERS' => 'Εισαγωγή Φίλτρων',
  'LNK_LIST' => 'Προβολή Φίλτρων',
  'LNK_NEW_RECORD' => 'Δημιουργία Φίλτρων',
);
