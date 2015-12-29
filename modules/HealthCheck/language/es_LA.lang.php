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
  'LBL_BUCKET' => 'Cubeta',
  'LBL_ERROR' => 'Error',
  'LBL_FLAG' => 'Bandera',
  'LBL_LOGFILE' => 'Inicio de Archivo',
  'LBL_LOGMETA' => 'Inicio meta',
  'LBL_MODULE_NAME' => 'Verificar Salud',
  'LBL_MODULE_NAME_SINGULAR' => 'Verificar Salud',
  'LBL_MODULE_TITLE' => 'Verificar Salud',
  'LBL_SCAN_101_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_101_LOG' => '%s tener historial de estudio',
  'LBL_SCAN_101_TITLE' => '%s tiene historial de estudio',
  'LBL_SCAN_102_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_102_LOG' => '%s tener extensiones: %s',
  'LBL_SCAN_102_TITLE' => '%s tiene extensiones: %s',
  'LBL_SCAN_103_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_103_LOG' => '%s tiene personalización vardefs',
  'LBL_SCAN_103_TITLE' => '%s tiene personalización vardefs',
  'LBL_SCAN_104_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_104_LOG' => '%s tiene personalización layoutdefs',
  'LBL_SCAN_104_TITLE' => '%s tiene personalización layoutdefs',
  'LBL_SCAN_105_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_105_LOG' => '%s tiene personalización viewdefs',
  'LBL_SCAN_105_TITLE' => '%s tiene personalización viewdefs',
  'LBL_SCAN_201_DESCR' => 'Personalizaciones de estudio fueron detectadas en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones han sido incrementadas de categoría a Sugar7.',
  'LBL_SCAN_201_LOG' => '%s no es un módulo de existencias',
  'LBL_SCAN_201_TITLE' => '%s no es un módulo de existencias',
  'LBL_SCAN_301_DESCR' => 'Ciertas personalizaciones fueron detectadas y no fueron emigradas a Sugar7. Este módulo (%s) seguirá estando disponible pero será corrido en Modo de Compatibilidad Atrasado en Sugar7.',
  'LBL_SCAN_301_LOG' => '%s para ser iniciado como BWC',
  'LBL_SCAN_301_TITLE' => '%s para ser iniciado como BWC',
  'LBL_SCAN_302_DESCR' => 'Vistas de archivos desconocidos fueron migrados a Sugar7.  Este módulo (%s) seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_302_LOG' => 'Vistas de archivos desconocidos presentes - %s no es módulo MB',
  'LBL_SCAN_302_TITLE' => 'Vistas de archivos desconocidos presentes - %s no es módulo MB',
  'LBL_SCAN_303_DESCR' => 'Archivos de formulario No Vacíos fueron migrados a Sugar7. Este módulo (%s) seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_303_LOG' => 'Archivo forma no vacío %s - %s no es módulo MB',
  'LBL_SCAN_303_TITLE' => 'Archivo forma no vacío %s - %s no es módulo MB',
  'LBL_SCAN_304_DESCR' => 'Archivos desconocidos (%s) fueron detectados y no fueron migrados a Sugar7. Este módulo (%s) seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_304_LOG' => 'Archivo desconocido %s - %s no es módulo MB',
  'LBL_SCAN_304_TITLE' => 'Archivo desconocido %s - %s no es módulo MB',
  'LBL_SCAN_305_DESCR' => 'vardefs malos(%s: %s) fueron detectados y no fueron migrados a Sugar7. Esta personalización seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_305_LOG' => 'Vardefs erróneos - clave %s, nombre %s',
  'LBL_SCAN_305_TITLE' => 'Vardefs erróneos - clave %s, nombre %s',
  'LBL_SCAN_306_DESCR' => 'vardefs malos fueron detectados y no fueron migrados a Sugar7. Relacionar campo (%s) tiene un `module`) vacío. Esta personalización seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_306_LOG' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
  'LBL_SCAN_306_TITLE' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
  'LBL_SCAN_307_DESCR' => 'vardefs malos fueron detectados y no fueron migrados a Sugar7. El vínculo (%s) se refiere a la relación inválida. Esta personalización seguirá estando disponible pero será corrido en Backwards Compatability Mode en Sugar7.',
  'LBL_SCAN_307_LOG' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
  'LBL_SCAN_307_TITLE' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
  'LBL_SCAN_308_DESCR' => 'Ciertas personalizaciones fueron descubiertas y no se emigraron a Sugar7. Este módulo (%s) seguirá estando disponible pero retrocedrá al Modo de Compatibilidad en Sugar7.',
  'LBL_SCAN_308_LOG' => 'Función HTML Vardef en %s',
  'LBL_SCAN_308_TITLE' => 'Función HTML Vardef en %s',
  'LBL_SCAN_309_DESCR' => 'Un md5 hash para %s no hace concuerda en el cuadro de archivo. Este archivo pudo haber sido modificado y no se incrementará para Sugar7',
  'LBL_SCAN_309_LOG' => 'Errror md5 para %s',
  'LBL_SCAN_309_TITLE' => 'Errror md5 para %s',
  'LBL_SCAN_310_DESCR' => 'Vista de archivos desconocidos (%s) fueron detectados y no fueron emigrados a Sugar7. Este módulo (%s) seguirá estando disponible pero se podrá iniciarse en el Modo de Compatibilidad Simple en Sugar7.',
  'LBL_SCAN_310_LOG' => 'Archivo desconocido %s/%s',
  'LBL_SCAN_310_TITLE' => 'Archivo desconocido %s/%s',
  'LBL_SCAN_311_DESCR' => 'Ciertas personalizaciones fueron detectadas y no fueron emigradas a Sugar7. Este módulo (%s) seguirá estando disponible pero se podrá iniciarse en el Modo de Compatibilidad Simple en Sugar7.',
  'LBL_SCAN_311_LOG' => 'Función Vardef HTML %s en módulo $module para campo %s',
  'LBL_SCAN_311_TITLE' => 'Función Vardef HTML %s en módulo $module para campo %s',
  'LBL_SCAN_312_DESCR' => 'Vardefs malos fueron detectados y no fueron emigrados a Sugar7. Vardefs malos: el campo de tipo &#39;name&#39; es inválido &#39;%s&#39; para el módulo &#39;%s&#39;. Esta personalización seguirá estando disponible pero podrá iniciarse en el Modo de Compatibilidad Simple en Sugar7.',
  'LBL_SCAN_312_LOG' => 'Vardefs erróneos - campo &#39;name&#39; es inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
  'LBL_SCAN_312_TITLE' => 'Vardefs erróneos - campo &#39;name&#39; es inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
  'LBL_SCAN_313_DESCR' => 'El directorio Extensiones se detectó - %s no es un Módulo Buider. Este módulo seguirá estando disponible, pero sólo en el Modo de Compatibilidad Simple.',
  'LBL_SCAN_313_LOG' => 'Extensión dir %s detectado - %s no es módulo MB',
  'LBL_SCAN_313_TITLE' => 'Extensión dir %s detectado - %s no es módulo MB',
  'LBL_SCAN_314_LOG' => 'Vardefs erróneos - campo multienum &#39;%s&#39; con lista de opciones claves &#39;%s&#39; contienen carácteres incompatibles - &#39;{%s}&#39;',
  'LBL_SCAN_401_DESCR' => 'El archivo personalizado incluye un archivo que ha sido movido al directorio del vendedor. Hemos intentado tomar la acción correctiva y ninguna acción adicional es necesaria.',
  'LBL_SCAN_401_LOG' => 'Inclusión de archivos de comerciante encontrados, para archivos que han sido movidos hacia el comerciante: %s',
  'LBL_SCAN_401_TITLE' => 'Inclusión de archivos de comerciante encontrados, para archivos que han sido movidos hacia el comerciante: %s',
  'LBL_SCAN_402_DESCR' => 'Módulo erróneo %s - no en beanList y no en filesystem',
  'LBL_SCAN_402_LOG' => 'Módulo erróneo %s - no en beanList y no en filesystem',
  'LBL_SCAN_402_TITLE' => 'Módulo erróneo %s - no en beanList y no en filesystem',
  'LBL_SCAN_406_DESCR' => 'EL módulo Stock de Sugar tiene vistas personalizadas en custom/modules/%s/views',
  'LBL_SCAN_406_LOG' => '%s tiene vistas personalizadas',
  'LBL_SCAN_406_TITLE' => '%s tiene vistas personalizadas',
  'LBL_SCAN_407_DESCR' => 'El módulo Stock de Sugar tiene vistas personalizadas en modules/%s/views',
  'LBL_SCAN_407_LOG' => '%s tiene vistas personalizadas en módulo dir',
  'LBL_SCAN_407_TITLE' => '%s tiene vistas personalizadas en módulo dir',
  'LBL_SCAN_410_DESCR' => 'Demasiados campos en la vista',
  'LBL_SCAN_410_LOG' => 'Campos máximos - Encontrados más de %s campos (%s) en %s',
  'LBL_SCAN_410_TITLE' => 'Campos máximos - Encontrados más de %s campos (%s) en %s',
  'LBL_SCAN_412_DESCR' => 'El subpanel se refiere a un vínculo que no existe o que no está correctamente definido',
  'LBL_SCAN_412_LOG' => 'Vínculo de subpanel erróneo %s in %s',
  'LBL_SCAN_412_TITLE' => 'Vínculo de subpanel erróneo %s in %s',
  'LBL_SCAN_413_DESCR' => 'El campo se refiere a una clase de widget que no tiene corresponde al archivo de la clase widget',
  'LBL_SCAN_413_LOG' => 'Clase widget desconocido detectado: %s para %s',
  'LBL_SCAN_413_TITLE' => 'Clase widget desconocido detectado: %s para %s',
  'LBL_SCAN_414_DESCR' => 'Campos desconocidos manejados por CRYS-36, no hay más que ver aquí',
  'LBL_SCAN_414_LOG' => 'Campos desconocidos manejados por CRYS-36, no hay más por verificar',
  'LBL_SCAN_414_TITLE' => 'Campos desconocidos manejados por CRYS-36, no hay más que ver aquí',
  'LBL_SCAN_415_DESCR' => 'Logic Hook se refiere a un archivo que no existe',
  'LBL_SCAN_415_LOG' => 'Archivo adjunto erróneo en %s: %s',
  'LBL_SCAN_415_TITLE' => 'Archivo adjunto erróneo en %s: %s',
  'LBL_SCAN_417_DESCR' => 'El Módulo de Facilitar o iFrames detectados, el cual no debería existir nunca más',
  'LBL_SCAN_417_LOG' => 'Módulo Incompatible %s',
  'LBL_SCAN_417_TITLE' => 'Módulo Incompatible %s',
  'LBL_SCAN_418_DESCR' => 'Subpanel se refiere a un módulo que no existe',
  'LBL_SCAN_418_LOG' => 'Subpanel encontrado con vinculo para modulo sin existencia: %s',
  'LBL_SCAN_418_TITLE' => 'Subpanel encontrado con vinculo para modulo sin existencia: %s',
  'LBL_SCAN_419_DESCR' => 'La clave Vardef no corresponde al nombre de vardef',
  'LBL_SCAN_419_LOG' => 'Vardefs erróneos - clave %s, nombre %s',
  'LBL_SCAN_419_TITLE' => 'Vardefs erróneos - clave %s, nombre %s',
  'LBL_SCAN_420_DESCR' => 'Vardef contiene campos relacionados en referencia a la relación no pueden ser cargados correctamente',
  'LBL_SCAN_420_LOG' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
  'LBL_SCAN_420_TITLE' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
  'LBL_SCAN_421_DESCR' => 'Vardef contiene el campo de vínculo que no puede ser cargado correctamente',
  'LBL_SCAN_421_LOG' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
  'LBL_SCAN_421_TITLE' => 'Vardefs erróneos - vínculo %s refiere para relación inválida',
  'LBL_SCAN_423_DESCR' => 'Vardef se define como campos compuestos que contienen subcampos, y uno de estos subcampos realmente no existe',
  'LBL_SCAN_423_LOG' => 'Subcampos de vardefs erróneos - %s refiere a subcampo erróneo %s',
  'LBL_SCAN_423_TITLE' => 'Subcampos de vardefs malos - %s es referente a subcampo malo %s',
  'LBL_SCAN_424_DESCR' => 'El archivo contiene HTML en fila',
  'LBL_SCAN_424_LOG' => 'Encontrar alineada HTML en %s en fila %s',
  'LBL_SCAN_424_TITLE' => 'Encontrar alineada HTML en %s en fila %s',
  'LBL_SCAN_425_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_425_LOG' => 'Encontrar "echo" en %s en fila %s',
  'LBL_SCAN_425_TITLE' => 'Encontrar "echo" en %s en fila %s',
  'LBL_SCAN_426_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_426_LOG' => 'Encontrar "print" en %s en fila %s',
  'LBL_SCAN_426_TITLE' => 'Encontrar "print" en %s en fila %s',
  'LBL_SCAN_427_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_427_LOG' => 'Encontrar "die/exit" en %s en fila %s',
  'LBL_SCAN_427_TITLE' => 'Encontrar "die/exit" en %s en fila %s',
  'LBL_SCAN_428_DESCR' => 'El código contiene esta función de producción de salida. Nota esta print_r(..., true) es permitida.',
  'LBL_SCAN_428_LOG' => 'Encontrar "print_r" en %s en fila %s',
  'LBL_SCAN_428_TITLE' => 'Encontrar "print_r" en %s en fila %s',
  'LBL_SCAN_429_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_429_LOG' => 'Buscar "var_dump" en %s en fila %s',
  'LBL_SCAN_429_TITLE' => 'Buscar "var_dump" en %s en fila %s',
  'LBL_SCAN_430_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_430_LOG' => 'Buscar generar buffering (%s) en %s en fila %s',
  'LBL_SCAN_430_TITLE' => 'Buscar generar buffering (%s) en %s en fila %s',
  'LBL_SCAN_432_DESCR' => 'El campo de &#39;nombre&#39; tiene otro tipo además del nombre, apellidos, varchar o id',
  'LBL_SCAN_432_LOG' => 'Vardefs erróneos - campo &#39;name&#39; es inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
  'LBL_SCAN_432_TITLE' => 'Vardefs erróneos - campo &#39;name&#39; es inválido &#39;%s&#39;, módulo - &#39;%s&#39;',
  'LBL_SCAN_501_DESCR' => 'Uno de los archivos principales no está presente en la instancia',
  'LBL_SCAN_501_LOG' => 'Archivo no encontrado: %s',
  'LBL_SCAN_501_TITLE' => 'Archivo not encontrado: %s',
  'LBL_SCAN_502_DESCR' => 'Uno de los archivos principales se ha modificado en esta instalación',
  'LBL_SCAN_502_LOG' => 'md5 incompatibilidad para %s, esperado %s',
  'LBL_SCAN_502_TITLE' => 'md5 incompatibilidad para %s, esperado %s',
  'LBL_SCAN_503_DESCR' => 'El módulo personalizado tiene el mismo nombre que uno de los nuevos módulos de Sugar',
  'LBL_SCAN_503_LOG' => 'Módulo personalizado con el mismo nombre para módulo Sugar7 : %s',
  'LBL_SCAN_503_TITLE' => 'Módulo personalizado con el mismo nombre para módulo Sugar7 : %s',
  'LBL_SCAN_504_DESCR' => 'La definición del campo Vardef omite el tipo',
  'LBL_SCAN_504_LOG' => 'Tipo de campo no encontrrado en módulo %s: %s',
  'LBL_SCAN_504_TITLE' => 'Tipo de campo no encontrrado en módulo %s: %s',
  'LBL_SCAN_505_DESCR' => 'El tipo de campo no gota se cambia a campo tipo gota. Esto no es permitido porque los tipos gota no pueden poner ser indexado y deberíamos tener filtros de confianza en este campo por ser indexado.',
  'LBL_SCAN_505_LOG' => 'Tipo de cambio en %s para campo %s: de %s para %s',
  'LBL_SCAN_505_TITLE' => 'Tipo de cambio en %s para campo %s: de %s para %s',
  'LBL_SCAN_506_DESCR' => '$this es usado en el archivo metadata. Desde el archivo metadata es cargado en el contexto diferente en Sugar 7, en el que pudiera fallar.',
  'LBL_SCAN_506_LOG' => '$this uso en %s',
  'LBL_SCAN_506_TITLE' => '$this uso en %s',
  'LBL_SCAN_507_DESCR' => 'Vardef se define como campos compuestos que contienen subcampos, y uno de estos subcampos realmente no existe',
  'LBL_SCAN_507_LOG' => 'Subcampos de vardefs erróneos - %s refiere a subcampo erróneo %s',
  'LBL_SCAN_507_TITLE' => 'Subcampos de vardefs malos - %s es referente a subcampo malo %s',
  'LBL_SCAN_508_DESCR' => 'El archivo contiene HTML en línea',
  'LBL_SCAN_508_LOG' => 'Encontrar alineación HTML en %s en fila %s',
  'LBL_SCAN_508_TITLE' => 'Encontrar alineada HTML en %s en fila %s',
  'LBL_SCAN_509_DESCR' => 'El código contiene esta función de producción de salida',
  'LBL_SCAN_509_LOG' => 'Encontrar "echo" en %s en fila %s',
  'LBL_SCAN_509_TITLE' => 'Encontrar "echo" en %s en fila %s',
  'LBL_SCAN_510_DESCR' => 'El código contiene esta función de producción de salida',
  'LBL_SCAN_510_LOG' => 'Encontrar "print" en %s en fila %s',
  'LBL_SCAN_510_TITLE' => 'Encontrar "print" en %s en fila %s',
  'LBL_SCAN_511_DESCR' => 'El código contiene esta función de producción de salida',
  'LBL_SCAN_511_LOG' => 'Encontrar "die/exit" en %s en fila %s',
  'LBL_SCAN_511_TITLE' => 'Encontrar "die/exit" en %s en fila %s',
  'LBL_SCAN_512_DESCR' => 'El código contiene esta función de producción de salida. Nota esta print_r(..., true) es permitida.',
  'LBL_SCAN_512_LOG' => 'Encontrar "print_r" en %s en fila %s',
  'LBL_SCAN_512_TITLE' => 'Encontrar "print_r" en %s en fila %s',
  'LBL_SCAN_513_DESCR' => 'El código contiene esta función de producción de salida',
  'LBL_SCAN_513_LOG' => 'Buscar "var_dump" en %s en fila %s',
  'LBL_SCAN_513_TITLE' => 'Buscar "var_dump" en %s en fila %s',
  'LBL_SCAN_514_DESCR' => 'El código contiene esta función producción-salida',
  'LBL_SCAN_514_LOG' => 'Buscar generar buffering (%s) en %s en fila %s',
  'LBL_SCAN_514_TITLE' => 'Buscar generar buffering (%s) en %s en fila %s',
  'LBL_SCAN_515_DESCR' => 'La verificación de script ha fallado, significa que el instaScannerMeta.phpnce probablemente contiene código PHP malo que el script trata de cargar.',
  'LBL_SCAN_515_LOG' => 'Falla script: %s',
  'LBL_SCAN_515_TITLE' => 'Falla de script: %s',
  'LBL_SCAN_516_LOG' => 'Archivos previamente removidos encontrados en referencia: %s',
  'LBL_SCAN_517_DESCR' => 'El paquete detectado se ha colocado en lista negra como no soportado en Sugar 7',
  'LBL_SCAN_517_LOG' => 'Integración Incompatible - %s %s',
  'LBL_SCAN_517_TITLE' => 'Integración Incompatible - %s %s',
  'LBL_SCAN_518_DESCR' => 'Módulos Feeds o iFrames detectados, no deberían existir más',
  'LBL_SCAN_518_LOG' => 'Encontrado CustomCode %s en %s',
  'LBL_SCAN_518_TITLE' => 'Encontrado CustomCode %s en %s',
  'LBL_SCAN_519_DESCR' => 'El módulo Stock de Sugar tiene una de las extensiones que no es soportada para incremento, como enrutamiento personalizado, control de acceso, Javascript, etc.',
  'LBL_SCAN_519_LOG' => 'Extensión dir %s detectada',
  'LBL_SCAN_519_TITLE' => 'Extensión dir %s detectado',
  'LBL_SCAN_520_DESCR' => 'Este logic hook no está soportado nunca más en Sugar 7',
  'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame detectado',
  'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame detectado',
  'LBL_SCAN_521_DESCR' => 'Este logic hook no está soportado nunca más en Sugar 7',
  'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer detectado',
  'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer detectado',
  'LBL_SCAN_522_DESCR' => 'Los datos de subpanel son traídos por una función, por el momento no soportamos el mejoramiento.',
  'LBL_SCAN_522_LOG' => 'Encontrado &#39;get_subpanel_data&#39; con &#39;function:&#39; en valor %s',
  'LBL_SCAN_522_TITLE' => 'Encontrado &#39;get_subpanel_data&#39; con &#39;function:&#39; en valor %s',
  'LBL_SCAN_523_DESCR' => 'El archivo viejo usa por referencia el pase de parámetro, que puede llevar mensajes de error mostrados (y así estropear el RESTO)',
  'LBL_SCAN_523_LOG' => 'Parámetro By-ref en archivo adjunto %s función %s',
  'LBL_SCAN_523_TITLE' => 'Parámetro By-ref en archivo adjunto %s función %s',
  'LBL_SCAN_524_DESCR' => 'Campo se define como función de producción  HTML y que no se puede autoconvertir (sabemos cómo convertir algunos campos del origen como correos electrónicos y moneda)',
  'LBL_SCAN_524_LOG' => 'Función Vardef HTML %s en módulo $module para campo %s',
  'LBL_SCAN_524_TITLE' => 'Función Vardef HTML %s en módulo $module para campo %s',
  'LBL_SCAN_525_DESCR' => 'Vardef define enum como un resultado de la función de HTML, que no está soportado por Sugar7',
  'LBL_SCAN_525_LOG' => 'Función HTML Vardef en %s',
  'LBL_SCAN_525_TITLE' => 'Función HTML Vardef en %s',
  'LBL_SCAN_526_DESCR' => 'Esta Lista contiene valores de Nombre de Artículo que previene el subir de categoría.',
  'LBL_SCAN_526_LOG' => 'Vardefs erróneos - campos multinúmero &#39;%s&#39; con lista de opciones &#39;%s&#39; claves que contienen carácteres  - &#39;%s&#39; incompatibles',
  'LBL_SCAN_526_TITLE' => 'vardefs malos - campos multinúmero &#39;%s&#39; con lista de opciones &#39;%s&#39; claves que contienen carácteres  - &#39;%s&#39; incompatibles',
  'LBL_SCAN_527_LOG' => 'Nombre de tabla en haba %s no acierta el atributo de tabla en la %s/vardefs.php',
  'LBL_SCAN_528_DESCR' => 'Campo de Cita/Fecha de Cita/Tiempo con valor incorrecto display_default como -none-',
  'LBL_SCAN_528_LOG' => 'Campo %s de módulo %s tiene valor incorrecto display_default',
  'LBL_SCAN_528_TITLE' => 'Campo %s de módulo %s tiene valor incorrecto display_default',
  'LBL_SCAN_901_DESCR' => 'Instancia lista para actualización Sugar 7',
  'LBL_SCAN_901_LOG' => 'Instancia lista para actualización Sugar 7',
  'LBL_SCAN_901_TITLE' => 'Instancia actualizada lista para Sugar 7',
  'LBL_SCAN_999_DESCR' => 'Falla desconocida, por favor contacte a soporte',
  'LBL_SCAN_999_LOG' => 'Falla desconocida, por favor contacte a soporte',
  'LBL_SCAN_999_TITLE' => 'Falla desconocida, por favor contacte soporte',
);
