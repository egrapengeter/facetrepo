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
  'ERR_DELETE_RECORD' => '고객을 삭제하시려면 정확한 자료 고유번호를 입력하셔야합니다.',
  'LBL_ACCEPT_LINK' => '링크 수락',
  'LBL_ACCEPT_STATUS' => '상태 수락',
  'LBL_ACCOUNT_NAME' => '거래처',
  'LBL_ACTIVITIES_REPORTS' => '활동 보고서',
  'LBL_ADD_BUTTON' => '추가하기',
  'LBL_ADD_INVITEE' => '초대자 추가하기',
  'LBL_ASSIGNED_TO_ID' => '담당자',
  'LBL_ASSIGNED_TO_NAME' => '담당자',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => '전화상담',
  'LBL_CALL_INFORMATION' => '기본정보',
  'LBL_CANCEL_CREATE_INVITEE' => '취소',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '반복되는 전체 기록을 삭제하시겠습니까?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처목록',
  'LBL_CONTACT_NAME' => '연락처',
  'LBL_CREATE_AND_ADD' => '생성 후 추가',
  'LBL_CREATE_CONTACT' => '연락처',
  'LBL_CREATE_INVITEE' => '초대자 새로 만들기',
  'LBL_CREATE_LEAD' => '관심고객',
  'LBL_CREATE_MODULE' => '통화일지',
  'LBL_DATE' => '시작일',
  'LBL_DATE_END' => '완료일',
  'LBL_DATE_END_ERROR' => '완료 날짜는 시작날짜 이후로만 설정가능합니다.',
  'LBL_DATE_TIME' => '시작 날짜/시간',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '전화상담',
  'LBL_DEL' => '삭제',
  'LBL_DESCRIPTION' => '설명',
  'LBL_DESCRIPTION_INFORMATION' => '설명',
  'LBL_DIRECTION' => '방향',
  'LBL_DURATION' => '기간',
  'LBL_DURATION_HOURS' => '시간',
  'LBL_DURATION_MINUTES' => '분',
  'LBL_EDIT_ALL_RECURRENCES' => '모든 반복일정 편집하기',
  'LBL_EMAIL' => '이메일',
  'LBL_EMAIL_REMINDER' => '이메일 알림',
  'LBL_EMAIL_REMINDER_SENT' => '이메일 알림 전송',
  'LBL_EMAIL_REMINDER_TIME' => '이메일 알림 시간',
  'LBL_EMPTY_SEARCH_RESULT' => '죄송합니다. 발견된 결과가 없습니다. 아래 신규 초대자를 만드십시오.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '담당자 ID',
  'LBL_EXPORT_CREATED_BY' => '생성자 ID',
  'LBL_EXPORT_DATE_START' => '시작 날짜/시간',
  'LBL_EXPORT_MODIFIED_USER_ID' => '수정자 ID',
  'LBL_EXPORT_PARENT_TYPE' => '모듈 관련',
  'LBL_EXPORT_REMINDER_TIME' => '알림 시간(분)',
  'LBL_FIRST_NAME' => '이름',
  'LBL_HISTORY_SUBPANEL_TITLE' => '메모',
  'LBL_HOURS_ABBREV' => '시',
  'LBL_HOURS_MINUTES' => '시/분',
  'LBL_INVITEE' => '초대자 목록',
  'LBL_LAST_NAME' => '성',
  'LBL_LEADS_SUBPANEL_TITLE' => '관심고객',
  'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
  'LBL_LIST_CLOSE' => '닫기',
  'LBL_LIST_CONTACT' => '연락처',
  'LBL_LIST_DATE' => '시작일',
  'LBL_LIST_DIRECTION' => '방향',
  'LBL_LIST_DURATION' => '기간',
  'LBL_LIST_FORM_TITLE' => '전화 상담 목록',
  'LBL_LIST_MY_CALLS' => '내 전화 상담',
  'LBL_LIST_RELATED_TO' => '연관된 정보',
  'LBL_LIST_RELATED_TO_ID' => '연관 ID',
  'LBL_LIST_SUBJECT' => '제목',
  'LBL_LIST_TIME' => '시작 시간',
  'LBL_LOG_CALL' => '전화 기록',
  'LBL_MEMBER_OF' => '다음의 구성원',
  'LBL_MINSS_ABBREV' => '분',
  'LBL_MODULE_NAME' => '전화상담',
  'LBL_MODULE_NAME_SINGULAR' => '전화상담',
  'LBL_MODULE_TITLE' => '전화 상담:홈',
  'LBL_NAME' => '고객명',
  'LBL_NEW_FORM_TITLE' => '신규 일정 추가하기',
  'LBL_NO_ACCESS' => '모듈 새로 만들기에 접속할 수 없습니다.',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => '상위 ID',
  'LBL_PHONE' => '전화번호:',
  'LBL_RECURRENCE' => '반복',
  'LBL_RECURRING_LIMIT_ERROR' => '반복되는 전화상담은 허용된 반복 제한을 최과하므로 예정될수 없습니다.',
  'LBL_RECURRING_SOURCE' => '출처 반복',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '{{{this}}}와 통화',
  'LBL_RELATED_TO' => '관련',
  'LBL_REMINDER' => '알림',
  'LBL_REMINDER_EMAIL' => '이메일',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => '모든 초대자에 이메일 보내기',
  'LBL_REMINDER_POPUP' => '팝업',
  'LBL_REMINDER_TIME' => '알림 시간',
  'LBL_REMINDER_TITLE' => '전화',
  'LBL_REMOVE' => '제거',
  'LBL_REMOVE_ALL_RECURRENCES' => '모든 반복일정 삭제',
  'LBL_REPEAT_COUNT' => '반복 횟수',
  'LBL_REPEAT_DOW' => 'On',
  'LBL_REPEAT_END' => '완료',
  'LBL_REPEAT_END_AFTER' => '후',
  'LBL_REPEAT_END_BY' => 'By',
  'LBL_REPEAT_INTERVAL' => '매',
  'LBL_REPEAT_OCCURRENCES' => '반복',
  'LBL_REPEAT_PARENT_ID' => '상위ID 반복',
  'LBL_REPEAT_TYPE' => '반복',
  'LBL_REPEAT_UNTIL' => '다음 기간까지 반복',
  'LBL_REVENUELINEITEMS' => '매출 품목',
  'LBL_SCHEDULING_FORM_TITLE' => '일정잡기',
  'LBL_SEARCH_BUTTON' => '검색',
  'LBL_SEARCH_FORM_TITLE' => '전화상담 검색',
  'LBL_SELECT_FROM_DROPDOWN' => '먼저 선택록에서 선택하십시오.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '저장후 초대하기',
  'LBL_SEND_BUTTON_TITLE' => '저장후 초대하기',
  'LBL_SEND_INVITES' => '초대하기',
  'LBL_STATUS' => '상태',
  'LBL_SUBJECT' => '제목',
  'LBL_SYNCED_RECURRING_MSG' => '이 전화는 Sugar와 일치화된 다른 시스템에서 발생했습니다. 변경하려면 다른 시스템안의 원래 전화페이지로 가십시요. 다른 시스템에서의 변경내용은 이 기록에 일치화가 가능합니다.',
  'LBL_TIME' => '시작 시간',
  'LBL_TIME_END' => '시간 완료',
  'LBL_USERS_SUBPANEL_TITLE' => '사용자',
  'LNK_CALL_LIST' => '전화상담 보기',
  'LNK_IMPORT_CALLS' => '전화상담내역 가져오기',
  'LNK_NEW_ACCOUNT' => '신규 거래처 추가하기',
  'LNK_NEW_APPOINTMENT' => '일정 추가하기',
  'LNK_NEW_CALL' => '통화일지',
  'LNK_NEW_MEETING' => '회의 일정잡기',
  'LNK_NEW_OPPORTUNITY' => '영업기회 추가하기',
  'LNK_SELECT_ACCOUNT' => '거래처 선택하기',
  'NOTICE_DURATION_TIME' => '기간은 0보다 커야합니다.',
  'NTC_REMOVE_INVITEE' => '전화상담으로부터 이 초대자를 삭제하시겠습니까?',
  'TPL_CALL_STATUS_CHANGED' => '{{status}}로 표시를 호출합니다',
);

