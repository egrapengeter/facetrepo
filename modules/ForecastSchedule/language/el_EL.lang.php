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
  'ERR_FORECAST_AMOUNT' => 'Η Δέσμευση του ποσού είναι υποχρεωτική και πρέπει να είναι ένας αριθμός.',
  'LBL_COMMIT_HEADER' => 'Δέσμευση Πρόβλεψης',
  'LBL_COMMIT_MESSAGE' => 'Θέλετε να δεσμεύσετε τα ποσά αυτά;',
  'LBL_COMMIT_NOTE' => 'Εισάγετε τα ποσά που θα θέλατε να δεσμευτούν για την επιλεγμένη Χρονική Περίοδο:',
  'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_CURRENCY' => 'Νόμισμα',
  'LBL_CURRENCY_RATE' => 'Ισοτιμία Νομίσματος',
  'LBL_DATE_COMMITTED' => 'Ημερομηνία Δέσμευσης',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Εισαγωγής',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DELETED' => 'Διαγράφηκε',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Ευκαιρίες Πρόβλεψης',
  'LBL_DV_FORECAST_PERIOD' => 'Χρονική Περιόδος Πρόβλεψης',
  'LBL_DV_FORECAST_ROLLUP' => 'Συνάθροιση Πρόβλεψης',
  'LBL_DV_HEADER' => 'Προβλέψεις: Φύλλο Εργασίας',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Τελευταίο Ποσό Δέσμευσης :',
  'LBL_DV_LAST_COMMIT_DATE' => 'Τελευταία Ημερομηνία Δέσμευσης:',
  'LBL_DV_MY_FORECASTS' => 'Προβλέψεις Μου',
  'LBL_DV_MY_TEAM' => 'Προβλέψεις Ομάδας μου',
  'LBL_DV_TIMEPERIOD' => 'Χρονική Περίοδος:',
  'LBL_DV_TIMEPERIODS' => 'Χρονικές Περίοδοι:',
  'LBL_DV_TIMPERIOD_DATES' => 'Χρονικό Διάστημα:',
  'LBL_EDIT_LAYOUT' => 'Επεξεργασία Διάταξης',
  'LBL_EXPECTED_AMOUNT' => 'Αναμενόμενο Ποσό',
  'LBL_EXPECTED_BEST_CASE' => 'Αναμενόμενη Καλύτερη Υπόθεση',
  'LBL_EXPECTED_LIKELY_CASE' => 'Αναμενόμενη Πιθανότερη Υπόθεση',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Αναμενόμενες Ευκαιρίες',
  'LBL_EXPECTED_WORST_CASE' => 'Αναμενόμενη Χειρότερη Υπόθεση',
  'LBL_FC_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_FC_USER' => 'Προγραμματισμός Για:',
  'LBL_FDR_ADJ_AMOUNT' => 'Προσαρμοσμένο Ποσό',
  'LBL_FDR_COMMIT' => 'Δεσμευθέν Ποσό',
  'LBL_FDR_DATE_COMMIT' => 'Ημερομηνία Δέσμευσης',
  'LBL_FDR_OPPORTUNITIES' => 'Ευκαιρίες στην πρόβλεψη:',
  'LBL_FDR_USER_NAME' => 'Άμεση Αναφορά',
  'LBL_FDR_WEIGH' => 'Σταθμισμένο Ποσό Ευκαιριών:',
  'LBL_FORECAST_HISTORY' => 'Προβλέψεις: Ιστορικό',
  'LBL_FORECAST_HISTORY_TITLE' => 'Προβλέψεις: Ιστορικό',
  'LBL_FORECAST_ID' => 'Ταυτότητα',
  'LBL_FORECAST_OPP_COMMIT' => 'Πιθανότερη Υπόθεση',
  'LBL_FORECAST_OPP_COUNT' => 'Ευκαιρίες',
  'LBL_FORECAST_OPP_WEIGH' => 'Σταθμισμένο Ποσό',
  'LBL_FORECAST_TIME_ID' => 'Ταυτότητα Χρονικής Περίοδου',
  'LBL_FORECAST_TYPE' => 'Τύπος Πρόβλεψης',
  'LBL_FORECAST_USER' => 'Χρήστης',
  'LBL_FS_CASCADE' => 'Αλληλένδετη;',
  'LBL_FS_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_FS_DATE_ENTERED' => 'Ημερομηνία Εισαγωγής',
  'LBL_FS_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_FS_DELETED' => 'Διαγράφηκε',
  'LBL_FS_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_FS_FORECAST_FOR' => 'Προγραμματισμός Για:',
  'LBL_FS_FORECAST_START_DATE' => 'Ημερομηνία Έναρξης Πρόβλεψης',
  'LBL_FS_MODULE_NAME' => 'Προγραμματισμός Πρόβλεψης',
  'LBL_FS_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_FS_STATUS' => 'Κατάσταση',
  'LBL_FS_TIMEPERIOD' => 'Χρονική Περίοδος',
  'LBL_FS_TIMEPERIOD_ID' => 'Ταυτότητα Χρονικής Περίοδου',
  'LBL_FS_USER_ID' => 'Ταυτότητα Χρήστη',
  'LBL_INCLUDE_EXPECTED' => 'Συμπεριλαμβάνει Αναμενόμενο',
  'LBL_LIST_FORM_TITLE' => 'Δεσμευθέν Προβλέψεις',
  'LBL_LV_COMMIT' => 'Δεσμευμένο Ποσό',
  'LBL_LV_COMMIT_DATE' => 'Δεσμευμένη Ημερομηνία',
  'LBL_LV_OPPORTUNITIES' => 'Ευκαιρίες',
  'LBL_LV_TIMPERIOD' => 'Χρονική περίοδος',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_LV_TYPE' => 'Τύπος Πρόβλεψης',
  'LBL_LV_WEIGH' => 'Σταθμισμένο Ποσό',
  'LBL_MODULE_NAME' => 'Προβλέψεις',
  'LBL_MODULE_NAME_SINGULAR' => 'Πρόβλεψη',
  'LBL_MODULE_TITLE' => 'Προβλέψεις',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Καμία Ενεργή χρονική περίοδος για την Πρόβλεψη.',
  'LBL_OW_ACCOUNTNAME' => 'Λογαριασμός',
  'LBL_OW_DESCRIPTION' => 'Περιγραφή',
  'LBL_OW_MODULE_TITLE' => 'Ευκαιρία Φύλλου Εργασίας',
  'LBL_OW_NEXT_STEP' => 'Επόμενο Βήμα',
  'LBL_OW_OPPORTUNITIES' => 'Ευκαιρία',
  'LBL_OW_PROBABILITY' => 'Πιθανότητα',
  'LBL_OW_REVENUE' => 'Ποσό',
  'LBL_OW_TYPE' => 'Τύπος:',
  'LBL_OW_WEIGHTED' => 'Σταθμισμένο Ποσό',
  'LBL_QC_COMMIT_BUTTON' => 'Δέσμευση',
  'LBL_QC_COMMIT_VALUE' => 'Δέσμευση Ποσού:',
  'LBL_QC_DIRECT_FORECAST' => 'Άμεση Πρόβλεψη Μου:',
  'LBL_QC_HEADER_DELIM' => 'Προς',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Τελευταίο Ποσό Δέσμευσης:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Τελευταία Ημερομηνία Δέσμευσης:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Αρίθμηση Ευκαιρίας:',
  'LBL_QC_ROLLUP_FORECAST' => 'Πρόβλεψη Γκρουπ Μου:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Συνάθροιση Ποσού Δέσμευσης:',
  'LBL_QC_TIME_PERIOD' => 'Χρονική Περίοδος:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Προβλέψεις Μου',
  'LBL_QC_WEIGHT_VALUE' => 'Σταθμισμένο Ποσό:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Φύλλο Εργασίας',
  'LBL_REPORTS_TO_USER_NAME' => 'Αναφέρεται Σε',
  'LBL_RESET_CHECK' => 'Όλα τα στοιχεία φύλλων εργασίας για το επιλεγμένο χρονικό διάστημα και τον συνδεμένο χρήστη θα αφαιρεθούν. Συνέχεια;',
  'LBL_RESET_WOKSHEET' => 'Επαναφορά Φύλλου Εργασίας',
  'LBL_SAVE_WOKSHEET' => 'Αποθήκευση Φύλλου Εργασίας',
  'LBL_SEARCH' => 'Επιλογή',
  'LBL_SEARCH_LABEL' => 'Επιλογή',
  'LBL_SVFS_CASCADE' => 'Αλληλένδετες σε Αναφορές;',
  'LBL_SVFS_FORECASTDATE' => 'Ημερομηνία Έναρξης Προγραμματισμού',
  'LBL_SVFS_HEADER' => 'Προγραμματισμός Πρόβλεψης',
  'LBL_SVFS_STATUS' => 'Κατάσταση',
  'LBL_SVFS_USER' => 'Για',
  'LBL_TIMEPERIOD_NAME' => 'Χρονική Περίοδος',
  'LBL_USER_NAME' => 'Όνομα Χρήστη',
  'LB_FS_KEY' => 'Ταυτότητα',
  'LNK_FORECAST_LIST' => 'Προβολή Ιστορικού Προβλέψεων',
  'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
  'LNK_NEW_TIMEPERIOD' => 'Δημιουργία Χρονικής Περιόδου',
  'LNK_QUOTA' => 'Ποσοστώσεις',
  'LNK_TIMEPERIOD_LIST' => 'Προβολή Χρονικών Περιόδων',
  'LNK_UPD_FORECAST' => 'Πρόβλεψη Φύλλου Εργασίας',
);

