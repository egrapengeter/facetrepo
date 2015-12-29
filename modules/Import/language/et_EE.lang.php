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
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Unable to un-publish a map owned by another user. You own an Import map by the same name.',
  'LBL_NOLOCALE_NEEDED' => 'No locale conversion needed',
  'LBL_NO_PRECHECK' => 'Native Format mode',
  'LBL_STRICT_CHECKS' => 'Use strict ruleset (Check Email addresses and phone numbers too)',
  'LBL_DEBUG_MODE' => 'Enable debugging mode',
  'LBL_NOT_MULTIENUM' => 'Not a MultiEnum',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Unable to un-publish a map owned by another user. You own an Import Map by the same name.',
  'LBL_CUSTOM_DELIMITED' => 'Custom delimited file',
  'LBL_CUSTOM_TAB' => 'Custom tab delimited file',
  'LBL_FAILURE' => 'Import ebaõnnestus:',
  'LBL_NO_IMPORT_TO_UNDO' => 'There was no import to undo.',
  'ERR_MULTIPLE_PARENTS' => 'You can only have one Parent ID defined',
  'LBL_MY_PUBLISHED_HELP' => 'A published mapping specifies a previously used combination of a specific data source and a set of database fields to map to the fields in the import file.',
  'LBL_ENCLOSURE_HELP' => 'The qualifier character is used to enclose the intended field content, including any characters that are used as delimiters.<br /><br />Example: If the delimiter is a comma (,) and the qualifier is a quotation mark ("),<br />"Cupertino, California" is imported into one field in the application and appears as Cupertino, California.<br />If there are no qualifier characters, or if a different character is the qualifier,<br />"Cupertino, California" is imported into two adjacent fields as "Cupertino and "California".<br /><br />Note: The import file might not contain any qualifier characters.<br />The default qualifier character for comma- and tab- delimited files created in Excel is a quotation mark.',
  'LBL_HEADER_ROW_HELP' => 'Imporditud faili päises on välja tiitlid.',
  'LBL_DEFAULT_VALUE_HELP' => 'Indicate a value to use for the field in the created or updated record if the field in the import file contains no data.',
  'LBL_ROW_HELP' => 'This is the data in the first non-header row of the import file.',
  'LBL_SAVE_MAPPING_HELP' => 'Enter a name for the set of database fields used above for mapping to the fields in the import file fields.<br />The set of fields, including the order of the fields and the data souce selected in Import Step 1, will be saved during the import attempt.<br />The saved mapping can then be selected in Import Step 1 to for another import.',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'The record could not be updated due to a permissions issue',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Oled kindel, et soovid seda kaardistust kustutada?',
  'LBL_GOOD_FILE' => 'Import File Read Successfully',
  'LBL_IMPORT_TYPE' => 'Import Action',
  'LBL_NONE' => 'None',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_' => '',
  'LBL_OPTION_ENCLOSURE_NONE' => 'None',
  'LBL_IMPORT_RECORDS_OF' => 'of',
  'LBL_CURRENCY_SIG_DIGITS' => 'Currency Significant Digits',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Name Display Format',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Kirjed jäetakse vahele vea tüttu',
  'LBL_UPDATE_SUCCESSFULLY' => 'Kirjed on edukalt uuendatud',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Kirjed on edukalt loodud',
  'LBL_STEP_4_TITLE' => 'Samm 4: Impordi fail',
  'LBL_STEP_5_TITLE' => 'Samm 5; Vaata tulemusi',
  'LBL_CUSTOM_ENCLOSURE' => 'Väljad on kvalifitseertud:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Avaldamine ei õnnestunud. Siin on teine samanimeline avaldatud Import map.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Selle mooduli tüübi jaoks pole importimised määratud',
  'LBL_IMPORT_BUTTON' => 'Loo kirjed',
  'LBL_UPDATE_BUTTON' => 'Loo ja uuenda kirjed',
  'LBL_ERROR_INVALID_BOOL' => 'Kehtetu väärtus (peab olema 1 või 0)',
  'LBL_NO_ID' => 'ID on nõutud',
  'LBL_PRE_CHECK_SKIPPED' => 'Ülekontroll vahelejäetud',
  'LBL_IMPORT_ERROR' => 'Ilmnesid impordi vead',
  'LBL_ERROR' => 'Viga:',
  'LBL_FIELD_NAME' => 'Välja nimi',
  'LBL_VALUE' => 'Väärtus',
  'LBL_ROW_NUMBER' => 'Rea number',
  'LBL_REQUIRED_VALUE' => 'Nõutud väärtus on puudu',
  'LBL_ID_EXISTS_ALREADY' => 'ID eksisteerib juba selles tabelis',
  'LBL_ASSIGNED_USER' => 'Kui kasutajat ei eksisteeri, siis kasuta olemasolevat kasutajat',
  'LBL_SHOW_HIDDEN' => 'Näita välju, mis pole normaalselt imporditav',
  'LBL_UPDATE_RECORDS' => 'Uuenda olemasolevaid kirjeid importimise asemel',
  'LBL_TEST' => 'Testi importi (ära salvesta või muuda andmeid)',
  'LBL_TRUNCATE_TABLE' => 'Tühjenda tabel enne importi (kustuta kõik kirjed)',
  'LBL_RELATED_ACCOUNTS' => 'Ära loo seotud ettevõtteid',
  'LBL_NO_DATECHECK' => 'Jäta kuupäeva kontroll vahele (kiirem, ku ebaõnnestub, kui mõn kuupäev on vale)',
  'LBL_NO_WORKFLOW' => 'Ära ava töövoogu selle importimise käigus',
  'LBL_NO_EMAILS' => 'Ära saada e-kirja teavitusi selle importimise käigus',
  'LBL_ERROR_SELECTING_RECORD' => 'Viga kirje valimisel:',
  'LBL_ERROR_DELETING_RECORD' => 'Viga kirje kustutamisel:',
  'LBL_NOT_SET_UP' => 'selle mooduli tüübi jaoks pole importimine määratud',
  'LBL_ARE_YOU_SURE' => 'Kas oled kindel? See kustutab kogu info selles moodulis.',
  'LBL_NO_RECORD' => 'Kirjeid uuendamiseks selle ID-ga pole',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'selle mooduli tüübi jaoks pole importimine määratud',
  'LBL_ERROR_INVALID_ID' => 'Antud ID on välja jaoks liialt pikk (maksimaalne pikkus on 36 sümbolit)',
  'LBL_ERROR_INVALID_PHONE' => 'Kehtetu telefoninumber',
  'LBL_ERROR_INVALID_NAME' => 'Rida on väljale mahtumiseks liiga pikk',
  'LBL_ERROR_INVALID_VARCHAR' => 'Rida on väljale mahtumiseks liiga pikk',
  'LBL_ERROR_INVALID_DATE' => 'Kehtetu andmerida',
  'LBL_ERROR_INVALID_DATETIME' => 'Kehtetu kuupäev',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Kehtetu kuupäev',
  'LBL_ERROR_INVALID_TIME' => 'Kehtetu aeg',
  'LBL_ERROR_INVALID_INT' => 'Kehtetu täisarvuline väärtus',
  'LBL_ERROR_INVALID_NUM' => 'Kehtetu numbriline väärtus',
  'LBL_ERROR_INVALID_EMAIL' => 'Kehtetu e-posti aadress',
  'LBL_ERROR_INVALID_USER' => 'Kehtetu kasutajanimi või ID',
  'LBL_ERROR_INVALID_TEAM' => 'Kehtetu meeskonna nimi või ID',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Kehtetu ettevõtte nimi või ID',
  'LBL_ERROR_INVALID_RELATE' => 'Kehtetu seotud väli',
  'LBL_ERROR_INVALID_CURRENCY' => 'Kehtetu valuuta väärtus',
  'LBL_ERROR_INVALID_FLOAT' => 'Kehtetu liikuv murdarv',
  'LBL_ERROR_NOT_IN_ENUM' => 'Väärtust pole rippmenüü loendis. Lubatud väärtused on:',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Selle mooduli tüübi jaoks pole importimine määratud',
  'LBL_IMPORT_MODULE_NO_USERS' => 'Hoiatus: Sinu süsteemis pole kasutajaid defineeritud. Kui sa impordid ilma kasutajaid esmalt lisamata, siis kõik kirjed on administraatori omad.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Ei saa avaldada. Samanimeline Import Map on juba avaldatud.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Kataloog',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'ei eksisteeri või pole kirjutatav',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Faili üleslaadimine ei olnud edukas. Võib olla, et \'upload_max_filesize\' sätted sinu php.ini failis on seadistatud väikse numbriga',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fail on liiga suur. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Baidid. Muuda $sugar_config[\'upload_maxsize\'] in config.php',
  'LBL_MODULE_NAME' => 'Impordi',
  'LBL_TRY_AGAIN' => 'Proovi uuesti',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Sa ei saa importida süsteemi administraatori kasutajat',
  'ERR_MULTIPLE' => 'Mitmel veerul on sarnane välja nimi.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Puuduvad nõutavad väljad:',
  'ERR_MISSING_MAP_NAME' => 'Puuduv kohandatud kaardistamisnimi',
  'ERR_SELECT_FULL_NAME' => 'Sa ei saa valida täisnime, kui valitud on eesnimi ning perekonnanimi',
  'ERR_SELECT_FILE' => 'Vali fail üleslaadmiseks:',
  'LBL_SELECT_FILE' => 'Vali fail:',
  'LBL_CUSTOM' => 'Kohanda',
  'LBL_CUSTOM_CSV' => 'Kohanda komaga eraldatud fail',
  'LBL_CSV' => 'Komaga eraldatud fail',
  'LBL_TAB' => 'Sakiga eraldatud fail',
  'LBL_CUSTOM_DELIMITER' => 'Valjad on eraldatud:',
  'LBL_FILE_OPTIONS' => 'Faili suvandid',
  'LBL_DONT_MAP' => '-- Ära kaardista seda välja --',
  'LBL_STEP_1_TITLE' => 'Samm 1: Vali Andmeallikas ja Impordi tegevus',
  'LBL_WHAT_IS' => 'Mis on andmeallikas?',
  'LBL_ACT' => 'Tegutse!',
  'LBL_MY_SAVED' => 'Minu salvestatud kaardistamised:',
  'LBL_PUBLISH' => 'Avalda',
  'LBL_DELETE' => 'Kustuta',
  'LBL_PUBLISHED_SOURCES' => 'Avaldatud kaardistamised:',
  'LBL_UNPUBLISH' => 'Ei avalda',
  'LBL_NEXT' => 'Järgmine >',
  'LBL_BACK' => '< Tagasi',
  'LBL_STEP_2_TITLE' => 'Samm 2: Lae üles Impordifail',
  'LBL_HAS_HEADER' => 'Päis:',
  'LBL_NOTES' => 'Märkused:',
  'LBL_NOW_CHOOSE' => 'Nüüd vali fail importimiseks:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ja 2000 saavad importida andmed Komaga eraldatud väärtuste formaadis, mida saab kasutada sinu süsteemi andmete importimiseks. Andmete eksportimiseks Outlookist järgi järgnevaid samme allpool:',
  'LBL_OUTLOOK_NUM_1' => 'Start Outlook',
  'LBL_OUTLOOK_NUM_2' => 'Vali Faili menüü, siis Impordi ja Ekspordi...menüü suvandi',
  'LBL_OUTLOOK_NUM_3' => 'Vali Ekspordi faili ning kliki Järgmine',
  'LBL_OUTLOOK_NUM_4' => 'Vali Komaga eraldatud väärtused (Windows) ja kliki Järgmine.<br />Märkus:Sinult võidakse küsida eksporditava komponendi installimist',
  'LBL_OUTLOOK_NUM_5' => 'Vali Kontaktide kaust ja kliki Järgmine. Sa saad valida erinevaid kontaktide kaustu, kui su kontaktid on paigutatud mitmetesse kaustadesse.',
  'LBL_OUTLOOK_NUM_6' => 'Vali failinimi ja kliki Edasi',
  'LBL_OUTLOOK_NUM_7' => 'Kliki Lõpeta',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com saab eksportida andmeid Komaga eraldatud väärtuste formaadis, mida saab kasutada sinu süsteemi andmete importimiseks, Andmete eksportimiseks Salesforce.com rakendusest järgi järgnevaid samme:',
  'LBL_SF_NUM_1' => 'Ava oma brauser, mine http://www.salesforce.com ja logi sisse oma e-posti aadressi ja parooliga',
  'LBL_SF_NUM_2' => 'Kliki Aruanded lingil menüü ülaosas.',
  'LBL_SF_NUM_3' => 'Ettevõtete eksportimiseks: Kliki lingil Aktiivsed ettevõtted<br />Kontaktide eksportimiseks: Kliki lingil Mailinglist',
  'LBL_SF_NUM_4' => 'Sammul 1: Vali oma aruande tüüp ja vali Tabulatsiooni aruanne ja kliki Edasi',
  'LBL_SF_NUM_5' => 'Sammul 2: Vali aruande veerud, vali veerud, mida soovid eksportida ja kliki Edasi',
  'LBL_SF_NUM_6' => 'Sammul 3: Vali info summeerimiseks, lihtsalt kliki Edasi',
  'LBL_SF_NUM_7' => 'Sammul 4: telli aruande veerud, lihtsalt kliki Edasi',
  'LBL_SF_NUM_8' => 'Sammul 5: Vali oma aruande kriteeriumid, vali piisavalt kauge kuupäev minevikust kõigi oma ettevõtete hõlmamiseks. Sa saad eksportida ka alamgrupi kontosid kasutades rohkem laiendatud kriteeriume. Kui oled lõpetanud kliki Käivita aruanne',
  'LBL_SF_NUM_9' => 'Aruanne genereeritakse ning leht kuvatakse Aruande loomise staatus: Lõetatud. Nüüd kliki Ekspordi Excelisse',
  'LBL_SF_NUM_10' => 'Ekspordi Aruandes; Ekspordi faili formaat käskluse jaoks vali: Komaga eraldatud .csv. Kliki ekspordi.',
  'LBL_SF_NUM_11' => 'Ekspordifaili salvestamiseks sinu arvutisse ilmub dialoogiaken.',
  'LBL_IMPORT_ACT_TITLE' => 'Tegutse! Saab eksportida andmed Komaga eraldatud väärtuste formaati, mida saab kasutada andmete importimiseks süsteemi. Andmete eksportimiseks kliki Tegutse!, järgi järgnevaid samme allpool:',
  'LBL_ACT_NUM_1' => 'Algata Tegutse!',
  'LBL_ACT_NUM_2' => 'Vali Fail menüü, Andmevahetus menüü suvand, siis Ekspordi... menüü suvand',
  'LBL_ACT_NUM_3' => 'Vali faili tüüp Teksti-eraldus',
  'LBL_ACT_NUM_4' => 'Vali failinimi ja asukoht eksporditud andmete jaoks ja kliki Edasi',
  'LBL_ACT_NUM_5' => 'Vali Kontakti kirjed ainult',
  'LBL_ACT_NUM_6' => 'Kliki Suvandid... lingil',
  'LBL_ACT_NUM_7' => 'Vali Koma kui väljaeraldussümbol',
  'LBL_ACT_NUM_8' => 'Kliki Jah, ekspordi faili nimed ja kliki OK',
  'LBL_ACT_NUM_9' => 'Kliki Edasi',
  'LBL_ACT_NUM_10' => 'Vali Kõik kirjed ja siis kliki Lõpeta',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Paljud rakendused lubavad sul eksportida andmeid Komaga eraldatud tekstifail (.scv) nende järgnevate üldiste sammude kaudu:',
  'LBL_CUSTOM_NUM_1' => 'Käivita rakendus ning ava andmefail',
  'LBL_CUSTOM_NUM_2' => 'Vali Salvesta... või Ekspordi... menüü suvand',
  'LBL_CUSTOM_NUM_3' => 'Salvesta fail CSV või Komaga eraldatud väärtuste formaati',
  'LBL_IMPORT_TAB_TITLE' => 'Paljud rakendused lubavad sul eksportida andmed Tab Delimited text file (.tsv or .tab) järgides neid üldisi samme:',
  'LBL_TAB_NUM_1' => 'Käivita rakendus ning ava andmefail',
  'LBL_TAB_NUM_2' => 'Vali Salvesta... või Ekspordi..menüü suvand',
  'LBL_TAB_NUM_3' => 'Salvesta fail TSV või Tab separated Values formaadis',
  'LBL_STEP_3_TITLE' => 'Samm 3: Kinnita väljad ja impordi',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Allolevast loendist vali importaili väljad, mis peaksid olema imporditud igast süsteemi väljast. Kui oled lõpetanud, kliki Impordi nüüd:',
  'LBL_DATABASE_FIELD' => 'Andmebaasi väli',
  'LBL_HEADER_ROW' => 'Päise rida',
  'LBL_ROW' => 'Rida',
  'LBL_SAVE_AS_CUSTOM' => 'Salvesta kui Kohandatud kaardistamine:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Kohandatud kaardistamise nimi:',
  'LBL_CONTACTS_NOTE_1' => 'Kas perekonnanimi või Täisnimi peab olema kaardistatud.',
  'LBL_CONTACTS_NOTE_2' => 'Kui täisnimi on kaardistatud, siis Eesnime ja Perekonnanime ignoreeritakse.',
  'LBL_CONTACTS_NOTE_3' => 'Kui täisnimi on kaardistatud, siis andmebaasi sisestamisel jagatakse Täisnime andmed Eesnime ja Perekonnanime vahel.',
  'LBL_CONTACTS_NOTE_4' => 'Andmebaasi sisestamsel need väljad, mis lõpevad Aadress Tänav 2 ja Aadress tänav 3 liidetakse kokku koos põhiaadressiga tänava väljal.',
  'LBL_ACCOUNTS_NOTE_1' => 'Andmebaasi sisestamsel need väljad, mis lõpevad Aadress Tänav 2 ja Aadress tänav 3 liidetakse kokku koos põhiaadressiga tänava väljal.',
  'LBL_REQUIRED_NOTE' => 'Nõutud väli (väljad)',
  'LBL_IMPORT_NOW' => 'Impordi nüüd',
  'LBL_CANNOT_OPEN' => 'Ei saa avada imporditud faili lugemise jaoks',
  'LBL_NOT_SAME_NUMBER' => 'Sinu failis polnud sama väljade arvu rea kohta',
  'LBL_NO_LINES' => 'Sinu impordifailis polnud ridu',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Impordifail on juba töödeldud või seda ei eksisteeri',
  'LBL_SUCCESS' => 'Edu:',
  'LBL_SUCCESSFULLY' => 'Edukalt imporditud',
  'LBL_LAST_IMPORT_UNDONE' => 'Sinu viimast importimist ei tehtud',
  'LBL_FAIL' => 'Ebaõnnestumine:',
  'LBL_RECORDS_SKIPPED' => 'Kirjed jäeti vahele, kuna üks või enam välju oli puudu',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Kirjed jäeti vahele, kuna Id´d kas ei eksisteerinud või oli pikemad kui 36 ühikut',
  'LBL_RESULTS' => 'Tulemused',
  'LBL_IMPORT_MORE' => 'Impordi rohkem',
  'LBL_FINISHED' => 'Tagasi',
  'LBL_UNDO_LAST_IMPORT' => 'Tühista viimane import',
  'LBL_LAST_IMPORTED' => 'Viimati loodud',
  'LBL_DUPLICATES' => 'Leiti duplikaadid',
  'LNK_DUPLICATE_LIST' => 'Duplikaatide allalaadimiste loend',
  'LNK_ERROR_LIST' => 'VIigade allalaadimiste loend',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Allaladimiste kirjed, mida ei saa importida.',
  'LBL_UNIQUE_INDEX' => 'Vali duplikaatide võrdluse indeks',
  'LBL_VERIFY_DUPS' => 'Kontrolli duplikaatsissekandeid valitud indeksite vastu.',
  'LBL_INDEX_USED' => 'Kasutatud indeksid:',
  'LBL_INDEX_NOT_USED' => 'Kasutamata indeksid:',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Faili ei laetud edukalt üles. Kontrolli faili õiguseid oma Sugari paigalduse cache kataloogis.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Unikaalne ID number',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Nimi või ID',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefoninumber',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Meeskonna nimi või ID',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Igasugune tekst',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Igasugune tekst',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Igasugune tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Aeg',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Kuupäev',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Kuupäev',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Kasutajanimi või ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' või \'1\'',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Loend',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-posti aadress',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numbriline (mitte kümnendik)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numbriline (mitte kümnendik)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numbriline (mitte kümnendik)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numbriline (mitte kümnendik)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numbriline (kümnendikud lubatud)',
  'LBL_DATE_FORMAT' => 'Kuupäeva formaat:',
  'LBL_TIME_FORMAT' => 'Aja formaat:',
  'LBL_TIMEZONE' => 'Ajatsoon:',
  'LBL_ADD_ROW' => 'Lisa väli',
  'LBL_REMOVE_ROW' => 'Eemalda väli',
  'LBL_DEFAULT_VALUE' => 'Vaikeväärtus',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Näita laiendatud suvandeid',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Peida laiendatud suvandid',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Näita veergude eelvaadet',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Peida veergude eelvaade',
  'LBL_SAVE_MAPPING_AS' => 'Salvesta kaardistamine',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Üksik pakkumine (\')',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Topeltpakkumine (\')',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Teine:',
  'LBL_IMPORT_COMPLETE' => 'Importimine lõpetatud',
  'LBL_IMPORT_RECORDS' => 'Kirjete importimine',
  'LBL_IMPORT_RECORDS_TO' => 'saaja',
  'LBL_CURRENCY' => 'Valuuta',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Näide',
  'LBL_NUMBER_GROUPING_SEP' => '1000 eraldaja',
  'LBL_DECIMAL_SEP' => 'Kümnendkoha sümbol',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"s" Salutation, "f" First Name, "l" Last Name',
  'LBL_CHARSET' => 'Faili kodeering',
  'LBL_MY_SAVED_HELP' => 'Salvestatud kaardistamine määratleb viimati kasutatud andmeallika kombinatsiooni ja määrab andmebaasi väljad impordifaili kaardistamiseks.<br />Kliki Avalda, et teha kaardistamine võimalikuks ka teistele kasutajatele.<br />Kliki Un-Publish, et teha kaardistamine teistele kasutajatele võimatuks',
  'LBL_DELIMITER_COMMA_HELP' => 'Vali see suvand, kui välju eraldav sümbol impordifailis on koma, või faililaiend on .csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Vali see suvand, kui välju eraldav sümbol impordifailis on TAB, või faililaiend on .txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Vali see suvand, kui välju eraldav sümbol impordifailis on koma või TAB ja sisesta sümbol kõrvalolevale väljale.',
  'LBL_DATABASE_FIELD_HELP' => 'Vali andmebaasis olevate väljade loendist mooduli jaoks väli.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Täpsusta importfaili sätteid, et tagada korrektne andmete import. Need seadistused ei eira sinu eelistusi. Loodud või uuendatud kirjed sisaldavad sätteid, mis on määratud teie Minu konto lehel.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Impordi Faili sätted',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Vali impordi faili väljad korduvkontrolliks. <br />Kui andmed valitud väljades kattuvad olemasolevate kirjetega, siis uusi kirjeid duplikaatväljadele ei looda.<br />Read, mis sisaldavad duplikaatvälja andmeid identifitseeritakse Impordi tulemustes.',
  'LBL_IMPORT_STARTED' => 'Import alustatud:',
);

