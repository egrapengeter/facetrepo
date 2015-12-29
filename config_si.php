  <?php
    $sugar_config_si = array(
      'setup_db_host_name'           => 'ondemandus01-dbc-1-db-1.cge3wj1tjwac.us-west-2.rds.amazonaws.com',
      'setup_db_sugarsales_user'     => 'u_limepainting',
      'setup_db_sugarsales_password' => 'k4T5bipxF-4J6zx',
      'setup_db_database_name'       => 'db_limepainting',
      'setup_db_type'                => 'mysql',
      'setup_db_pop_demo_data'       => 0,

      'setup_db_create_database'        => 1,
      'setup_db_create_sugarsales_user' => 0,
      'setup_db_drop_tables'            => 0,
      'setup_db_username_is_privileged' => true,

      'setup_db_admin_user_name' => 'u_limepainting',
      'setup_db_admin_password'  => 'k4T5bipxF-4J6zx',

      'setup_fts_type'        => 'Elastic',
      'setup_fts_host'        => 'internal-OnDemandUS01-Internal-928498196.us-west-2.elb.amazonaws.com',
      'setup_fts_port'        => '9200',
      'setup_fts_hide_config' => 'true',

      'setup_site_url'                => 'https://limepainting.sugarondemand.com/',
      'setup_site_admin_user_name'    => 'admin',
      'setup_site_admin_password'     => 'hsJmnsJq_xS4X8r',
      'setup_license_key_users'       => '',
      'setup_license_key_expire_date' => '',
      'setup_license_key'             => 'af0038177c1a70df5929026ad9b505c4',
      'setup_num_lic_oc'              => '0',

      'setup_site_sugarbeet_automatic_checks' => true,

      'setup_system_name' => 'SugarCRM - Commercial Open Source CRM',

      'default_currency_iso4217'            => 'USD',
      'default_currency_name'               => 'US Dollar',
      'default_currency_significant_digits' => '2',
      'default_currency_symbol'             => '$',
      'default_date_format'                 => 'Y-m-d',
      'default_time_format'                 => 'H:i',
      'default_decimal_seperator'           => '.',
      'default_export_charset'              => 'ISO-8859-1',
      'default_language'                    => 'en_us',
      'default_locale_name_format'          => 's f l',
      'default_number_grouping_seperator'   => ',',

      'demoData'                         => 'no',
      'packageScan'                      => true,
      'export_delimiter'                 => ',',
      'external_cache_disabled'          => true,
      'external_cache_disabled_memcache' => true,
      'slow_query_time_msec'             => '5000',
      'dump_slow_queries'                => false,
      'developerMode'                    => false,
      'disable_count_query'              => true,
      'disable_uw_upload'                => true,
      'hide_admin_backup'                => true,
      'hide_full_text_engine_config'     => true,
      'log_memory_usage'                 => false,
      'logger_visible'                   => false,
      'session_dir'                      => '',
      'analytics' => array('enabled' => true, 'connector' => 'GoogleAnalytics', 'id' => 'UA-46213331-3'),



      'default_permissions' =>
      array(
        'dir_mode'  => 1528,
        'file_mode' => 432,
        'user'      => '',
        'group'     => ''
      ),

      'moduleInstaller' =>
      array(
        'packageScan' => true,
        'validExt'    => array('xml'),
      ),

      'logger' =>
      array(
        'level' => 'debug',
        'file'  =>
        array(
          'name'       => 'sugarcrm',
          'suffix'     => '',
          'ext'        => '.log',
          'dateFormat' => '%c',
          'maxSize'    => '10MB',
          'maxLogs'    => 1,
        ),
      ),

      'http_referer' =>
      array(
        'list' =>
        array(
          'dev.ms.sugarcrm.com',
          'stage.ms.sugarcrm.com',
          'prod.ms.sugarcrm.com',
          'apps.lotuslive.com',
          'www.sugarcrm.com',
        ),
        'actions' =>
        array(
          'index',
          'ListView',
          'DetailView',
          'EditView',
          'Login',
          'Authenticate',
          'oauth',
        ),
      ),

      'metrics_enabled' => 1,
      'metric_providers' =>
      array(
        'SugarMetric_Provider_Newrelic' => 'include/SugarMetric/Provider/Newrelic.php',
      ),
      'metric_settings' =>
      array(
        'SugarMetric_Provider_Newrelic' =>
        array(
          'applicationname' => 'SugarCRM 7.5.0.1',
        ),
      ),
    );
  ?>
