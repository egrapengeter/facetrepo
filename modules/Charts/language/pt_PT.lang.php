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
  'ERR_NO_OPPS' => 'Por favor crie algumas Oportunidades para ver o Gráfico de Oportunidades.',
  'LBL_ALL_OPPORTUNITIES' => 'Valor total de todas as oportunidades é',
  'LBL_CAMPAIGN_ROI_TITLE_DESC' => 'Mostra a resposta da campanha por retorno do investimento.',
  'LBL_CHART_ACTION' => 'Acção',
  'LBL_CHART_DCE_ACTIONS_MONTH' => 'Acções DCE por Tipo (Mês actual)',
  'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Fonte da Lead por Resultado',
  'LBL_CHART_MODULES_USED_DIRECT_REPORTS_30_DAYS' => 'Módulos Utilizados Pelos Meus Relatórios Directos (Últimos 30 Dias)',
  'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Os Módulos que Utilizei (Últimos 30 dias)',
  'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'O meu Pipeline por Etapa de Vendas',
  'LBL_CHART_OPPORTUNITIES_THIS_QUARTER' => 'Oportunidades este Trimestre',
  'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultados por Mês',
  'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline por Fonte da Lead',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline por Etapa de Vendas',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE_FUNNEL' => 'Pipeline por Funil de Etapa de Vendas',
  'LBL_CHART_TYPE' => 'Tipo de Gráfico',
  'LBL_CLOSE_DATE_END' => 'Data esperada de fecho - a:',
  'LBL_CLOSE_DATE_START' => 'Data esperada de fecho - De:',
  'LBL_CREATED_ON' => 'Executado pela última vez em:',
  'LBL_DATE_END' => 'Data Final:',
  'LBL_DATE_RANGE' => 'O intervalo de datas é',
  'LBL_DATE_RANGE_TO' => 'até',
  'LBL_DATE_START' => 'Data Inicial:',
  'LBL_EDIT' => 'Editar',
  'LBL_LEAD_SOURCES' => 'Origens de Leads:',
  'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Todas as oportunidades por origem de lead por resultado',
  'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Mostra os valores das oportunidades acumulados por fonte de lead seleccionada por resultado para utilizadores seleccionados. O resultado é baseado na fase da venda: Fechado Ganho, Fechado Perdido ou qualquer outro valor.',
  'LBL_LEAD_SOURCE_FORM_DESC' => 'Mostra os valores das oportunidades acumulados por origem de lead seleccionada por utilizadores seleccionados.',
  'LBL_LEAD_SOURCE_FORM_TITLE' => 'Todas as oportunidades por origem de lead',
  'LBL_LEAD_SOURCE_OTHER' => 'Outros',
  'LBL_MODULE_NAME' => 'Painel Gráfico',
  'LBL_MODULE_NAME_SINGULAR' => 'Painel Gráfico',
  'LBL_MODULE_TITLE' => 'Painel Gráfico: Ecrã Principal',
  'LBL_MONTH_BY_OUTCOME_DESC' => 'Mostra os valores das oportunidades acumulados por mês por resultado para utilizadores seleccionados quando a data de fecho esperada se encontra dentro do intervalo de datas. O resultado é baseado na fase da venda: Fechado Ganho, Fechado Perdido ou qualquer outro valor.',
  'LBL_MY_MODULES_USED_SIZE' => 'Contagem de Acesso',
  'LBL_NUMBER_OF_OPPS' => 'Número de Oportunidades',
  'LBL_OPPS_IN_LEAD_SOURCE' => 'oportunidades onde a origem de lead é',
  'LBL_OPPS_IN_STAGE' => 'onde a fase da venda é',
  'LBL_OPPS_OUTCOME' => 'onde o resultado é',
  'LBL_OPPS_WORTH' => 'valor das Oportunidades',
  'LBL_OPP_SIZE' => 'Tamanho da Oportunidade',
  'LBL_OPP_THOUSANDS' => 'K',
  'LBL_PIPELINE_FORM_TITLE_DESC' => 'Mostra o valor acumulado por fases de venda seleccionadas para as suas Oportunidades quando a data de fecho esperada se encontra dentro do intervalo de datas.',
  'LBL_REFRESH' => 'Actualizar',
  'LBL_ROLLOVER_DETAILS' => 'Passe com o rato por cima da barra para obter mais detalhes.',
  'LBL_ROLLOVER_WEDGE_DETAILS' => 'Passe com o rato por uma limite para obter mais detalhes.',
  'LBL_SALES_STAGES' => 'Fase da Venda:',
  'LBL_SALES_STAGE_FORM_DESC' => 'Mostra os valores das oportunidades acumulados por fases de venda seleccionadas para utilizadores seleccionados quando a data de fecho esperada se encontra dentro do intervalo de datas.',
  'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline por Fase da Venda',
  'LBL_TITLE' => 'Título:',
  'LBL_TOTAL_PIPELINE' => 'Total do Pipeline é',
  'LBL_USERS' => 'Utilizadores:',
  'LBL_YEAR' => 'Ano:',
  'LBL_YEAR_BY_OUTCOME' => 'Pipeline por mês e por Resultado',
  'LNK_NEW_ACCOUNT' => 'Nova Entidade',
  'LNK_NEW_CALL' => 'Nova Chamada Telefónica',
  'LNK_NEW_CASE' => 'Nova Ocorrência',
  'LNK_NEW_CONTACT' => 'Novo Contacto',
  'LNK_NEW_ISSUE' => 'Novo Bug',
  'LNK_NEW_LEAD' => 'Nova Lead',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_NEW_NOTE' => 'Nova Nota',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_NEW_QUOTE' => 'Nova Cotação',
  'LNK_NEW_TASK' => 'Nova Tarefa',
  'NTC_NO_LEGENDS' => 'Nada',
);

