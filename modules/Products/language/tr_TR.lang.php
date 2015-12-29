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
  'ERR_DELETE_RECORD' => 'Ürünü silmek için bir kayıt numarası belirtmelisiniz.',
  'LBL_ACCOUNT_ID' => 'Müşteri ID',
  'LBL_ACCOUNT_NAME' => 'Müşteri İsmi:',
  'LBL_ASSET_NUMBER' => 'Varlık Numarası:',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_ASSIGNED_USER_ID' => 'Atanmış Kullanıcı ID',
  'LBL_ASSOCIATED_QUOTE' => 'Teklif Konusu:',
  'LBL_BOOK_VALUE' => 'Defter Değeri:',
  'LBL_BOOK_VALUE_DATE' => 'Defter Değer Tarihi:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Defter Değeri (Dolar):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Hesaplanan Teklif Kalemi Miktarı',
  'LBL_CAMPAIGN_PRODUCT' => 'Kampanyada Teklif Edilen Kalem',
  'LBL_CATEGORY' => 'Kategori:',
  'LBL_CATEGORY_NAME' => 'Kategori İsmi:',
  'LBL_COMMIT_STAGE' => 'Onay Aşaması',
  'LBL_COMMIT_STAGE_FORECAST' => 'Tahmin',
  'LBL_CONTACT' => 'Kontak',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaklar',
  'LBL_CONTACT_ID' => 'Kontak ID',
  'LBL_CONTACT_NAME' => 'Kontak İsmi:',
  'LBL_CONTRACTS' => 'Kontratlar',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontratlar',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Hata:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Teklif satır kalemini Teklife dönüştürürken hata oluştu',
  'LBL_COST_PRICE' => 'Maliyet:',
  'LBL_COST_USDOLLAR' => 'Maliyet (Dolar)',
  'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
  'LBL_CURRENCY' => 'Para Birimi:',
  'LBL_CURRENCY_ID' => 'Para Birimi ID:',
  'LBL_CURRENCY_RATE' => 'Döviz Kuru',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Para Sembol İsmi',
  'LBL_DATE_CLOSED' => 'Beklenen Kapanış Tarihi',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Beklenen Kapanış Tarihi Zaman Damgası',
  'LBL_DATE_PURCHASED' => 'Satın Alma Tarihi:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Destek Sona Erme Tarihi:',
  'LBL_DATE_SUPPORT_STARTS' => 'Destek Başlangıç Tarihi:',
  'LBL_DEAL_TOT' => 'İndirim:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Teklif Kalemleri',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_DISCOUNT_AMOUNT' => 'İndirim Miktarı',
  'LBL_DISCOUNT_AS_PERCENT' => 'İndirim %',
  'LBL_DISCOUNT_PRICE' => 'Birim Fiyatı:',
  'LBL_DISCOUNT_PRICE_DATE' => 'İndirimli Fiyat Tarihi:',
  'LBL_DISCOUNT_RATE' => 'İndirim Oranı',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'İndirim Oranı (Dolar)',
  'LBL_DISCOUNT_TOTAL' => 'Toplam İndirim',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'İndirim (Dolar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Birim Fiyatı (Dolar)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokümanlar',
  'LBL_EDITLAYOUT' => 'Yerleşimi Değiştir',
  'LBL_EXPERT_ID' => 'Ürün Uzmanı',
  'LBL_EXPORT_CURRENCY_ID' => 'Para Birimi ID',
  'LBL_EXT_PRICE' => 'Tutar',
  'LBL_FORECAST' => 'Tahminde Dahil et',
  'LBL_HELP_CREATE' => '{{plural_module_name}} modülü, müşterilere satılmış veya satış süreci devam eden bütün ürünlerinden oluşmaktadır. {{module_name}} kaydı oluşturmak için: 1. Alanlara istenen bilgleri giriniz. - "Zorunlu" olarak işaretlenen alanların kayıt öncesinde tamamlanması gerekmektedir. - "Daha Fazlasını Göster" tuşuna basarak, gerekiyorsa ek alanları görünür hale getirin. 2. "Kaydet" tuşuna basara kayıt işlemini tamamlayın ve önceki sayfaya dönün. - "Kaydet ve göster" seçeneği ile yeni {{module_name}} kaydını görüntüleme ekranında açın. - "Kaydet ve yenisini oluştur" seçeneğiyle hemen yeni bir {{module_name}} kaydı oluşturun.',
  'LBL_HELP_RECORD' => '{{plural_module_name}} modülü, müşteriye satılmış veya satılmakta olan ürünlerden oluştur.

