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
  'ERR_DELETE_RECORD' => 'Перед удалением должен быть указан номер записи.',
  'LBL_ACCEPT_LINK' => 'Принять',
  'LBL_ACCEPT_STATUS' => 'Подтверждение',
  'LBL_ACCOUNT_NAME' => 'Контрагент',
  'LBL_ACTIVITIES_REPORTS' => 'Отчеты по мероприятиям',
  'LBL_ADD_BUTTON' => 'Добавить',
  'LBL_ADD_INVITEE' => 'Добавить приглашенных',
  'LBL_ASSIGNED_TO_ID' => 'Ответственный (-ая)',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Звонок:',
  'LBL_CALL_INFORMATION' => 'Описание звонка',
  'LBL_CANCEL_CREATE_INVITEE' => 'Отмена',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Вы действительно хотите удалить все повторяющиеся записи?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
  'LBL_CONTACT_NAME' => 'Контакт:',
  'LBL_CREATE_AND_ADD' => 'Создать и добавить',
  'LBL_CREATE_CONTACT' => 'Новый контакт',
  'LBL_CREATE_INVITEE' => 'создать приглашенного',
  'LBL_CREATE_LEAD' => 'Предварительный контакт',
  'LBL_CREATE_MODULE' => 'Назначить звонок',
  'LBL_DATE' => 'Дата:',
  'LBL_DATE_END' => 'Дата окончания',
  'LBL_DATE_END_ERROR' => 'Дата окончания должна выбираться из диапазона до даты начала',
  'LBL_DATE_TIME' => 'Дата и время:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Звонки',
  'LBL_DEL' => 'Удалить',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DESCRIPTION_INFORMATION' => 'Описание',
  'LBL_DIRECTION' => 'Сортировка:',
  'LBL_DURATION' => 'Продолжительность:',
  'LBL_DURATION_HOURS' => 'Продолжительность (час.):',
  'LBL_DURATION_MINUTES' => 'Продолжительность (мин.):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Править все повторения',
  'LBL_EMAIL' => 'E-mail-адрес',
  'LBL_EMAIL_REMINDER' => 'Email-напоминание',
  'LBL_EMAIL_REMINDER_SENT' => 'Email-напоминание отправлено',
  'LBL_EMAIL_REMINDER_TIME' => 'Время Email-напоминания',
  'LBL_EMPTY_SEARCH_RESULT' => 'Результатов нет. Добавьте приглашенного ниже.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный (ID)',
  'LBL_EXPORT_CREATED_BY' => 'Создано (ID)',
  'LBL_EXPORT_DATE_START' => 'Дата и время начала',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Изменено (ID)',
  'LBL_EXPORT_PARENT_TYPE' => 'Относится к модулю',
  'LBL_EXPORT_REMINDER_TIME' => 'Время напоминания (минут)',
  'LBL_FIRST_NAME' => 'Имя',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Заметки',
  'LBL_HOURS_ABBREV' => 'час.',
  'LBL_HOURS_MINUTES' => '(часов:минут)',
  'LBL_INVITEE' => 'Приглашенные',
  'LBL_LAST_NAME' => 'Фамилия',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_LIST_CLOSE' => 'Закрыть',
  'LBL_LIST_CONTACT' => 'Контакт',
  'LBL_LIST_DATE' => 'Дата начала',
  'LBL_LIST_DIRECTION' => 'Сортировка',
  'LBL_LIST_DURATION' => 'Продолжительность',
  'LBL_LIST_FORM_TITLE' => 'Список звонков',
  'LBL_LIST_MY_CALLS' => 'Мои звонки',
  'LBL_LIST_RELATED_TO' => 'Относится к',
  'LBL_LIST_RELATED_TO_ID' => 'Относится к ID',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_LIST_TIME' => 'Время начала',
  'LBL_LOG_CALL' => 'Журнал звонков',
  'LBL_MEMBER_OF' => 'Состоит в',
  'LBL_MINSS_ABBREV' => 'мин.',
  'LBL_MODULE_NAME' => 'Звонки',
  'LBL_MODULE_NAME_SINGULAR' => 'Звонок',
  'LBL_MODULE_TITLE' => 'Звонки - Главная',
  'LBL_NAME' => 'Имя',
  'LBL_NEW_FORM_TITLE' => 'Новое мероприятие',
  'LBL_NO_ACCESS' => 'У Вас нет доступа к созданию $module',
  'LBL_OUTLOOK_ID' => 'ID в Outlook',
  'LBL_PARENT_ID' => 'ID изначальной записи',
  'LBL_PHONE' => 'Тел.',
  'LBL_RECURRENCE' => 'Повторение',
  'LBL_RECURRING_LIMIT_ERROR' => 'Этот повторяющийся звонок не может быть запланирован, т.к. он превышает максимально разрешенное повторение $limit.',
  'LBL_RECURRING_SOURCE' => 'Источник повторений',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Звонок с {{{this}}}',
  'LBL_RELATED_TO' => 'Относится к:',
  'LBL_REMINDER' => 'Напомнить:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Отправить Email-сообщение всем приглашенным',
  'LBL_REMINDER_POPUP' => 'Всплывающее окно',
  'LBL_REMINDER_TIME' => 'Время напоминания',
  'LBL_REMINDER_TITLE' => 'Звонок:',
  'LBL_REMOVE' => 'удал.',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Удалить все повторения',
  'LBL_REPEAT_COUNT' => 'Число повторений',
  'LBL_REPEAT_DOW' => 'Индекс повторений',
  'LBL_REPEAT_END' => 'Дата окончания',
  'LBL_REPEAT_END_AFTER' => 'После',
  'LBL_REPEAT_END_BY' => 'Кем',
  'LBL_REPEAT_INTERVAL' => 'Интервал повторений',
  'LBL_REPEAT_OCCURRENCES' => 'потоврения',
  'LBL_REPEAT_PARENT_ID' => 'Родительский ID повторений',
  'LBL_REPEAT_TYPE' => 'Повторить тип',
  'LBL_REPEAT_UNTIL' => 'Повторять до',
  'LBL_REVENUELINEITEMS' => 'Позиции продаж',
  'LBL_SCHEDULING_FORM_TITLE' => 'Планирование',
  'LBL_SEARCH_BUTTON' => 'Поиск',
  'LBL_SEARCH_FORM_TITLE' => 'Поиск звонка',
  'LBL_SELECT_FROM_DROPDOWN' => 'Прежде всего выберите значение из списка "Относится к".',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Отправка приглашений',
  'LBL_SEND_BUTTON_TITLE' => 'Отправить приглашение [Alt+I]',
  'LBL_SEND_INVITES' => 'Отправить приглашения',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_SYNCED_RECURRING_MSG' => 'Этот звонок изначально был создан в другой системе и синхронизирован в Sugar. Внести изменения можно в изначальной записи звонка в первой системе. Внесенные изменения можно синзронизировать в данную запись.',
  'LBL_TIME' => 'Время:',
  'LBL_TIME_END' => 'Время окончания',
  'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
  'LNK_CALL_LIST' => 'Звонки',
  'LNK_IMPORT_CALLS' => 'Импорт звонков',
  'LNK_NEW_ACCOUNT' => 'Новый клиент',
  'LNK_NEW_APPOINTMENT' => 'Новое мероприятие',
  'LNK_NEW_CALL' => 'Новый звонок',
  'LNK_NEW_MEETING' => 'Запланировать встречу',
  'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
  'LNK_SELECT_ACCOUNT' => 'Выбор клиента',
  'NOTICE_DURATION_TIME' => 'Продолжительность разговора должна быть больше 0 минут',
  'NTC_REMOVE_INVITEE' => 'Вы действительно хотите удалить это приглашенное лицо из данного звонка?',
  'TPL_CALL_STATUS_CHANGED' => 'Звонок отмечен как {{status}}.',
);

