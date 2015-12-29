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
  'ERR_CRON_SYNTAX' => 'Sintaxis de Cron inválida',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la planificación.',
  'LBL_ADV_OPTIONS' => 'Opciones Avanzadas',
  'LBL_ALL' => 'Todos los días',
  'LBL_ALWAYS' => 'Siempre',
  'LBL_AND' => 'y',
  'LBL_ASYNCMASSUPDATE' => 'Realizar Actualizaciones Asíncronas Masivas',
  'LBL_AT' => 'en',
  'LBL_AT_THE' => 'El',
  'LBL_BASIC_OPTIONS' => 'Configuración Básica',
  'LBL_CATCH_UP' => 'Ejecutar Si Falla',
  'LBL_CATCH_UP_WARNING' => 'Desmarque si la ejecución de esta tarea puede durar más de un momento.',
  'LBL_CLEANJOBQUEUE' => 'Liberador de la Cola de Trabajos',
  'LBL_CLEANOLDRECORDLISTS' => 'Limpiar las Listas de Récords Antiguos',
  'LBL_CRONTAB_EXAMPLES' => 'Lo arriba mostrado utiliza notación estándar de crontab.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Por favor, especifique el tiempo de ejecución del planificador en consecuencia.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Las especificaciones del cron para que se ejecute es sobre la base de la zona horaria del servidor (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar el Planificador de Windows',
  'LBL_CRON_LINUX_DESC' => 'Nota: Para ejecutar los Planificadores de Sugar, añada la siguiente línea a su archivo crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Nota: Para ejecutar los planificadores de Sugar, cree un archivo de proceso por lotes a ejecutar utilizando las Tareas Programadas de Windows. El archivo de proceso por lotes debería contener los siguientes comandos:',
  'LBL_DATE_TIME_END' => 'Fecha y Hora de Fin',
  'LBL_DATE_TIME_START' => 'Fecha y Hora de Inicio',
  'LBL_DAY_OF_MONTH' => 'fecha',
  'LBL_DAY_OF_WEEK' => 'día',
  'LBL_EVERY' => 'Cada',
  'LBL_EVERY_DAY' => 'Todos los días',
  'LBL_EXECUTE_TIME' => 'Tiempo de Ejecución',
  'LBL_FRI' => 'Viernes',
  'LBL_FROM' => 'Desde',
  'LBL_HOUR' => 'horas',
  'LBL_HOURS' => 'hrs',
  'LBL_HOUR_SING' => 'hora',
  'LBL_IN' => 'en',
  'LBL_INTERVAL' => 'Intervalo',
  'LBL_JOB' => 'Tarea',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Registro de Tareas',
  'LBL_JOB_URL' => 'URL de la tarea',
  'LBL_LAST_RUN' => 'Última Ejecución Exitosa',
  'LBL_LIST_EXECUTE_TIME' => 'Será ejecutado en:',
  'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
  'LBL_LIST_LIST_ORDER' => 'Planificadores:',
  'LBL_LIST_NAME' => 'Planificador:',
  'LBL_LIST_RANGE' => 'Rango:',
  'LBL_LIST_REMOVE' => 'Quitar:',
  'LBL_LIST_STATUS' => 'Estado:',
  'LBL_LIST_TITLE' => 'Lista de Planificación:',
  'LBL_MINS' => 'min',
  'LBL_MINUTES' => 'minutos',
  'LBL_MIN_MARK' => 'marca por minuto',
  'LBL_MODULE_NAME' => 'Planificador Sugar',
  'LBL_MODULE_NAME_SINGULAR' => 'Planificador Sugar',
  'LBL_MODULE_TITLE' => 'Planificadores',
  'LBL_MON' => 'Lunes',
  'LBL_MONTH' => 'mes',
  'LBL_MONTHS' => 'me',
  'LBL_NAME' => 'Nombre de Tarea',
  'LBL_NEVER' => 'Nunca',
  'LBL_NEW_FORM_TITLE' => 'Nueva Planificación',
  'LBL_NO_PHP_CLI' => 'Si su servidor no tiene disponibles los binarios PHP, puede utilizar wget o curl para lanzar sus Tareas.<br>para wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1</b><br>para curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Tan a menudo como sea posible.',
  'LBL_ON_THE' => 'En el',
  'LBL_OOTB_BOUNCE' => 'Ejecutar Proceso Nocturno de Emails de Campaña Rebotados',
  'LBL_OOTB_CAMPAIGN' => 'Ejecutar Proceso Nocturno de Campañas de Email Masivo',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Limpiar Cola de Trabajos',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Nuevos Períodos de Tiempo Futuros',
  'LBL_OOTB_HEARTBEAT' => 'Control Automático de Usuarios de Sugar',
  'LBL_OOTB_IE' => 'Comprobar Bandejas de Entrada',
  'LBL_OOTB_PRUNE' => 'Truncar Base de datos al Inicio del Mes',
  'LBL_OOTB_PRUNE_RECORDLISTS' => 'Recortar las Listas de Récords Antiguos',
  'LBL_OOTB_REPORTS' => 'Ejecutar Tareas Programadas de Generación de Informes',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Ejecutar Envío de Emails de Recordatorios',
  'LBL_OOTB_TRACKER' => 'Truncar Tablas de Monitorización',
  'LBL_OOTB_WORKFLOW' => 'Procesar Tareas de Workflow',
  'LBL_PERENNIAL' => 'continuo',
  'LBL_PERFORMFULLFTSINDEX' => 'Búsqueda de texto completo Sistema de Índice',
  'LBL_POLLMONITOREDINBOXES' => 'Comprobar Cuentas de Correo Entrante',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Ejecutar Proceso Nocturno de Correos Rebotados en Campañas',
  'LBL_PROCESSQUEUE' => 'Ejecutar Tareas Planificadas de Generación de Informes',
  'LBL_PROCESSWORKFLOW' => 'Procesar Tareas de Workflow',
  'LBL_PRUNEDATABASE' => 'Truncar Base de Datos el 1º de cada Mes',
  'LBL_RANGE' => 'a',
  'LBL_REFRESHJOBS' => 'Actualizar Trabajos',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Ejecutar Campañas de Correo Masivo Nocturnas',
  'LBL_SAT' => 'Sábado',
  'LBL_SCHEDULER' => 'Planificador:',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Planificación',
  'LBL_SENDEMAILREMINDERS' => 'Ejecutar recordatorios por correo electrónico',
  'LBL_STATUS' => 'Estado',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Nuevos Períodos de Tiempo Futuros',
  'LBL_SUGARJOBHEARTBEAT' => 'Control Automático de Usuarios de Sugar',
  'LBL_SUN' => 'Domingo',
  'LBL_THU' => 'Jueves',
  'LBL_TIME_FROM' => 'Activo Desde',
  'LBL_TIME_TO' => 'Activo Hasta',
  'LBL_TOGGLE_ADV' => 'Mostrar Opciones Avanzadas',
  'LBL_TOGGLE_BASIC' => 'Mostrar Opciones Básicas',
  'LBL_TRIMTRACKER' => 'Truncar Tablas de Monitorización',
  'LBL_TUE' => 'Martes',
  'LBL_UPDATETRACKERSESSIONS' => 'Actualizar Tablas de Sesión de Monitorización',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar Tabla tracker_sessions',
  'LBL_WARN_CURL' => 'Aviso:',
  'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
  'LBL_WARN_NO_CURL' => 'Este sistema no tiene las librerías cURL habilitadas/compiladas en el módulo de PHP (--with-curl=/ruta/a/libreria_curl).  Por favor, contacte con su administrador para resolver el problema.  Sin la funcionalidad que provee cURL, el Planificador no puede utilizar hilos con sus tareas.',
  'LBL_WED' => 'Miércoles',
  'LNK_LIST_SCHEDULED' => 'Tareas Planificadas',
  'LNK_LIST_SCHEDULER' => 'Planificadores',
  'LNK_NEW_SCHEDULER' => 'Nuevo Planificador',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'NTC_LIST_ORDER' => 'Establezca el orden en que esta planificación aparecerá en las listas desplegables de selección de Planificador',
  'NTC_STATUS' => 'Establezca el estado a Inactivo para quitar esta planificación de las listas desplegables de selección de Planificador',
  'SOCK_GREETING' => 'Este es el interfaz de usuario para el Servicio de Planificación de SugarCRM. <br />[ Comandos de demonio disponibles: start|restart|shutdown|status ]<br />Para salir, teclee &#39;quit&#39;.  Para detener el servicio &#39;shutdown&#39;.',
);