- Kaydın alanlarını, herhangi bir alana veya "Değiştir" tuşuna tıklayarak değiştirin.
- Alt solda yer alan paneli "Kayıt Görünümü" olarak değiştirerek, diğer kayıtlar ile olan bağlantıları görün veya değiştirin.
- Kaydın isminin sağındaki ikonlara tıklayarak kaydı izleyiniz veya favori olarak işaretleyiniz.
- Alt solda yer alan paneli "Aktivite Akışı" olarak değiştirerek, kullanıcı yorumları görün, oluşturun ve  {{activitystream_singular_module}}  kayıtındaki değişiklik tarihçesini görün.
- Daha fazla aksiyon, Değiştir tuşunun sağındaki Aksiyonlar seçimli menüde yer almaktadır.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} modülü, müşterilere satılmış veya satış süreci devam eden bütün ürünlerinden oluşmaktadır. Firmanız tarafından satılan ürünler Sistem Yöneticisi > Ürün Kataloğu içinde yer almakta olup, sistem yöneticileri gerektiğinde ürün ekleyebilmektedir.  {{plural_module_name}} oluşturulurken, katalog içinden ürün seçebilir veya {{plural_module_name}} modülü ile ürün oluşturulabilir. {{plural_module_name}} kayıdı oluşturmak için Sugar içinde farklı yöntemler bulunmaktadır, örneğin {{plural_module_name}} modülü ile, {{quotes_module}} modülünde, aynı kayıttan oluşturarak, dışarıdan {{plural_module_name}} içeri yükleyerek, vb. {{module_name}} kaydı oluşturulduğunda, {{module_name}} modülündeki eksik bilgileri {{plural_module_name}} kayıt izleme ekranından görebilir ve düzeltebilirsiniz.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı',
  'LBL_LIST_ACCOUNT_NAME' => 'Müşteri İsmi',
  'LBL_LIST_CONTACT_NAME' => 'Kontak İsmi',
  'LBL_LIST_COST_PRICE' => 'Maliyet',
  'LBL_LIST_DATE_PURCHASED' => 'Satın Alma Tarihi:',
  'LBL_LIST_DISCOUNT_PRICE' => 'Fiyat',
  'LBL_LIST_FORM_TITLE' => 'Ürün Listesi',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Ürtc No',
  'LBL_LIST_LIST_PRICE' => 'Liste',
  'LBL_LIST_MANUFACTURER' => 'Üretici',
  'LBL_LIST_NAME' => 'Teklif Kalemi',
  'LBL_LIST_PRICE' => 'Liste Fiyatı:',
  'LBL_LIST_QUANTITY' => 'Miktar',
  'LBL_LIST_QUOTE_NAME' => 'Teklif İsmi',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Son Geçerlik',
  'LBL_LIST_USDOLLAR' => 'Liste Fiyatı (Dolar)',
  'LBL_MANUFACTURER' => 'Üretici:',
  'LBL_MANUFACTURER_NAME' => 'Üretici İsmi:',
  'LBL_MEMBER_OF' => 'Üyesi:',
  'LBL_MFT_PART_NUM' => 'Ürtc Parça Numarası:',
  'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
  'LBL_MODULE_NAME' => 'Teklif Kalemleri',
  'LBL_MODULE_NAME_SINGULAR' => 'Teklif Kalemi',
  'LBL_MODULE_TITLE' => 'Teklif Kalemleri:Ana Sayfa',
  'LBL_NAME' => 'İsim',
  'LBL_NEW_FORM_TITLE' => 'Ürün Oluştur',
  'LBL_NEXT_STEP' => 'Bir Sonraki Adım:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notlar',
  'LBL_OPPORTUNITY' => 'Fırsat',
  'LBL_OPPORTUNITY_ID' => 'Fırsat ID',
  'LBL_PRICING_FACTOR' => 'Fiyatlandırma Faktörü',
  'LBL_PRICING_FORMULA' => 'Fiyat Formülü:',
  'LBL_PROBABILITY' => 'Olasılık (%)',
  'LBL_PRODUCT' => 'Teklif Kalemi:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Teklif Kalemleri',
  'LBL_PRODUCT_CATEGORIES' => 'Ürün Kategorileri',
  'LBL_PRODUCT_TEMPLATE' => 'Ürün Şablonu:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Ürün Şalon ID:',
  'LBL_PRODUCT_TYPES' => 'Ürün Tipleri',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
  'LBL_QUANTITY' => 'Miktar:',
  'LBL_QUOTE' => 'Teklif',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Teklifler',
  'LBL_QUOTE_ID' => 'Teklif ID',
  'LBL_QUOTE_NAME' => 'Teklif İsmi:',
  'LBL_RELATED_PRODUCTS' => 'İlişkili Teklif Kalemleri',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Teklif Kalemleri',
  'LBL_REVENUELINEITEM' => 'Gelir Kalemi',
  'LBL_REVENUELINEITEMS' => 'Gelir Kalemleri',
  'LBL_REVENUELINEITEM_ID' => 'Gelir Kalemleri ID:',
  'LBL_REVENUELINEITEM_NAME' => 'Gelir Kalemi Adı:',
  'LBL_SALES_STAGE' => 'Satış Aşaması',
  'LBL_SALES_STATUS' => 'Gelir Durumu',
  'LBL_SEARCH_FORM_TITLE' => 'Ürün Ara',
  'LBL_SELECT_DISCOUNT' => 'İndirim %',
  'LBL_SERIAL_NUMBER' => 'Seri Numarası:',
  'LBL_STATUS' => 'Durum:',
  'LBL_SUPPORT_CONTACT' => 'Destek Veren Kontak:',
  'LBL_SUPPORT_DESCRIPTION' => 'Destek Tanımı:',
  'LBL_SUPPORT_NAME' => 'Destek Başlığı:',
  'LBL_SUPPORT_TERM' => 'Destek Süresi:',
  'LBL_TAX_CLASS' => 'Vergi Sınıfı:',
  'LBL_TYPE' => 'Tipi:',
  'LBL_URL' => 'Ürün URL:',
  'LBL_VENDOR_PART_NUM' => 'Satıcı Parça Numarası:',
  'LBL_WEBSITE' => 'Web Sitesi',
  'LBL_WEIGHT' => 'Ağırlık:',
  'LNK_IMPORT_PRODUCTS' => 'Teklif Kalem Verilerini Yükle',
  'LNK_NEW_PRODUCT' => 'Teklif Kalemi Oluştur',
  'LNK_PRODUCT_LIST' => 'Teklif Kalemlerini görüntüle',
  'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
  'NTC_REMOVE_CONFIRMATION' => 'Bu ürün ilişkisini silmek istediğinizden emin misiniz?',
);

