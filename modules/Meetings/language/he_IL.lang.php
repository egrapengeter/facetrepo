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
  'ERR_DELETE_RECORD' => 'למחיקת הרשומה יש לציין מספר רשומה',
  'LBL_ACCEPT_LINK' => 'קבל קישור',
  'LBL_ACCEPT_STATUS' => 'קבל סטאטוס',
  'LBL_ACCEPT_THIS' => 'לקבל',
  'LBL_ACCOUNT_NAME' => 'חשבון',
  'LBL_ACTIVITIES_REPORTS' => 'דוחות פעילים',
  'LBL_ADD_BUTTON' => 'הוסף',
  'LBL_ADD_INVITEE' => 'הוסף מוזמנים',
  'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
  'LBL_CANCEL_CREATE_INVITEE' => 'בטל',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'אתה בטוח שברצונך להסיר את כל הרשומות החוזרות',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
  'LBL_CONTACT_NAME' => 'איש קשר',
  'LBL_CREATED_BY' => 'נוצר על ידי',
  'LBL_CREATED_USER' => 'צור משתמש',
  'LBL_CREATE_AND_ADD' => 'צור והוסף',
  'LBL_CREATE_CONTACT' => 'כאיש קשר',
  'LBL_CREATE_INVITEE' => 'צוק מוזמן',
  'LBL_CREATE_LEAD' => 'כליד',
  'LBL_CREATE_MODULE' => 'תזמן פגישה',
  'LBL_CREATOR' => 'יוצר הפגישה',
  'LBL_DATE' => 'תאריך התחלה',
  'LBL_DATE_END' => 'מסתיים בתאריך',
  'LBL_DATE_END_ERROR' => 'תאריך הסיום לפני תאריך ההתחלה',
  'LBL_DATE_TIME' => 'תאריך ושעת התחלה',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'פגישות',
  'LBL_DEL' => 'מחק',
  'LBL_DESCRIPTION' => 'תיאור',
  'LBL_DESCRIPTION_INFORMATION' => 'תיאור המידע',
  'LBL_DIRECTION' => 'כיוון:',
  'LBL_DISPLAYED_URL' => 'הצג כתובת אינטרנט',
  'LBL_DURATION' => 'משך',
  'LBL_DURATION_HOURS' => 'משך בשעות',
  'LBL_DURATION_MINUTES' => 'משך בדקות',
  'LBL_EDIT_ALL_RECURRENCES' => 'ערוך כל החזרות',
  'LBL_EMAIL' => 'דואר אלקטרוני',
  'LBL_EMAIL_REMINDER' => 'תזכורת בדואר אלקטרוני',
  'LBL_EMAIL_REMINDER_SENT' => 'תזכורת דואר נשלחה',
  'LBL_EMAIL_REMINDER_TIME' => 'זמן תזכורת דואר אלקטרוני',
  'LBL_EMPTY_SEARCH_RESULT' => 'מצטער לא נמאו תוצאות,אנא צור את המוזמן הרשום מטה',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'הוקצה למשתמש ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'הוקצה למשתמש ששמו',
  'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',
  'LBL_EXPORT_DATE_END' => 'תאריך ושעת סיום',
  'LBL_EXPORT_DATE_START' => 'תאריך וזמן התחלה',
  'LBL_EXPORT_DISPLAYED_URL' => 'כתובת אינטרנט שתוצג',
  'LBL_EXPORT_EXTERNAL_ID' => 'זהות חיצונית',
  'LBL_EXPORT_HOST_URL' => 'כתובת אינטרנט מארח',
  'LBL_EXPORT_JOIN_URL' => 'הצטרף לכתובת אינטרנט',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'שונה על ידי ID',
  'LBL_EXPORT_PARENT_ID' => 'זהות הורה:',
  'LBL_EXPORT_PARENT_TYPE' => 'קשור בסוג',
  'LBL_EXPORT_REMINDER_TIME' => 'זמן תזכורת (בדקות)',
  'LBL_EXTERNALID' => 'זהות אפליקציה חיצונית',
  'LBL_EXTNOSTART_HEADER' => 'שגיאה:לא מצליח לאתחל הפגישה',
  'LBL_EXTNOSTART_MAIN' => 'אתה לא יכול לאתחל פגישה זו בגלל שאינך מנהל המערכת או בעליה של הפגישה',
  'LBL_EXTNOT_GO_BACK' => 'לך אחורה לרשומה הקודמת',
  'LBL_EXTNOT_HEADER' => 'שגיאה:לא מוזמן',
  'LBL_EXTNOT_MAIN' => 'אינך יכול להצטרף לפגישה זו מאחר ואינך מוזמן',
  'LBL_EXTNOT_RECORD_LINK' => 'צפה בפגישה',
  'LBL_FIRST_NAME' => 'שם פרטי',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'פתקים',
  'LBL_HOST_EXT_MEETING' => 'התחל פגישה',
  'LBL_HOST_URL' => 'כתובת אינטרנט של המארח',
  'LBL_HOURS_ABBREV' => 'ש&#39;',
  'LBL_HOURS_MINS' => 'שעות/דקות',
  'LBL_INVITEE' => 'מוזמנים',
  'LBL_JOIN_EXT_MEETING' => 'הצטרף פגישה',
  'LBL_LAST_NAME' => 'שם משפחה',
  'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
  'LBL_LIST_CLOSE' => 'סגור',
  'LBL_LIST_CONTACT' => 'איש קשר',
  'LBL_LIST_DATE' => 'תאריך התחלה',
  'LBL_LIST_DATE_MODIFIED' => 'שונה בתאריך',
  'LBL_LIST_DIRECTION' => 'הנחיות',
  'LBL_LIST_DUE_DATE' => 'תאריך סיום',
  'LBL_LIST_FORM_TITLE' => 'רשימת פגישות',
  'LBL_LIST_JOIN_MEETING' => 'הצטרף לפגישה',
  'LBL_LIST_MY_MEETINGS' => 'הפגישות שלי',
  'LBL_LIST_RELATED_TO' => 'קשור אל',
  'LBL_LIST_STATUS' => 'סטאטוס:',
  'LBL_LIST_SUBJECT' => 'נושא',
  'LBL_LIST_TIME' => 'שעת התחלה',
  'LBL_LOCATION' => 'מיקום',
  'LBL_MEETING' => 'פגישה:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'פגישה נסגרה בהצלחה',
  'LBL_MEETING_INFORMATION' => 'סקירת פגישות',
  'LBL_MINSS_ABBREV' => 'דקות',
  'LBL_MODIFIED_BY' => 'שונה על ידי',
  'LBL_MODIFIED_USER' => 'שנה משתמש',
  'LBL_MODULE_NAME' => 'פגישות',
  'LBL_MODULE_NAME_SINGULAR' => 'פגישה',
  'LBL_MODULE_TITLE' => 'פגישות: דף ראשי',
  'LBL_NAME' => 'שם',
  'LBL_NEW_FORM_TITLE' => 'צור פגישה',
  'LBL_NO_ACCESS' => 'אין לך גישה ליצירת $module',
  'LBL_OUTLOOK_ID' => 'זהות אווטלוק',
  'LBL_PARENT_ID' => 'זהות הורה:',
  'LBL_PARENT_TYPE' => 'סוג הורה',
  'LBL_PASSWORD' => 'סיסמא לפגישה',
  'LBL_PHONE' => 'טלפון במשרד',
  'LBL_RECURRENCE' => 'חזרה',
  'LBL_RECURRING_LIMIT_ERROR' => 'לא ניתן לקבוע שיחה חוזרת כיוון שהוא חורג ממספר החזרות המותר שהוא $limit.',
  'LBL_RECURRING_SOURCE' => 'התרחשות שנית של המקור',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'פגישה עם {{{this}}}',
  'LBL_RELATED_TO' => 'קשור אל:',
  'LBL_REMINDER' => 'תיזכורת',
  'LBL_REMINDER_EMAIL' => 'דואר אלקטרוני',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'שלח מייל לכל המוזמנים',
  'LBL_REMINDER_POPUP' => 'הודעה קופצת',
  'LBL_REMINDER_TIME' => 'התראה מראש',
  'LBL_REMINDER_TITLE' => 'פגשיה',
  'LBL_REMOVE' => 'הערה',
  'LBL_REMOVE_ALL_RECURRENCES' => 'מחק את כל החזרות',
  'LBL_REPEAT_COUNT' => 'מונה חזרות',
  'LBL_REPEAT_DOW' => 'Repeat Dow',
  'LBL_REPEAT_END' => 'סיום',
  'LBL_REPEAT_END_AFTER' => 'אחרי',
  'LBL_REPEAT_END_BY' => 'על ידי',
  'LBL_REPEAT_INTERVAL' => 'מרווחי זמן בין החזרות',
  'LBL_REPEAT_OCCURRENCES' => 'חזרות',
  'LBL_REPEAT_PARENT_ID' => 'זהות הורה של החזרה',
  'LBL_REPEAT_TYPE' => 'סוג חזרה',
  'LBL_REPEAT_UNTIL' => 'חזור עד',
  'LBL_REVENUELINEITEMS' => 'שורות פרטי הכנסה',
  'LBL_SCHEDULING_FORM_TITLE' => 'תזמן',
  'LBL_SEARCH_BUTTON' => 'חיפוש',
  'LBL_SEARCH_FORM_TITLE' => 'חפש פגישה',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'שלח הזמנה',
  'LBL_SEND_BUTTON_TITLE' => 'שלח הזמנה',
  'LBL_SEND_INVITES' => 'שלח למוזמנים',
  'LBL_SEQUENCE' => 'רצף עדכון פגישה',
  'LBL_STATUS' => 'סטאטוס:',
  'LBL_SUBJECT' => 'נושא',
  'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to Sugar. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
  'LBL_TIME' => 'שעת התחלה',
  'LBL_TYPE' => 'סוג פגישה',
  'LBL_URL' => 'התחל/הצטרף לפגישה',
  'LBL_USERS_SUBPANEL_TITLE' => 'משתמשים',
  'LNK_IMPORT_MEETINGS' => 'ייבוא פגישות',
  'LNK_MEETING_LIST' => 'צפייה בפגישות',
  'LNK_NEW_APPOINTMENT' => 'צור פגישה',
  'LNK_NEW_MEETING' => 'פגישה מתוזמנת',
  'NOTICE_DURATION_TIME' => 'משך זמן חייב להיות גדול מאפס',
  'NTC_REMOVE_INVITEE' => 'האם אתה בטוח שברצונך להסיר את המוזמן הזה מהפגישה',
);

