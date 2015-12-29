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
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除产品。',
  'LBL_ACCOUNT_ID' => '帐户 ID',
  'LBL_ACCOUNT_NAME' => '账户名称：',
  'LBL_ASSET_NUMBER' => '资产帐号:',
  'LBL_ASSIGNED_TO' => '负责人',
  'LBL_ASSIGNED_TO_ID' => '负责人ID',
  'LBL_ASSIGNED_TO_NAME' => '指派给:',
  'LBL_ASSIGNED_USER_ID' => '被指派的用户 ID',
  'LBL_ASSOCIATED_QUOTE' => '关联报价单',
  'LBL_BOOK_VALUE' => '账面价值',
  'LBL_BOOK_VALUE_DATE' => '账面价值日期:',
  'LBL_BOOK_VALUE_USDOLLAR' => '账面价值(美元):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => '计算收入线项目金额',
  'LBL_CAMPAIGN_ID' => '市场活动ID',
  'LBL_CAMPAIGN_PRODUCT' => '活动产品',
  'LBL_CATEGORY' => '类别:',
  'LBL_CATEGORY_NAME' => '类别名称:',
  'LBL_COMMIT_STAGE' => '提交阶段',
  'LBL_COMMIT_STAGE_FORECAST' => '销售预测',
  'LBL_CONTACT' => '联系人：',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_ID' => '联系人ID',
  'LBL_CONTACT_NAME' => '联系人名称',
  'LBL_CONTRACTS' => '合同',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => '合同',
  'LBL_CONVERT_INVALID_RLI' => '您选择的收入线项目中的一个或多个不能转换成一个报价：',
  'LBL_CONVERT_INVALID_RLI_ALREADYQUOTED_PLURAL' => '一个或多个选中的收入线项目已经报价。',
  'LBL_CONVERT_INVALID_RLI_PRODUCT' => '收入线项目需要产品目录中的一件产品来生成报价单',
  'LBL_CONVERT_INVALID_RLI_PRODUCT_PLURAL' => '一个或多个收入项目在生成报价之前就需要从产品目录中选取产品。',
  'LBL_CONVERT_TO_QUOTE' => '生成报价',
  'LBL_CONVERT_TO_QUOTE_ERROR' => '错误',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => '将这一收入线项目转换为报价单时出错',
  'LBL_CONVERT_TO_QUOTE_INFO' => '请稍后',
  'LBL_CONVERT_TO_QUOTE_INFO_MESSAGE' => '从收入线项目生成报价',
  'LBL_COST_PRICE' => '成本:',
  'LBL_COST_USDOLLAR' => '成本(美元)',
  'LBL_CREATED_USER' => '创建人',
  'LBL_CURRENCY' => '货币:',
  'LBL_CURRENCY_ID' => '货币编号',
  'LBL_CURRENCY_NAME' => '货币名称',
  'LBL_CURRENCY_RATE' => '汇率',
  'LBL_CURRENCY_SYMBOL' => '货币符号',
  'LBL_CURRENCY_SYMBOL_NAME' => '货币符号名称',
  'LBL_DATE_CLOSED' => '预期截至日期:',
  'LBL_DATE_CLOSED_TIMESTAMP' => '预期关闭的日期时间戳',
  'LBL_DATE_PURCHASED' => '已购买:',
  'LBL_DATE_SUPPORT_EXPIRES' => '服务截止日期:',
  'LBL_DATE_SUPPORT_STARTS' => '服务开始日期:',
  'LBL_DEAL_TOT' => '折扣:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '收入线项目',
  'LBL_DESCRIPTION' => '描述',
  'LBL_DISCOUNT_AMOUNT' => '折扣数额',
  'LBL_DISCOUNT_AS_PERCENT' => '折扣率(%)',
  'LBL_DISCOUNT_PRICE' => '单价:',
  'LBL_DISCOUNT_PRICE_DATE' => '打折促销日:',
  'LBL_DISCOUNT_RATE' => '折扣率',
  'LBL_DISCOUNT_RATE_USDOLLAR' => '折扣率 (美元)',
  'LBL_DISCOUNT_TOTAL' => '总共折扣',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => '折扣（美元）',
  'LBL_DISCOUNT_USDOLLAR' => '单价（美元）',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
  'LBL_EDITLAYOUT' => '编辑布局',
  'LBL_EXPERT_ID' => '产品专家',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人',
  'LBL_EXPORT_CURRENCY_ID' => '货币编号',
  'LBL_EXT_PRICE' => '额外费用',
  'LBL_FORECAST' => '销售预测包括',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of individual line items of business which are included on an {{opportunities_singular_module}} record and tracked through the sales life cycle. The {{opportunities_singular_module}} record acts as a header for one or more {{module_name}} records. To create a {{module_name}}: 1. Provide values for the fields as desired. - Fields marked "Required" must be completed prior to saving. - Click "Show More" to expose additional fields if necessary. 2. Click "Save" to finalize the new record and return to the previous page. - Choose "Save and view" to open the new {{module_name}} in record view. - Choose "Save and create new" to immediately create another new {{module_name}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of individual line items of business which are included on an {{opportunities_singular_module}} record and tracked through the sales life cycle. The {{opportunities_singular_module}} record acts as a header for one or more {{module_name}} records. - Edit this record&#39;s fields by clicking an individual field or the Edit button. - View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View". - Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream". - Follow or favorite this record using the icons to the right of the record name. - Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of individual line items of business which are included on an {{opportunities_singular_module}} record and tracked through the sales life cycle. The {{opportunities_singular_module}} record acts as a header for one or more {{module_name}} records. This allows for greater granularity when working {{opportunities_module}} and {{forecasts_singular_module}}ing since each line item within an {{opportunities_singular_module}} can have it&#39;s own sales stage and probability as well as being included or excluded from a user&#39;s {{forecasts_singular_module}}ing {{worksheet_module}} individually. Each {{module_name}} may be related to a product from your organization&#39;s Product Catalog. Doing so will cause the product&#39;s values to automatically populate matching fields on the {{module_name}}.',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在用户',
  'LBL_LEAD_SOURCE' => '潜在客户来源',
  'LBL_LIST_ACCOUNT_NAME' => '账户名称',
  'LBL_LIST_COMMIT_STAGE' => '提交阶段',
  'LBL_LIST_CONTACT_NAME' => '联系人名称',
  'LBL_LIST_COST_PRICE' => '成本',
  'LBL_LIST_DATE_CLOSED' => '预期截至日期:',
  'LBL_LIST_DATE_PURCHASED' => '已购买:',
  'LBL_LIST_DISCOUNT_PRICE' => '价格:',
  'LBL_LIST_FORM_TITLE' => '收入线项目列表',
  'LBL_LIST_LBL_MFT_PART_NUM' => '制造商编号',
  'LBL_LIST_LIST_PRICE' => '列表',
  'LBL_LIST_MANUFACTURER' => '制造商',
  'LBL_LIST_NAME' => '收入线项目',
  'LBL_LIST_OPPORTUNITY_NAME' => '商业机会名称：',
  'LBL_LIST_PRICE' => '列表价格',
  'LBL_LIST_PROBABILITY' => '概率',
  'LBL_LIST_PRODUCT_TEMPLATE' => '产品模板',
  'LBL_LIST_QUANTITY' => '数量',
  'LBL_LIST_QUOTE_NAME' => '报价名称',
  'LBL_LIST_SALES_STAGE' => '销售阶段:',
  'LBL_LIST_STATUS' => '状态:',
  'LBL_LIST_SUPPORT_EXPIRES' => '有效期',
  'LBL_LIST_USDOLLAR' => '列表价格（美元)',
  'LBL_MANUFACTURER' => '制造商:',
  'LBL_MANUFACTURERS' => '制造商',
  'LBL_MANUFACTURER_NAME' => '制造商名称:',
  'LBL_MEMBER_OF' => '归属组织',
  'LBL_MFT_PART_NUM' => '制造商编号:',
  'LBL_MODIFIED_USER' => '更改人',
  'LBL_MODULE_NAME' => '收入线项目',
  'LBL_MODULE_NAME_SINGULAR' => '收入线项目',
  'LBL_MODULE_TITLE' => '收入线项目：首页',
  'LBL_NAME' => '发收入线项目',
  'LBL_NEW_FORM_TITLE' => '创建收入线项目',
  'LBL_NEXT_STEP' => '下一步',
  'LBL_NOTES_SUBPANEL_TITLE' => '备忘录',
  'LBL_NOT_QUOTED' => '未报价',
  'LBL_OPPORTUNITY' => '商业机会',
  'LBL_OPPORTUNITY_ID' => '商业机会编号',
  'LBL_PRICING_FACTOR' => '价格因素',
  'LBL_PRICING_FORMULA' => '定价公式:',
  'LBL_PROBABILITY' => '成交概率(%)：',
  'LBL_PRODUCT' => '产品:',
  'LBL_PRODUCT_CATEGORIES' => '产品类别',
  'LBL_PRODUCT_TEMPLATE' => '产品模板',
  'LBL_PRODUCT_TEMPLATES' => '产品模板',
  'LBL_PRODUCT_TEMPLATE_ID' => '产品模板编号:',
  'LBL_PRODUCT_TYPE' => '产品类型',
  'LBL_PRODUCT_TYPES' => '产品类型',
  'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
  'LBL_QUANTITY' => '数量:',
  'LBL_QUOTE' => '报价',
  'LBL_QUOTED' => '已报价',
  'LBL_QUOTES_SUBPANEL_TITLE' => '报价',
  'LBL_QUOTE_ID' => '报价单编号',
  'LBL_QUOTE_NAME' => '报价名称:',
  'LBL_RELATED_PRODUCTS' => '相关收入线项目',
  'LBL_RELATED_PRODUCTS_TITLE' => '收入产品',
  'LBL_RLI_SUBPANEL_TITLE' => '收入线项目',
  'LBL_SALES_STAGE' => '销售阶段:',
  'LBL_SALES_STATUS' => '收入线状态',
  'LBL_SEARCH_FORM_TITLE' => '查找收入线项目',
  'LBL_SELECT_DISCOUNT' => '折扣率(%)',
  'LBL_SERIAL_NUMBER' => '序列号:',
  'LBL_STATUS' => '状态',
  'LBL_SUPPORT_CONTACT' => '服务联系人:',
  'LBL_SUPPORT_DESCRIPTION' => '服务说明:',
  'LBL_SUPPORT_NAME' => '服务标题:',
  'LBL_SUPPORT_TERM' => '服务条款',
  'LBL_TAX_CLASS' => '赋税类别:',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => '折扣金额总和',
  'LBL_TYPE' => '类型:',
  'LBL_URL' => '产品网址:',
  'LBL_VENDOR_PART_NUM' => '供应商编号:',
  'LBL_WEBSITE' => '网站',
  'LBL_WEIGHT' => '重量:',
  'LNK_IMPORT_REVENUELINEITEMS' => '导入收入线项目',
  'LNK_NEW_REVENUELINEITEM' => '创建收入线项目',
  'LNK_REVENUELINEITEM_LIST' => '查看收入线项目',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录？',
  'NTC_REMOVE_CONFIRMATION' => '您确定要移除这个产品关联吗?',
  'SAVE_RLI_QUOTE_NOTICE' => '这一项目已经转换为报价。您的更改不会更新在相应报价。',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_1' => '被包含在一个或多个记录',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_2' => '它将被删除,您需要重新提交您的',
  'WARNING_DELETED_RECORD_RECOMMIT_1' => '这个记录是包含在',
  'WARNING_DELETED_RECORD_RECOMMIT_2' => '它将被删除,您需要重新提交您的',
  'WARNING_MERGE_RLIS_WITH_DIFFERENT_OPPORTUNITIES' => '您选择的一个或多个记录不能合并在一起,因为他们属于不同的机会',
);
