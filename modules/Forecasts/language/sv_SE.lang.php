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
  'ERR_FORECAST_AMOUNT' => 'Angivet belopp är ett obligatoriskt fält och måste vara ett nummer.',
  'LBL_ACTIONS' => 'Händelser',
  'LBL_AMOUNT' => 'Summa',
  'LBL_ASSIGNING_QUOTA' => 'Tilldelning budget',
  'LBL_ASSIGN_QUOTA_BUTTON' => 'Tilldela budget',
  'LBL_BASE_RATE' => 'Basräntan',
  'LBL_CAMPAIGN' => 'Kampanj',
  'LBL_CANCEL' => 'Avbryt',
  'LBL_CATEGORY' => 'Kategori',
  'LBL_CHANGES_BY' => 'Ändringar av {0}',
  'LBL_CHART_ADJUSTED' => '(Justerad)',
  'LBL_CHART_AMOUNT' => 'Summa',
  'LBL_CHART_FOOTER' => 'Prognos historik<br/>Kvot vs Prognos belopp vs Stängda affärsmöjligheters värde',
  'LBL_CHART_FORECAST_FOR' => 'för {0}',
  'LBL_CHART_INCLUDED' => 'Inkluderat',
  'LBL_CHART_NOT_INCLUDED' => 'Ej inkluderat',
  'LBL_CHART_OPTIONS' => 'Graf inställningar',
  'LBL_CHART_TITLE' => 'Kvot vs. Angivet vs. Faktiskt',
  'LBL_CHART_TYPE' => 'Typ',
  'LBL_CLOSED' => 'Stängd Vunnen',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{{{intro}}} {{{first}}}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{{{intro}}} {{{first}}}, {{{second}}}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{{{intro}}} {{{first}}}, {{{second}}}, and {{{third}}}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => 'bäst {{{direction}}} {{{from}}} till {{{to}}}',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => 'bäst stannade samma',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => 'troligen {{{direction}}} {{{from}}} till {{{to}}}',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => 'troligen stannade samma',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => 'Inställningsprognos',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => 'Uppdaterad prognos',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => 'värsta {{{direction}}} {{{from}}} till {{{to}}}',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => 'värsta stannade samma',
  'LBL_COMMITTED_MONTHS_AGO' => '{0} månader sedan på {1}',
  'LBL_COMMITTED_THIS_MONTH' => 'Denna månad på {0}',
  'LBL_COMMIT_AMOUNT' => 'Summan av Angivna värden.',
  'LBL_COMMIT_HEADER' => 'Ange prognos',
  'LBL_COMMIT_MESSAGE' => 'Vill du ange dessa belopp?',
  'LBL_COMMIT_NOTE' => 'Ange de belopp du vill ange för den valda tidsperioden:',
  'LBL_COMMIT_STAGE' => 'Commit fas',
  'LBL_COMMIT_TOOLTIP' => 'För att aktivera commit: Ändra ett värde i arbetsarket',
  'LBL_COPY' => 'Kopiera värden',
  'LBL_COPY_AMOUNT' => 'Totalsumma',
  'LBL_COPY_FROM' => 'Kopiera värde från:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Total viktad summa',
  'LBL_COST_PRICE' => 'Kostpris',
  'LBL_CREATED_BY' => 'Skapad av',
  'LBL_CUMULATIVE_TOTAL' => 'Ackumulerat totalt',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_ID' => 'Valuta ID',
  'LBL_CURRENCY_RATE' => 'Valutakursen',
  'LBL_DASHLET_FORECAST_CONFIG_LINK_TEXT' => 'Klicka här för att konfigurera Prognos modulen.',
  'LBL_DASHLET_FORECAST_NOT_SETUP' => 'Prognoser har inte konfigurerats och måste ställas in för att använda denna widget. Kontakta systemadministratören.',
  'LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN' => 'Prognoser har inte konfigurerats och måste sättas upp för att använda denna widget.',
  'LBL_DASHLET_MY_FORECAST' => 'Min Prognos',
  'LBL_DASHLET_MY_PIPELINE' => 'Min pipeline',
  'LBL_DASHLET_MY_TEAMS_FORECAST' => 'Mitt teams prognos',
  'LBL_DASHLET_MY_TEAMS_PIPELINE' => 'Mitt Teams Pipeline',
  'LBL_DASHLET_PIPELINE_CHART_DESC' => 'Visar aktuellt pipeline diagram.',
  'LBL_DASHLET_PIPELINE_CHART_NAME' => 'Prognos Pipeline diagram',
  'LBL_DATA_SET' => 'Dataset',
  'LBL_DATE_CLOSED' => 'Förväntat slutdatum',
  'LBL_DATE_COMMITTED' => 'Angivet datum',
  'LBL_DATE_ENTERED' => 'Skapatdatum',
  'LBL_DATE_MODIFIED' => 'Redigeringsdatum',
  'LBL_DELETED' => 'Raderad',
  'LBL_DISCOUNT' => 'Rabatt',
  'LBL_DISPLAYED_TOTAL' => 'Visad totalt',
  'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => 'Bästa över avslutad',
  'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => 'Bästa över budget',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => 'Trolig över avslutad',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => 'Sannolikt över budget',
  'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => 'Värsta över avslutad',
  'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => 'Värsta över budget',
  'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => 'Bästa under avslutad',
  'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => 'Bästa under budget',
  'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => 'Trolig under avslutad',
  'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => 'Sannolikt under budget',
  'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => 'Värsta under avslutad',
  'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => 'Värsta under budget',
  'LBL_DOWN' => 'ner',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Prognos affärsmöjligheter',
  'LBL_DV_FORECAST_PERIOD' => 'Prognos tidperiod',
  'LBL_DV_FORECAST_ROLLUP' => 'Sammanställ prognos',
  'LBL_DV_HEADER' => 'Prognoser: Arbetsark',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Senast angivna belopp:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Senast angivna datum:',
  'LBL_DV_MY_FORECASTS' => 'Mina prognoser',
  'LBL_DV_MY_TEAM' => 'Mitt teams prognoser',
  'LBL_DV_TIMEPERIOD' => 'Tidperiod:',
  'LBL_DV_TIMEPERIODS' => 'Tidperioder:',
  'LBL_DV_TIMPERIOD_DATES' => 'Datumintervall:',
  'LBL_EDITABLE_INVALID' => 'Ogiltig värde för {0}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Värdet måste vara mellan {0} och {1}',
  'LBL_ERROR_NOT_MANAGER' => 'Fel: Användaren {0} har inte manager tillgång till begäran prognoser för {1}',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Förväntade försäljningsmöjligheter',
  'LBL_EXPORT_CSV' => 'Exportera CSV',
  'LBL_FC_START_DATE' => 'Startdatum',
  'LBL_FC_USER' => 'Schemalägg för',
  'LBL_FDR_ADJ_AMOUNT' => 'Justerad summa',
  'LBL_FDR_COMMIT' => 'Angivet belopp',
  'LBL_FDR_C_BEST_CASE' => 'Bästa fall',
  'LBL_FDR_C_LIKELY_CASE' => 'Troligt fall',
  'LBL_FDR_C_WORST_CASE' => 'Värsta fall',
  'LBL_FDR_DATE_COMMIT' => 'Angivet datum',
  'LBL_FDR_OPPORTUNITIES' => 'Affärsmöjligheter i prognos:',
  'LBL_FDR_USER_NAME' => 'Direkt rapport',
  'LBL_FDR_WEIGH' => 'Viktad summa av affärsmöjligheterna:',
  'LBL_FDR_WK_BEST_CASE' => 'Estimerat bästa fall',
  'LBL_FDR_WK_LIKELY_CASE' => 'Estimerat troligt fall',
  'LBL_FDR_WK_WORST_CASE' => 'Estimerat värsta fall',
  'LBL_FILTERS' => 'Filter',
  'LBL_FISCAL_YEAR' => 'Räkenskapsår',
  'LBL_FMT_DIRECT_FORECAST' => '(Direkt)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Sammanställ)',
  'LBL_FORECAST' => 'Prognos',
  'LBL_FORECASTS_ACLS_NO_ACCESS_MSG' => 'Du har inte tillgång till Prognos modulen. Kontakta din administrator.',
  'LBL_FORECASTS_ACLS_NO_ACCESS_TITLE' => 'Prognoserna tillgångs fel:',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => 'Intervall',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => 'Scenarier',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Tidsperioder',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => 'Variabler',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_WORKSHEET_LAYOUT' => 'Arbetsark Layout',
  'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_PRODUCT_LINE_ITEMS' => 'Intäktsposter',
  'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_TEXT' => 'Välj hur du vill fylla i prognos arbetsarket:',
  'LBL_FORECASTS_CONFIG_HELP_FORECAST_BY' => 'Jag är en platshållare för prognos av how-to text!',
  'LBL_FORECASTS_CONFIG_HELP_RANGES' => 'Konfigurera hur du vill kategorisera {{forecastByModule}}.<br /><br />Observera att intervall inställningarna inte kan ändras efter första commit. För uppgraderade fall är intervall inställningen låst in med befintliga prognos data.<br /><br />Du kan välja två eller flera kategorier baserat på sannolikhetsintervall eller skapa kategorier som inte baseras på sannolikhet.<br /><br />Det finns check-boxar till vänster om dina egna kategorier; använda dessa för att bestämma vilka intervall som kommer att ingå i prognos beloppet committed och rapporterat till managers.<br /><br />En användare kan ändra inkludera/exkludera status och kategori av {{forecastByModule}} manuellt från sina arbetsark.',
  'LBL_FORECASTS_CONFIG_HELP_SCENARIOS' => 'Välj de kolumner som du vill att användaren att fylla ut för sina prognoser för varje {{forecastByModuleSingular}}. Observera att de sannolika belopp är knutet till dom belopp som anges i  {{forecastByModule}}; av denna anledning kan inte sannolik kolumnen döljas.',
  'LBL_FORECASTS_CONFIG_HELP_TIMEPERIODS' => 'Konfigurer den tidsperiod som kommer att användas i Prognos modulen.<br /><br />Observera att tidsinställnings period inte kan ändras efter installationen.<br /><br />Börja med att välja startdatum för din finansår. Välj sedan den typ av tidsperiod för prognos. Datumintervall för de tidsperioder beräknas automatiskt baserat på dina val. Undertidsperioden är basen för prognos arbetsark.<br /><br />Den synliga framtid och tidigare tidsperioder kommer att avgöra antalet synliga delperioder i prognos modulen. Användarna har möjlighet att visa och redigera prognos nummer i de synliga delperioder.',
  'LBL_FORECASTS_CONFIG_HELP_WORKSHEET_COLUMNS' => 'Välj vilka kolumner du vill visa i prognos-modulen. Listan över fälter kommer att kombinera arbetsarket och låter användaren välja hur man konfigurerar sin vy.',
  'LBL_FORECASTS_CONFIG_HOWTO_TITLE_FORECAST_BY' => 'Prognos av',
  'LBL_FORECASTS_CONFIG_LEAFPERIOD' => 'Välj under perioden som du vill visa din tidsperiod över:',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS' => 'Visa beräknade scenarier totalsummorna',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_BEST' => 'Visa Bästa Case Totals',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_LIKELY' => 'Visa Sannolika Case Totals',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_WORST' => 'Visa värsta fallet Totalt',
  'LBL_FORECASTS_CONFIG_RANGES' => 'Prognos intervall alternativ:',
  'LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE' => 'Ange intervall namn...',
  'LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO' => 'Exkluderand intervall är från 0% till minimum av föregående prognosintervall som standard.',
  'LBL_FORECASTS_CONFIG_RANGES_OPTIONS' => 'Välj hur du vill kategorisera {{forecastByModule}}.',
  'LBL_FORECASTS_CONFIG_RANGES_SETUP_NOTICE' => 'Intervall inställningarna kan inte ändras efter första sparad utkast eller commit i prognoser modulen. För en uppgraderad instans däremot, kan intervall inställningarna inte ändras efter den första installationen då prognos data redan finns tillgänglig via uppgraderingen.',
  'LBL_FORECASTS_CONFIG_SETTINGS_SAVED' => 'Prognos inställningar har sparats.',
  'LBL_FORECASTS_CONFIG_SHOW_BINARY_RANGES_DESCRIPTION' => 'Detta alternativ ger användaren möjlighet att ange {{forecastByModule}} som kommer att ingå eller undantas från en prognos.',
  'LBL_FORECASTS_CONFIG_SHOW_BUCKETS_RANGES_DESCRIPTION' => 'Detta alternativ ger användaren möjlighet att kategorisera sina {{forecastByModule}} som inte ingår i commiten, men är upside och har potential att stänga om allt går bra och {{forecastByModule}} som ska undantas från prognos.',
  'LBL_FORECASTS_CONFIG_SHOW_CUSTOM_BUCKETS_RANGES_DESCRIPTION' => 'Anpassade intervaller: Detta alternativ ger användaren möjlighet att kategorisera sina {{forecastByModule}} som commits i prognosen i ett committed intervall, exkluderad intervall och alla andra som du har satt upp.',
  'LBL_FORECASTS_CONFIG_START_DATE' => 'Välj räkenskapsår startdatum',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD' => 'Välj typ av tidsperiod',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD' => 'Välj antalet tidigare tidsperioder som visas i arbetsarket.<br />Detta nummer gäller för basen tidsperiod vald. Till exempel vid att välja 2 för månads tidsperiod, visar detta 6 senaste månaderna',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD' => 'Välj antalet framtida tidsperioder som visas i arbetsarket.<br />Detta nummer gäller för basen tidsperiod vald. Till exempel vid att välja 2 för årlig tidsperiod, visar detta åtta framtida kvartal',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => 'Konfigurera tidsperioderna som används för Prognos modulen.',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_FISCAL_YEAR' => 'Den valda startdatum tyder på att räkenskapsåret kan spänna över två år. Välj vilket år som ska användas som räkenskapsår:',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_SETUP_NOTICE' => 'Tidsperiod inställningar kan inte ändras efter installationen.',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_TYPE' => 'Välj typ av år din organisation använder för redovisning.',
  'LBL_FORECASTS_CONFIG_TITLE' => 'Prognoser Setup',
  'LBL_FORECASTS_CONFIG_TITLE_FORECAST_BY' => 'Visa prognos arbetsarkad Av',
  'LBL_FORECASTS_CONFIG_TITLE_FORECAST_SETTINGS' => 'Prognos inställningar',
  'LBL_FORECASTS_CONFIG_TITLE_MESSAGE_TIMEPERIODS' => 'Räkenskapsår startdatum:',
  'LBL_FORECASTS_CONFIG_TITLE_RANGES' => 'Prognos intervaller',
  'LBL_FORECASTS_CONFIG_TITLE_SCENARIOS' => 'Scenarier',
  'LBL_FORECASTS_CONFIG_TITLE_TIMEPERIODS' => 'Tidsperiod',
  'LBL_FORECASTS_CONFIG_TITLE_WORKSHEET_COLUMNS' => 'Kolumner i arbetsarken',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Variabler',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE' => 'Välj försäljningsnivå som representerar stängda och förlorade {{forecastByModule}}:',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE' => 'Välj försäljningsnivån som representerar stängda och vunnit {{forecastByModule}}:',
  'LBL_FORECASTS_CONFIG_VARIABLES_DESC' => 'Formlerna för Metrics Tabell förlitar sig på försäljnings nivån för {{forecastByModule}} som måste exkluderas från pipleline, dvs {{forecastByModule}} som är stängda och förlorade.',
  'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => 'Därför kommer pipeline formeln att vara:',
  'LBL_FORECASTS_CONFIG_WORKSHEET_LAYOUT_DETAIL_MESSAGE' => 'Arbetsark kommer att fyllas i med:',
  'LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO' => 'Sannolikt är baserat på det belopp som anges i {{forecastByModule}} modul.',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS' => 'Välj de scenarier att inkludera på prognos arbetsarket.',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => 'Bästa',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => 'Sannolikt',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => 'Värsta',
  'LBL_FORECASTS_CONFIG_WORKSHEET_TEXT' => 'Välj vilka kolumner som ska visas för arbetsarksvyn. Som standard kommer följande områden väljas:',
  'LBL_FORECASTS_CUSTOM_BASED_TITLE' => 'Anpassade intervall baserade på sannolikheterna',
  'LBL_FORECASTS_CUSTOM_NO_BASED_TITLE' => 'Intervall inte baserat på sannolikheterna',
  'LBL_FORECASTS_CUSTOM_RANGES_DEFAULT_NAME' => 'Anpassat intervall',
  'LBL_FORECASTS_MISSING_SALES_STAGE_VALUES' => 'Prognos modulerna är felaktigt konfigurerad och är inte längre tillgänglig. Försäljning nivå Vunnit och försäljning nivå Förlorade saknas i tillgängliga försäljning nivå värden. Kontakta din administratör.',
  'LBL_FORECASTS_MISSING_STAGE_TITLE' => 'Prognose konfigurations fel:',
  'LBL_FORECASTS_NO_ACCESS_TO_CFG_MSG' => 'Du har inte tillgång till konfigurera Prognoser. Kontakta din administratör.',
  'LBL_FORECASTS_NO_ACCESS_TO_CFG_TITLE' => 'Prognos tillgångs fel:',
  'LBL_FORECASTS_RANGES_BASED_TITLE' => 'Intervaller baserade på sannolikheterna',
  'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => 'Prognos inställningar har sparats. Vänta medan modulen laddar om.',
  'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => 'Du har nu ställt in prognos modulen. Vänta medan modulen laster.',
  'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => 'Success:',
  'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS' => 'Du har committed din prognos',
  'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS_TO' => 'Du har committed din prognos till {{manager}}',
  'LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS' => 'Du har sparat prognos arbetsarket som ett utkast för den valda tidsperioden.',
  'LBL_FORECAST_DETAILS_DEFICIT' => 'Underskott',
  'LBL_FORECAST_DETAILS_EXCEED' => 'Överskrida av',
  'LBL_FORECAST_DETAILS_MEETING_QUOTA' => 'Mötes budget',
  'LBL_FORECAST_DETAILS_NO_DATA' => 'Ingen data',
  'LBL_FORECAST_DETAILS_SHORT' => 'Kort stavelse vid',
  'LBL_FORECAST_DETAILS_SURPLUS' => 'Överskott',
  'LBL_FORECAST_FOR' => 'Prognosark för:',
  'LBL_FORECAST_HISTORY' => 'Prognoser: Historik',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognoser: Historik',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Bästa fall',
  'LBL_FORECAST_OPP_COMMIT' => 'Troligt fall',
  'LBL_FORECAST_OPP_COUNT' => 'Affärsmöjligheter',
  'LBL_FORECAST_OPP_WEIGH' => 'Viktad summa',
  'LBL_FORECAST_OPP_WORST' => 'Värsta fall',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Pipeline antal affärsmöjligheter',
  'LBL_FORECAST_SETTINGS' => 'Inställningar',
  'LBL_FORECAST_TIME_ID' => 'Tidperiod ID',
  'LBL_FORECAST_TITLE' => 'Prognos',
  'LBL_FORECAST_TYPE' => 'Prognostyp',
  'LBL_FORECAST_USER' => 'Användare',
  'LBL_FS_CASCADE' => 'Sprid?',
  'LBL_FS_CREATED_BY' => 'Skapad av',
  'LBL_FS_DATE_ENTERED' => 'Skapatdatum',
  'LBL_FS_DATE_MODIFIED' => 'Redigeringsdatum',
  'LBL_FS_DELETED' => 'Raderad',
  'LBL_FS_END_DATE' => 'Slutdatum',
  'LBL_FS_FORECAST_FOR' => 'Schemalägg för:',
  'LBL_FS_FORECAST_START_DATE' => 'Prognos startdatum',
  'LBL_FS_MODULE_NAME' => 'Schemalägg prognos',
  'LBL_FS_START_DATE' => 'Startdatum',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Tidperiod',
  'LBL_FS_TIMEPERIOD_ID' => 'Tidperiod ID',
  'LBL_FS_USER_ID' => 'Användar ID',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Angivet belopp för %',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Angiven prognos',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Värde av stängda affärsmöjligheter i %',
  'LBL_GRAPH_OPPS_LEGEND' => 'Stängda affärsmöjligheter',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Kvot för %',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Kvot',
  'LBL_GRAPH_TITLE' => 'Prognos historik',
  'LBL_GROUP_BY' => 'Gruppera enligt:',
  'LBL_HELP_RECORDS' => '{{plural_module_name}}-modulen innehåller {{opportunities_singular_module}}poster att bygga en {{module}}s {{worksheet_module}} och förutspå försäljningen. Användare kan arbeta för försäljningskvoter för individen, teamet och försäljningsorganisation. Innan användarna kan komma åt {{plural_module_name}}modul för att börja bygga {{module}}s {{worksheet_module}} måste en användare med administratörsbehörighet konfigurera {{plural_module_name}} med organisationens önskade tidsperioder. Säljarna använder {{plural_module_name}}-modul för att arbeta med sina tilldelade {{opportunities_module}} eftersom den aktuella tidsperioden fortskrider. Dessa användare kommer att föra in totala prognoser som deras försäljning bygger på. Försäljningschefer arbetar med sina egna {{opportunities_singular_module}}poster på samma sätt som andra säljare. Dessutom aggregeras de underordnades committade {{module_name}} värdne till att förutsäga deras totala  försäljning och arbeta för lagets kvot för varje tidsperiod. Ytterligare insikter erbjuds av de delar av expander Intelligence Pane inklusive analys av en individs {{opportunities_module}} kalkylblad och analys för en chefs teamkalkyl."',
  'LBL_IN_FORECAST' => 'I prognos',
  'LBL_LESS' => 'Mindre',
  'LBL_LIST_FORM_TITLE' => 'Tillagda prognoser',
  'LBL_LOADING' => 'Laddar',
  'LBL_LOADING_COMMIT_HISTORY' => 'Laddar commit historik...',
  'LBL_LV_COMMIT' => 'Angivet belopp',
  'LBL_LV_COMMIT_DATE' => 'Angivet datum',
  'LBL_LV_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_LV_TIMPERIOD' => 'Tidperiod',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Slutdatum',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Startdatum',
  'LBL_LV_TYPE' => 'Prognostyp',
  'LBL_LV_WEIGH' => 'Viktad summa',
  'LBL_MODIFIED_USER_ID' => 'Redigerad av',
  'LBL_MODULE_NAME' => 'Prognoser',
  'LBL_MODULE_NAME_SINGULAR' => 'Prognos',
  'LBL_MODULE_TITLE' => 'Prognoser',
  'LBL_MORE' => 'Mer',
  'LBL_MY_MANAGER_LINE' => '{0} (mig)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Inga aktiva tidperioder för prognoser.',
  'LBL_OPPORTUNITY_NAME' => 'Affärsmöjlighet namn',
  'LBL_OPPORTUNITY_STATUS' => 'Affärsmöjlighet Status',
  'LBL_OVERALL_TOTAL' => 'Alla totalt',
  'LBL_OW_ACCOUNTNAME' => 'Organisation',
  'LBL_OW_DESCRIPTION' => 'Beskrivning',
  'LBL_OW_MODULE_TITLE' => 'Affärsmöjlighetsark',
  'LBL_OW_NEXT_STEP' => 'Nästa steg',
  'LBL_OW_OPPORTUNITIES' => 'Affärsmöjlighet',
  'LBL_OW_PROBABILITY' => 'Sannolikhet',
  'LBL_OW_REVENUE' => 'Summa',
  'LBL_OW_TYPE' => 'Typ',
  'LBL_OW_WEIGHTED' => 'Viktad summa',
  'LBL_PERCENT' => 'Procent',
  'LBL_PIPELINE_OPPORTUNITIES' => 'Pipeline affärsmöjligheter',
  'LBL_PIPELINE_REVENUE' => 'Pipeline Intäkter',
  'LBL_PREVIOUS_COMMIT' => 'Senaste Commit:',
  'LBL_PRODUCT_ID' => 'Produkt ID',
  'LBL_PRODUCT_TEMPLATE' => 'Produktkatalog',
  'LBL_PROJECTED' => 'Projected',
  'LBL_QC_COMMIT_BEST_CASE' => 'Angivet belopp (bästa fall):',
  'LBL_QC_COMMIT_BUTTON' => 'Verkställ',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Angivet belopp (troligt fall):',
  'LBL_QC_COMMIT_VALUE' => 'Ange summa:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Angivet belopp (värsta fall):',
  'LBL_QC_DIRECT_FORECAST' => 'Mina direkta prognoser',
  'LBL_QC_HEADER_DELIM' => 'Till',
  'LBL_QC_LAST_BEST_CASE' => 'Senaste angivna belopp (bästa fall):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Senaste angivna belopp:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Senaste angivna datum:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Senaste angivna belopp (troligt fall):',
  'LBL_QC_LAST_WORST_CASE' => 'Senaste angivna belopp (värsta fall):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Antal afärsmöjligheter:',
  'LBL_QC_ROLLUP_FORECAST' => 'Min grupps prognoser',
  'LBL_QC_ROLL_BEST_VALUE' => 'Senaste angivna summa (bästa fall):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Sammanfatta angivna belopp:',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Senaste angivna summa (troligt fall):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Senaste angivna summa (värsta fall)',
  'LBL_QC_TIME_PERIOD' => 'Tidperiod:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mina prognoser',
  'LBL_QC_WEIGHT_VALUE' => 'Viktad summa',
  'LBL_QC_WORKSHEET_BUTTON' => 'Arbetsark',
  'LBL_QUOTA' => 'Budget',
  'LBL_QUOTA_ADJUSTED' => 'Budget (Justerad)',
  'LBL_QUOTA_ASSIGNED' => 'Budget har framgångsrikt tilldelats.',
  'LBL_QUOTA_ID' => 'Budget ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Rapporterar till',
  'LBL_RESET_CHECK' => 'All data i arbetsarket för den valda tidsperioden och inloggade användare kommer att raderas. Fortsätta?',
  'LBL_RESET_WOKSHEET' => 'Återställ arbetsarket',
  'LBL_REVENUE' => 'Intäkt',
  'LBL_REVENUELINEITEM_NAME' => 'Intäktspost namn',
  'LBL_SALES_STAGE' => 'Nivå',
  'LBL_SAVE_DRAFT' => 'Spara utkast',
  'LBL_SAVE_WOKSHEET' => 'Spara arbetsark',
  'LBL_SEARCH' => 'Välj',
  'LBL_SEARCH_LABEL' => 'Välj',
  'LBL_SHOW_CHART' => 'Visa diagram',
  'LBL_SVFS_CASCADE' => 'Sprid till rapporter?',
  'LBL_SVFS_FORECASTDATE' => 'Schemalägg startdatum',
  'LBL_SVFS_HEADER' => 'Prognos schema',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'För',
  'LBL_TEAMS' => 'Teams',
  'LBL_TIMEPERIOD_NAME' => 'Tidperiod',
  'LBL_TOTAL' => 'Totalt',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Total rabatt belopp',
  'LBL_TOTAL_VALUE' => 'Totalt:',
  'LBL_TP_QUOTA' => 'Kvot:',
  'LBL_TREE_PARENT' => 'Huvud',
  'LBL_UNAUTH_FORECASTS' => 'Obehörig tillgång till prognos inställningar.',
  'LBL_UP' => 'upp',
  'LBL_USER_NAME' => 'Användarnamn',
  'LBL_VERSION' => 'Version',
  'LBL_WARN_UNSAVED_CHANGES_CONFIRM_SORT' => 'Du har ändringar som inte sparats. Är du säker på att du vill sortera arbetsarket och kasta ändringarna?',
  'LBL_WK_REVISION' => 'Revision',
  'LBL_WK_VERSION' => 'Version',
  'LBL_WORKSHEET_AMOUNT' => 'Total estimerade summor',
  'LBL_WORKSHEET_EXPORT_CONFIRM' => 'Endast sparas eller engagerade data kommer att exporteras. Avbryt för att avbryta. Bekräfta att exportera sparade data.',
  'LBL_WORKSHEET_ID' => 'Arbetsark ID',
  'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => 'Du har osparade ändringar i ditt arbetsark.',
  'LB_FS_BEST_CASE' => 'Bästa fall',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Troligt fall',
  'LB_FS_WORST_CASE' => 'Värsta fall',
  'LNK_FORECAST_LIST' => 'Prognos historik',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjighet',
  'LNK_NEW_TIMEPERIOD' => 'Skapa tidperiod',
  'LNK_QUOTA' => 'Offerter',
  'LNK_TIMEPERIOD_LIST' => 'Tidperioder',
  'LNK_UPD_FORECAST' => 'Prognosark',
);
