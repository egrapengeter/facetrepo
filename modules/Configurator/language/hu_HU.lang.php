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
  'ADVANCED' => 'Összetett',
  'CURRENT_LOGO' => 'Jelenlegi logo:',
  'CURRENT_LOGO_HELP' => 'Ez a logó jelenik meg a Sugar alkalmazás láblécének bal sarkában.',
  'DEFAULT_CURRENCY' => 'Alapértelmezett pénznem',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 pénznem kódja',
  'DEFAULT_CURRENCY_NAME' => 'Pénznem neve',
  'DEFAULT_CURRENCY_SYMBOL' => 'Pénznem szimbóluma',
  'DEFAULT_DATE_FORMAT' => 'Alapértelmezett dátumformátum',
  'DEFAULT_DECIMAL_SEP' => 'Tizedesjel',
  'DEFAULT_LANGUAGE' => 'Alapértelmezett nyelv',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Ezres elválasztó',
  'DEFAULT_OC_STATUS' => 'Engedélyezi az offline klienst alapértelmezettként',
  'DEFAULT_SYSTEM_SETTINGS' => 'Felhasználói felület',
  'DEFAULT_THEME' => 'Alapértelmezett téma',
  'DEFAULT_TIME_FORMAT' => 'Alapértelmezett időformátum',
  'DEVELOPER_MODE' => 'Fejlesztői mód',
  'DISPLAY_RESPONSE_TIME' => 'Szerver válaszidő kijelzése',
  'ERR_ALERT_FILE_UPLOAD' => 'Hiba a kép feltöltése közben.',
  'ERR_DELETE_CORE_FILE' => 'HIBA: alapvető betűtípust nem lehet törölni.',
  'ERR_EZPDF_DISABLE' => 'Figyelem: az EZPDF osztály le van tiltva a config táblából és PDF osztályként van beállítva. Kérem, mentse ezt az űrlapot a TCPDF, PDF osztályként történő beállításához, és térjen vissza egy stabil állapotba.',
  'ERR_FONT_ALREADY_EXIST' => 'HIBA: ez a betűkészlet már létezik. Korábbi állapot visszaállítása...',
  'ERR_FONT_EMPTYFILE' => 'HIBA: üres fájlnév!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'nem létezik, vagy nem könyvtár.',
  'ERR_FONT_MAKEFONT' => 'HIBA: betűtípus hiba',
  'ERR_FONT_NOT_WRITABLE' => 'nem írható.',
  'ERR_FONT_UNKNOW_TYPE' => 'HIBA: ismeretlen betűtípus:',
  'ERR_LOADFONTFILE' => 'HIBA: betűkészlet fájl betöltési hiba.',
  'ERR_MISSING_CIDINFO' => 'A mező CID információja nem lehet üres.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'HIBA: nincs elérhető egyéni font!',
  'ERR_NO_FONT_PATH' => 'HIBA: nincs elérhető font!',
  'ERR_PDF_NO_UPLOAD' => 'Hiba a betűtípus vagy a metrikus file feltöltése közben.',
  'HEAD_MAGNIFICATION' => 'Head nagyítás',
  'HEAD_MAGNIFICATION_INFO' => 'Nagyítási tényező a címekhez.',
  'IMAGES' => 'Logók',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Ennek a fájlnak nem megfelelő a kiterjesztése.',
  'K_CELL_HEIGHT_RATIO' => 'Cellamagasság aránya',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Ha egy cella magassága kisebb lenne, mint a Betűmagasság x Cellamagasság aránya, akkor a cella magassága meg lesz feleltetve ezzel. A képlet igaz lesz arra az esetre is, ha a cellának nincs meghatározva a magassága.',
  'K_SMALL_RATIO' => 'Kisbetű tényező',
  'K_SMALL_RATIO_INFO' => 'Csökkentő tényező kisbetűkhöz.',
  'K_TITLE_MAGNIFICATION' => 'Cím nagyítása',
  'K_TITLE_MAGNIFICATION_INFO' => 'Cím nagyítása, figyelembevéve a fő betűméretet.',
  'LBL_ADDFONTRESULT_TITLE' => 'A betűtípus hozzáadásának eredménye',
  'LBL_ADDFONT_TITLE' => 'PDF betűtípus hozzáadása',
  'LBL_ADD_FONT' => 'Betűtípus hozzáadása',
  'LBL_ADD_FONT_BUTTON' => 'Hozzáadás',
  'LBL_ADMIN_WIZARD' => 'Admin varázsló',
  'LBL_ALERT_JPG_IMAGE' => 'A képfájl formátuma JPEG kell, hogy legyen. Töltsön fel egy új .jpg fájlt!',
  'LBL_ALERT_SIZE_RATIO' => 'A kép oldalaránya 1:1-10:1 között kell, hogy legyen. A kép átméretezésre kerül.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'A kép oldalaránya 3:1-20:1 között kell, hogy legyen. Töltsön fel egy új képet a kívánt arányszámmal!',
  'LBL_ALERT_TYPE_IMAGE' => 'A képfájl formátuma JPEG vagy PNG kell, hogy legyen. Töltsön fel egy új fájlt .jpg vagy .png kiterjesztéssel!',
  'LBL_ALL' => 'Bárki',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Engedélyezi a felhasználónak a kimenő emailek fiókjának az elérését:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ha ezt a beállítást választja, akkor minden felhasználó képes lesz emaileket küldeni ugyanazzal a kimenő email fiók hozzáféréssel, amin keresztül a rendszer értesítések és riasztások történnek. Ha a beállítás nincs kiválasztva, a felhasználók továbbra is használhatják a kimenő levelek szerverét a saját adataik megadásakor.',
  'LBL_ALLOW_USER_TABS' => 'Fülek elrejtésének engedélyezése a felhasználók számára',
  'LBL_BACK' => '< Vissza',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válassza ki az email szolgáltatót:',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Rendszerbeállítások',
  'LBL_DELETE' => 'Törlés',
  'LBL_DISALBE_CONVERT_LEAD' => 'Tiltsa le az ajánlás konvertálása parancsot a konvertált ajánlatokra vonatkozóan',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Amennyiben az ajánlás már eleve konvertált, az opció letiltása eltávolítja az ajánlás konvertálása parancsot.',
  'LBL_DISPLAYING_LOG' => 'Napló megjelenítése',
  'LBL_ENABLE_ACTION_MENU' => 'Parancsok megjelenítése a menüben',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Válassza ki, ha a parancsokat legördülő menüben szeretné megjeleníteni! Kiválasztás hiányában a parancsok külön gombokon fognak szerepelni.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'A kapcsolódó kontaktoktól származó emailek alpanelen történő megjelenítésének engedélyezése és tiltása.',
  'LBL_ENABLE_MAILMERGE' => 'Körlevél létrehozásának engedélyezése?',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange szerver port:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange szerver:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
  'LBL_FONTMANAGER_BUTTON' => 'PDF betűtípus kezelő',
  'LBL_FONTMANAGER_TITLE' => 'PDF betűtípus kezelő',
  'LBL_FONT_BOLD' => 'Félkövér',
  'LBL_FONT_BOLDITALIC' => 'Félkövér/Dőlt',
  'LBL_FONT_ITALIC' => 'Dőlt',
  'LBL_FONT_LIST_CIDINFO' => 'CID Információ',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Például:<ul><li>tradicionális kínai:<br><pre>$enc=\\$#39;UniCNS-UTF16-H\\$#39;;<br>$cidinfo=array(\\$#39;Registry\\$#39;=>\\$#39;Adobe\\$#39;, \\$#39;Ordering\\$#39;=>\\$#39;CNS1\\$#39;,\\$#39;Supplement\\$#39;=>0);<br>include(\\$#39;include/tcpdf/fonts/uni2cid_ac15.php\\$#39;);</pre></li><li>egyszerű kínai:<br><pre>$enc=\\$#39;UniGB-UTF16-H\\$#39;;<br>$cidinfo=array(\\$#39;Registry\\$#39;=>\\$#39;Adobe\\$#39;, \\$#39;Ordering\\$#39;=>\\$#39;GB1\\$#39;,\\$#39;Supplement\\$#39;=>2);<br>include(\\$#39;include/tcpdf/fonts/uni2cid_ag15.php\\$#39;);</pre></li><li>koreai:<br><pre>$enc=\\$#39;UniKS-UTF16-H\\$#39;;<br>$cidinfo=array(\\$#39;Registry\\$#39;=>\\$#39;Adobe\\$#39;, \\$#39;Ordering\\$#39;=>\\$#39;Korea1\\$#39;,\\$#39;Supplement\\$#39;=>0);<br>include(\\$#39;include/tcpdf/fonts/uni2cid_ak12.php\\$#39;);</pre></li><li>japán:<br><pre>$enc=\\$#39;UniJIS-UTF16-H\\$#39;;<br>$cidinfo=array(\\$#39;Registry\\$#39;=>\\$#39;Adobe\\$#39;, \\$#39;Ordering\\$#39;=>\\$#39;Japan1\\$#39;,\\$#39;Supplement\\$#39;=>5);<br>include(\\$#39;include/tcpdf/fonts/uni2cid_aj16.php\\$#39;);</pre></li></ul>További segítség: www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Beágyazott',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Ellenőrizze a betűtípus beágyazását a PDF fájlban',
  'LBL_FONT_LIST_ENC' => 'Kódolás',
  'LBL_FONT_LIST_FILENAME' => 'Fájlnév',
  'LBL_FONT_LIST_FILESIZE' => 'Betűméret (KB)',
  'LBL_FONT_LIST_NAME' => 'Név',
  'LBL_FONT_LIST_STYLE' => 'Stílus',
  'LBL_FONT_LIST_STYLE_INFO' => 'Betű stílusa',
  'LBL_FONT_LIST_TYPE' => 'Típus',
  'LBL_FONT_MOVE_DEFFILE' => 'Betűtípus leíró file áthelyezve:',
  'LBL_FONT_MOVE_FILE' => 'Betűtípus file áthelyezve:',
  'LBL_FONT_REGULAR' => 'Rendszeres',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Mag',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_GMAIL_LOGO' => 'Gmail logo',
  'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail email cím:',
  'LBL_IGNORE_SELF' => 'Önmaga figyelmenkívűl hagyása:',
  'LBL_IMG_RESIZED' => '(képernyőhöz átméretezve)',
  'LBL_IMPORT_MAX_RECORDS' => 'Importálás - a sorok megengedett maximális száma:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Adja meg, hány soros lehet egy importált fájl. Ha egy felhasználó ennél többet szeretne importálni, a rendszer figyelmeztetni fogja. Amennyiben nem ad meg értéket, végtelen számú sor lesz engedélyezve.',
  'LBL_IT_WILL_BE_IGNORED' => 'Figyelmen kívül lesz hagyva.',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Biztos, hogy törölni szeretné ezt a betűtípust?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Jelszó:',
  'LBL_LDAP_ADMIN_USER' => 'Felhasználónév:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Sugar felhasználó keresése. [Elképzelhető, hogy engedély kell hozzá.] Ha nem biztosított, névtelenül fog futni.',
  'LBL_LDAP_AUTHENTICATION' => 'Azonosítás:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Az LDAP-szerver használata szükséges egy adott felhasználó hitelesítéséhez.',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Felhasználók automatikus létrehozása:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ha nincs hitelesített felhasználó, a Sugar létre fog hozni egyet.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Kötés attribútuma:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'LDAP felhasználó hozzárendeléséhez<br />Például: [AD: userPrincipalName] [openLDAP: userPrincipalName] [Mac OS X: uid]',
  'LBL_LDAP_ENABLE' => 'LDAP autentikáció engedélyezése',
  'LBL_LDAP_ENC_KEY' => 'Titkosítási kulcs:',
  'LBL_LDAP_ENC_KEY_DESC' => 'SOAP hitelesítés LDAP használata esetén.',
  'LBL_LDAP_GROUP_ATTR' => 'Csoport tulajdonsága:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'A felhasználó tulajdonságai ellenében használt csoport tulajdonságokat magába foglaló szűrő. Például: memberUid',
  'LBL_LDAP_GROUP_DN' => 'Csoport DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Például: ou=csoport, dc=például, dc=com',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Csoport tagjai:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'A felhasználóknak egy meghatározott csoport tagjainak kell lenniük',
  'LBL_LDAP_GROUP_NAME' => 'Csoport neve:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Például cn=sugarcrm',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Felhasználó tulajdonsága:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'A személy egyedi azonosítója, amelyet a rendszer arra használ, hogy megállapítsa, az illető tagja-e a kiválasztott csoportnak. Például: uid',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login attribútum:',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'LDAP felhasználó kereséséhez<br />példa:[AD: userPrincipalName] [openLDAP: dn] [Mac OS X: dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Szerver:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Például: ldap.example.com vagy ldaps://ldap.example.com SSL-hez',
  'LBL_LDAP_SERVER_PORT' => 'Port száma:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Példa: 389 vagy 636 SSL-hez',
  'LBL_LDAP_TITLE' => 'LDAP támogatás',
  'LBL_LDAP_USER_DN' => 'Felhasználó DN:',
  'LBL_LDAP_USER_DN_DESC' => 'Példa: ou=emberek, dc=példa, dc=com',
  'LBL_LDAP_USER_FILTER' => 'Felhasználó szűrő:',
  'LBL_LDAP_USER_FILTER_DESC' => 'További szűrési paraméterek alkalmazása a felhasználó hitelesítésekor. Például: is_sugar_user=1 vagy (is_sugar_user=1) (is_sales=1)',
  'LBL_LEAD_CONV_OPTION' => 'Ajánlás konverzió lehetőségek',
  'LBL_LOADING' => 'Betöltés...',
  'LBL_LOCK_SUBPANELS_DESC' => 'Öröklődő beállítás mellett a modulok átveszik az itt megadott tulajdonságokat.',
  'LBL_LOGGER' => 'Naplózási beállítások',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Alapértelmezett dátumformátum',
  'LBL_LOGGER_FILENAME' => 'Naplófájl neve',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Hozzáfűzés a fájlnév után',
  'LBL_LOGGER_FILE_EXTENSION' => 'Kiterjesztés',
  'LBL_LOGGER_LOG_LEVEL' => 'Napló szintje',
  'LBL_LOGGER_MAX_LOGS' => 'Naplóbejegyzések maximális száma (görgetés előtt)',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximális naplóméret',
  'LBL_LOGO' => 'Logo',
  'LBL_LOGVIEW' => 'Napló megtekintése',
  'LBL_LOG_NOT_CHANGED' => 'A napló nem változott',
  'LBL_MAILMERGE' => 'Körlevél',
  'LBL_MAILMERGE_DESC' => 'Jelölje be, ha a gépén van Microsoft® Word® Sugar Plug-in.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Futtasson SMTP hitelesítést?',
  'LBL_MAIL_SMTPPASS' => 'SMTP jelszó:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP szerver:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP szerver típusa:',
  'LBL_MAIL_SMTPUSER' => 'SMTP felhasználónév:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Bejelentkezés helyének megjelölése',
  'LBL_MARK_POINT' => 'Pont kijelölése',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet automatikus frissítési intervallum',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ez a dashletek automatikus frissítései között eltelő minimális időintervallum. A Soha opció kiválasztása teljességgel letiltja az automatikus frissítést.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* A Jelentések modul csak a Sugar Mobile kliensek számára elérhető.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '* A Jelentések modul nem érhető el telefonos böngészőkön keresztül.',
  'LBL_MODULE_FAVICON' => 'A modul ikont használja favikonként',
  'LBL_MODULE_FAVICON_HELP' => 'Ha egy modulban van egy ikon a böngésző fülön, akkor a modul ikonját használja favikonként és ne sablonét.',
  'LBL_MODULE_ID' => 'Konfiguráló',
  'LBL_MODULE_NAME' => 'Rendszerbeállítások',
  'LBL_MODULE_NAME_SINGULAR' => 'Rendszerbeállítások',
  'LBL_MODULE_TITLE' => 'Felhasználói felület',
  'LBL_NEXT_' => 'Tovább>>',
  'LBL_NOTIFY_FROMADDRESS' => 'Feladó címe:',
  'LBL_NOTIFY_SUBJECT' => 'Email tárgya:',
  'LBL_OC_STATUS' => 'Alapértelmezett offline kliens állapot',
  'LBL_OC_STATUS_DESC' => 'Jelölje be, ha az összes felhasználónak engedélyezi a hozzáférést az offline klienshez. Ellenkező esetben felhasználói szinten tudja beállítani a hozzáférést.',
  'LBL_PDFMODULE_NAME' => 'PDF beállítások',
  'LBL_PDF_ENCODING_TABLE' => 'Kódolási táblázat',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'A kódolási táblázat neve.<br />Az opciót nem veszi figyelembe a rendszer TrueType Unicode, OpenType Unicode és szimbolikus betűkészletek használata során.<br />A kódolás párosítja össze a kódokat (0-tól 255-ig) és a betűtípusban szereplő karaktereket.<br />Az első 128 kód rögzített és az ASCII kódolásnak felel meg.',
  'LBL_PDF_FONT_FILE' => 'Betűtípus fájl',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf vagy .otf vagy .pfb fájl',
  'LBL_PDF_INSTRUCTIONS' => 'Utasítások',
  'LBL_PDF_METRIC_FILE' => 'Metrikus fájl',
  'LBL_PDF_METRIC_FILE_INFO' => 'afm vagy .ufm fájl',
  'LBL_PDF_PATCH' => 'Javítócsomag',
  'LBL_PDF_PATCH_INFO' => 'Kódolás egyéni beállítása. PHP tömb írása.<br />Például:<br />ISO-8859-1 nem tartalmazza az EURO szimbólumot. Ha a 164. sorba kívánja beszúrni, írja be: "array(164=>\\$#39;Euro\\$#39;)".',
  'LBL_PORTAL_ON' => 'Portál felhasználó kezelés engedélyezése',
  'LBL_PORTAL_ON_DESC' => 'Lehetővé teszi a felhasználók számára a portál felhasználók információihoz való hozzáférést a kapcsolati rekordokon keresztül. A portál felhasználók a Sugar Portálon keresztül elérik az Esetek, Hibák és a Tudásbázis modulok bejegyzéseit, illetve  egyéb, hasonló adatokat.',
  'LBL_PORTAL_TITLE' => 'Kliens önkiszolgáló portál',
  'LBL_PROXY_AUTH' => 'Hitelesítés?',
  'LBL_PROXY_HOST' => 'Proxy host',
  'LBL_PROXY_ON' => 'Használjon proxy szervert?',
  'LBL_PROXY_ON_DESC' => 'Állítsa be a proxy szerver címét és hitelesítési beállításait',
  'LBL_PROXY_PASSWORD' => 'Jelszó',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_PROXY_TITLE' => 'Proxy beállítások',
  'LBL_PROXY_USERNAME' => 'Felhasználónév',
  'LBL_REFRESH_FROM_MARK' => 'Frissítés a jelöléstől',
  'LBL_REG_EXP' => 'Regisztráció lejárata:',
  'LBL_REMOVE' => 'Eltávolítás',
  'LBL_RESTORE_BUTTON_LABEL' => 'Visszaállítás',
  'LBL_SEARCH' => 'Keres:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'A portál időkeret a Sugar Portal 6.5-ös verziójától kezdve működik.',
  'LBL_SKYPEOUT_ON' => 'Engedélyezze a SkypeOut® integrációt',
  'LBL_SKYPEOUT_ON_DESC' => 'Engedélyezi a felhasználóknak, hogy telefonszámra kattintva hívást kezdeményezzenek a SkypeOut® szolgáltatáson keresztül. A használathoz szintén szükséges a telefonszámok megfelelő formátuma: "+" "Körzetszám" "Telefonszám", például: +1 (555) 555-1234.',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_STATUS_FONT_ERROR' => 'HIBA: a betűtípus nincs hozzáadva. Tekintse meg a hibanaplót alább.',
  'LBL_STATUS_FONT_SUCCESS' => 'SIKERES: a betűtípus hozzá lett adva a SugaCRM-hez.',
  'LBL_SYSTEM_SETTINGS' => 'Rendszerbeállítások',
  'LBL_USE_REAL_NAMES' => 'Felhasználók teljes nevének megjelenítése',
  'LBL_USE_REAL_NAMES_DESC' => 'A felhasználó teljes nevét jelenítse meg a felhasználónév helyett a hozzárendelési mezőkben.',
  'LBL_VCAL_PERIOD' => 'vCal frissítési időintervalluma:',
  'LBL_WELCOME' => 'Üdvözöljük',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Listanézeti elem oldalanként',
  'LBL_WIRELESS_SERVER_URL' => 'Sugar Mobile Plus szerver',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Alpanelek oldalanként',
  'LBL_WIZARD_BACK_BUTTON' => '< Vissza',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Tovább',
  'LBL_WIZARD_FINISH' => 'Kattintson a Tovább gombra a felhasználói beállítások megadásához!<br /><br />A rendszerbeállítások módosításához, kérem, kattintson ide!',
  'LBL_WIZARD_FINISH_BUTTON' => 'Befejezés',
  'LBL_WIZARD_FINISH_TAB' => 'Befejezés',
  'LBL_WIZARD_FINISH_TITLE' => 'Az alapvető rendszerbeállítások megtörténtek.',
  'LBL_WIZARD_LOCALE_DESC' => 'Állítsa be az adatok megjelenítését a Sugarban a földrajzi elhelyezkedésének megfelelően. Ezek lesznek az alapértelmezett beállítások, de a felhasználók meg tudják adni a saját beállításaikat.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Következő >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Kihagy',
  'LBL_WIZARD_SMTP_DESC' => 'Adja meg azt az email fiókot, amin keresztül a hozzárendelési értesítések és a jelszavak kiküldhetők. A Sugar által küldött emaileket a felhasználók úgy fogják megkapni, mintha a megadott fiók küldte volna.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Adja meg cégének nevét és logóját a Sugar testreszabásához!',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'LBL_WIZARD_TITLE' => 'Admin varázsló',
  'LBL_WIZARD_WELCOME' => 'Kattintson a Tovább gombra a Sugar testreszabásához. Ha később szeretne egyéni beállításokat megadni, most kattintson a Kihagy gombra!',
  'LBL_WIZARD_WELCOME_TAB' => 'Üdvözöljük',
  'LBL_WIZARD_WELCOME_TITLE' => 'Üdvözli Önt a Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',
  'LBL_YAHOO_MAIL' => 'Yahoo Mail',
  'LBL_YOUR_IP_ADDRESS' => 'Az Ön IP címe',
  'LBL_YOUR_PROCESS_ID' => 'Az Ön folyamat azonosítója',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A php_mcrypt kiterjesztést engedélyezni kell a php.ini fájlban.',
  'LEAD_CONV_OPT_HELP' => 'Másolás - az ajánláshoz kapcsolódó tevékenységek másolása a felhasználó preferenciái alapján. Minden kijelölt rekordhoz másolat fog készülni.<br /><br />Mozgatás - az ajánláshoz kapcsolódó tevékenységek új rekordhoz való hozzárendelése a felhasználó preferenciái alapján. <br /><br />Ne csináljon semmit - a konverzió során az ajánláshoz kapcsolódó tevékenységek érintetlenek maradnak.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Listanézet, elemek száma oldalanként',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Alpanelek száma oldalanként',
  'LOCK_HOMEPAGE' => 'tiltsa le a felhasználó számára a kezdőoldal egyediesítését',
  'LOCK_HOMEPAGE_HELP' => 'Ez a beállítás megakadályozza<br />1) az új honlapok és dashletek hozzáadását a Kezdőlap modulhoz,<br />2) a dashletek elrendezésének áthúzással történő megváltoztatását.',
  'LOCK_SUBPANELS' => 'tiltsa le a felhasználó számára az alpanelek elrendezésének egyediesítését',
  'LOG_MEMORY_USAGE' => 'Memóriahasználat naplózása',
  'LOG_SLOW_QUERIES' => 'Lassú lekérdezések naplózása',
  'MAX_DASHLETS' => 'Sugar dashletek maximális száma az oldalon',
  'NEW_LOGO' => 'Válassza ki a logót:',
  'NEW_LOGO_HELP' => 'A kép formátuma .png vagy .jpg lehet. A maximális megengedett magasság 17 pixel, a szélesség pedig 450 pixel. Minden ennél nagyobb feltöltött kép erre a méretre lesz lekicsinyítve.',
  'NEW_LOGO_HELP_NO_SPACE' => 'A kép fájlformátuma kizárólag .png vagy .jpg lehet. A maximális megengedett magasság 17 pixel, míg a szélesség 450 pixel. Az ennél nagyobb képeket a rendszer erre a méretre fogja kicsinyíteni. A kép neve nem tartalmazhat szünetet.',
  'NEW_QUOTE_LOGO' => 'Új árajánlat logófeltöltés',
  'NEW_QUOTE_LOGO_HELP' => 'A szükséges képfájl formátum .jpg.<br />Az ajánlott méret 867x74 pixel.',
  'PDF_ACL_ACCESS' => 'Hozzáférés ellenőrzése',
  'PDF_ACL_ACCESS_INFO' => 'A PDF exportálás alapértelmezett hozzáférés-szabályai.',
  'PDF_AUTHOR' => 'Szerző',
  'PDF_AUTHOR_INFO' => 'A szerző neve a dokumentum tulajdonságai között szerepel.',
  'PDF_COMPRESSION' => 'Tömörítés',
  'PDF_COMPRESSION_INFO' => 'Oldaltömörítés aktiválása vagy deaktiválása.<br />Ha aktív, az oldalak belső megjelenése tömörített formában történik, ami körülbelül kétszeres tömörítést jelent a létrejött dokumentumban.',
  'PDF_CREATOR' => 'PDF szerkesztő',
  'PDF_CREATOR_INFO' => 'Meghatározza a dokumentum forrását. Ez jellemzően a PDF-et generáló alkalmazás neve.',
  'PDF_FILENAME' => 'Alapértelmezett fájlnév',
  'PDF_FILENAME_INFO' => 'Alapértelmezett fájlnév a létrehozott PDF fájlok esetén',
  'PDF_GD_WARNING' => 'Nincs telepítve a GD Library a PHP-hez. Enélkül csak JPEG logók jelenhetnek meg a PDF dokumenumokban.',
  'PDF_HEADER_LOGO' => 'Árajánlatot tartalmazó PDF dokumentumhoz',
  'PDF_HEADER_LOGO_INFO' => 'Ez a kép jelenik meg alapértelmezetten az árajánlatot tartalmazó PDF dokumentumok fejlécében.',
  'PDF_HEADER_LOGO_WIDTH' => 'Árajánlatok képméret szélessége',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Módosítsa az árajánlatot tartalmazó PDF dokumentumhoz feltöltött kép méretét. (csak TCPDF)',
  'PDF_HEADER_STRING' => 'Fejléc szöveg',
  'PDF_HEADER_STRING_INFO' => 'Fejléc leírása',
  'PDF_HEADER_TITLE' => 'Fejléc címe',
  'PDF_HEADER_TITLE_INFO' => 'A dokumentum fejlécére, címként nyomtatandó szöveg',
  'PDF_IMAGE_SCALE_RATIO' => 'Képméret csökkentésének aránya',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Méretarány a képek méretezéséhez',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'A SugarPDF által támogatott betűtípusok:<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />Ha úgy rendelkezik, hogy a betűtípusát nem ágyazza be a PDF-be, az exportált PDF fájl ugyan kisebb lesz, de ha a felhasználó gépén nem elérhető a kérdéses betűtípus, az eredeti mással lesz helyettesítve.<br /><br><br><br />PDF betűtípus hozzáadása a SugarCRM készletéhez a TCPDF Fonts dokumentációban leírtak 1. és 2. lépése szerint történik. Ez a "DOCS" szekcióban szerepel az alábbi címen: <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>A pfm2afm és a ttf2ufm betűtípusok dokumentációja letölthető a "DOWNLOAD" fülre kattintva itt: <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Alább töltse be a második lépésben generált metrikus fájlt és a betűtípusát.',
  'PDF_JPEG_QUALITY' => 'JPEG minősége (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Állítsa be az alapértelmezett JPEG tömörítési minőséget (1-100)',
  'PDF_KEYWORDS' => 'Kulcsszó/kulcsszavak',
  'PDF_KEYWORDS_INFO' => 'Adjon meg kulcsszavakat a dokumentumhoz az alábbi formában: "kulcsszó1 kulcsszó2..."',
  'PDF_NEW_HEADER_LOGO' => 'Válasszon új képet az árajánlatokhoz',
  'PDF_NEW_HEADER_LOGO_INFO' => 'A fájl formátuma kizárólag .jpg vagy .png lehet (EZPDF esetén csak .jpg).<br />Az ajánlott méret 867x74 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Válasszon új képet a jelentésekhez',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'A fájl formátuma kizárólag .jpg vagy .png lehet (EZPDF esetén csak .jpg).<br />Az ajánlott méret 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Tulajdonosi jelszó',
  'PDF_OWNER_PASSWORD_INFO' => 'Ha nem állít be jelszót, a dokumentum bárki számára olvasható lesz.<br />Ha jelszót ad a dokumentumhoz, annak megtekintéséhez a PDF olvasó később kérni fogja azt.<br />Amennyiben elsődleges és másodlagos jelszót is használ, az elsődleges fog teljes hozzáférést garantálni.',
  'PDF_PDF_VERSION' => 'PDF változat',
  'PDF_PDF_VERSION_INFO' => 'PDF verzió beállítása (ellenőrizze a PDF jellemzőket a valós értékekhez)',
  'PDF_PROTECTION' => 'Dokumentum védelme',
  'PDF_PROTECTION_INFO' => 'Dokumentum védelem beállítása<br />- másolás: szöveg és kép másolása vágólapra<br />- nyomtatás: dokumentum nyomtatása<br />- módosítás: dokumentum módosítása (kivéve űrlapok és jegyzetek)<br />- jegyzetek-űrlapok: jegyzetek és űrlapok hozzáadása<br />Megjegyzés: a módosítás elleni védelem a teljes Adobe Acrobattal rendelkező felhasználókra vonatkozik.',
  'PDF_SMALL_HEADER_LOGO' => 'PDF formátumú jelentésekhez',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Ez a kép jelenik meg az alapértelmezett fejlécben a PDF-dokumentumokban készített jelentéseknél.<br />Ez a kép a Sugar alkalmazás bal felső sarkában is megjelenik.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Jelentések kép szélessége',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'A Jelentések PDF dokumentum számára feltöltött kép méretarányainak megváltoztatása (csak TCPDF).',
  'PDF_SUBJECT' => 'Tárgy',
  'PDF_SUBJECT_INFO' => 'A téma a dokumentum tulajdonságaiban fog megjelenni.',
  'PDF_TITLE' => 'Cím',
  'PDF_TITLE_INFO' => 'A cím a dokumentum tulajdonságaiban fog megjelenni.',
  'PDF_UNIT' => 'Egység',
  'PDF_UNIT_INFO' => 'dokumentum mértékegység',
  'PDF_USER_PASSWORD' => 'Felhasználói jelszó',
  'PDF_USER_PASSWORD_INFO' => 'Ha nem állít be jelszót, a dokumentum bárki számára olvasható lesz.<br />Ha jelszót ad a dokumentumhoz, annak megtekintéséhez a PDF olvasó később kérni fogja azt.<br />Amennyiben elsődleges és másodlagos jelszót is használ, az elsődleges fog teljes hozzáférést garantálni.',
  'QUOTES_CURRENT_LOGO' => 'Árajánlat logó',
  'SESSION_TIMEOUT' => 'Portál munkamenet időtúllépés',
  'SESSION_TIMEOUT_UNITS' => 'másodperc',
  'SHOW_DOWNLOADS_TAB' => 'Letöltés fül megjelenítése',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Kiválasztása esetén a Letöltés fül megjelenik a Felhasználói beállításokban és hozzáférést biztosít a Sugar illesztőprogramokhoz, illetve az egyéb elérhető fájlokhoz.',
  'SLOW_QUERY_TIME_MSEC' => 'Lassú lekérdezés idő küszöbértéke (ms)',
  'STACK_TRACE_ERRORS' => 'Hibaverem megjelenítése',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Speciális beállítások',
  'SUGARPDF_BASIC_SETTINGS' => 'Dokumentum tulajdonságai',
  'SUGARPDF_LOGO_SETTINGS' => 'Képek',
  'SYSTEM_NAME' => 'Rendszer neve:',
  'SYSTEM_NAME_HELP' => 'Ez a név jelenik meg címként a böngésző címsorában.',
  'SYSTEM_NAME_WIZARD' => 'Név:',
  'TPL_LIST_ENTRIES_PER_LISTVIEW_HELP' => 'A helyes működés érdekében ajánlott beállítás alább található ({{listEntriesNum}}). Amennyiben ráadás mezők kerülnek a listanézetbe, a számnak a lista végén kell szerepelnie.',
  'TPL_LIST_ENTRIES_PER_SUBPANEL_HELP' => 'A helyes működés érdekében ajánlott beállítás alább látható ({{subpanelEntriesNum}}). Amennyiben ráadás mezők kerülnek a listanézetbe, a számnak a lista végén kell szerepelnie.',
  'UPLOAD_MAX_SIZE' => 'Maximális feltöltési méret',
  'VERIFY_CLIENT_IP' => 'Felhasználói IP cím ellenőrzése',
  'vCAL_HELP' => 'Használja ezt a beállítást annak meghatározására, hogy az aktuális dátumhoz képest hány hónapra előre lehessen látni a Szabad/Foglalt üzenetet a közzétett hívásoknál és találkozóknál.<br />A Szabad/Foglalt információ megjelenítésének kikapcsolásához írjon be 0-t. A minimum intervallum 1 hónap, a maximum 12.',
);

