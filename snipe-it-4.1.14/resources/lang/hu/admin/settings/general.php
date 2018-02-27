<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory tartomány',
    'ad_domain_help'			=> 'Ez néha megegyezik az e-mail domainjével, de nem mindig.',
    'is_ad'				        => 'Ez egy Active Directory szerver',
	'alert_email'				=> 'Riasztás címzettje',
	'alerts_enabled'			=> 'Riasztás engedélyezve',
	'alert_interval'			=> 'A figyelmeztetések lejárata küszöbérték (napokban)',
	'alert_inv_threshold'		=> 'Leltár riasztási küszöb',
	'asset_ids'					=> 'Eszköz ID',
	'audit_interval'            => 'Audit időtartam',
    'audit_interval_help'       => 'Ha rendszeres fizikai ellenőrzést igényel az eszközökkel, adja meg az intervallumot hónapokban.',
	'audit_warning_days'        => 'Ellenőrzési figyelmeztető küszöbérték',
    'audit_warning_days_help'   => 'Hány nappal előre figyelmeztetni kell Önt arra, hogy az eszközöknek az ellenőrzésre van szükségük?',
	'auto_increment_assets'		=> 'Automatikusan növekvő eszközazonosítókat generál',
	'auto_increment_prefix'		=> 'Előtag (opcionális)',
	'auto_incrementing_help'    => 'Engedélyezze az automatikus értéknövelés eszközazonosítót, hogy beállítsa ezt',
	'backups'					=> 'Biztonsági mentések',
	'barcode_settings'			=> 'Vonalkód beállítások',
    'confirm_purge'			    => 'Nyugtázza a tisztítást',
    'confirm_purge_help'		=> 'Az alábbi mezőbe írja be a "DELETE" szöveget a törölt rekordok törléséhez. Ez a művelet nem vonható vissza.',
	'custom_css'				=> 'Egyéni CSS',
	'custom_css_help'			=> 'Adjon meg olyan egyedi CSS felülírást, amelyet használni szeretne. Ne tüntesse fel a &lt;style&gt;&lt;/style&gt; címkéket.',
    'custom_forgot_pass_url'	=> 'Egyéni jelszó visszaállítási URL',
    'custom_forgot_pass_url_help'	=> 'Ez felváltja a beépített elfelejtett jelszó URL-jét a bejelentkezési képernyőn, amely hasznos lehet arra, hogy az embereket belső vagy hosztolt LDAP jelszó-visszaállítási funkciókra irányítsa. Hatékonyan kikapcsolja a helyi felhasználók elfelejtett jelszavát.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Alapértelmezett pénznem',
	'default_eula_text'			=> 'Alapértelmezett EULA',
  'default_language'			=> 'Alapértelmezett nyelv',
	'default_eula_help_text'	=> 'Egyéni EULA-kat is társíthat bizonyos eszközkategóriákhoz.',
    'display_asset_name'        => 'Eszköznév megjelenítése',
    'display_checkout_date'     => 'Megjelenik a Checkout dátum',
    'display_eol'               => 'Táblázat nézetben az EOL megjelenítése',
    'display_qr'                => 'Kijelző négyzetek',
	'display_alt_barcode'		=> '1D vonalkód megjelenítése',
	'barcode_type'				=> '2D vonalkód típusa',
	'alt_barcode_type'			=> '1D vonalkód típusa',
    'eula_settings'				=> 'EULA beállítások',
    'eula_markdown'				=> 'Ez az EULA lehetővé teszi <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et.',
    'general_settings'			=> 'Általános beállítások',
	'generate_backup'			=> 'Háttér létrehozása',
    'header_color'              => 'Fejléc színe',
    'info'                      => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'laravel'                   => 'Laravel verzió',
    'ldap_enabled'              => 'LDAP bekapcsolva',
    'ldap_integration'          => 'LDAP integráció',
    'ldap_settings'             => 'LDAP beállítások',
    'ldap_login_test_help'      => 'Adjon meg egy érvényes LDAP felhasználónevet és jelszót a fenti alapszintű DN-ből, hogy ellenőrizze, hogy az LDAP-bejelentkezés megfelelően van-e beállítva. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_login_sync_help'      => 'Ez csak azt teszteli, hogy az LDAP helyesen szinkronizálható. Ha az LDAP hitelesítési lekérdezése nem megfelelő, a felhasználók még mindig nem tudnak bejelentkezni. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_server'               => 'LDAP szerver',
    'ldap_server_help'          => 'Ezt az ldap: // (titkosítatlan vagy TLS) vagy az ldaps:',
	'ldap_server_cert'			=> 'LDAP SSL tanúsítvány érvényesítés',
	'ldap_server_cert_ignore'	=> 'Érvénytelen SSL-tanúsítvány engedélyezése',
	'ldap_server_cert_help'		=> 'Jelölje be ezt a jelölőnégyzetet, ha önállóan aláírt SSL-tanúsítványt használ, és szeretne elfogadni egy érvénytelen SSL-tanúsítványt.',
    'ldap_tls'                  => 'TLS használata',
    'ldap_tls_help'             => 'Ezt csak akkor kell ellenőrizni, ha STARTTLS-t futtat az LDAP kiszolgálón.',
    'ldap_uname'                => 'LDAP összekapcsolja a felhasználónevet',
    'ldap_pword'                => 'LDAP összekötő jelszó',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP szűrő',
    'ldap_pw_sync'              => 'LDAP jelszószinkronizálás',
    'ldap_pw_sync_help'         => 'Törölje a jelölőnégyzetet, ha nem szeretné megőrizni az LDAP jelszavakat szinkronizált helyi jelszavakkal. A letiltás azt jelenti, hogy a felhasználók esetleg nem tudnak bejelentkezni, ha az LDAP-kiszolgáló valamilyen okból elérhetetlenné válik.',
    'ldap_username_field'       => 'Felhasználónév mező',
    'ldap_lname_field'          => 'Vezetéknév',
    'ldap_fname_field'          => 'LDAP keresztnév',
    'ldap_auth_filter_query'    => 'LDAP hitelesítési lekérdezés',
    'ldap_version'              => 'LDAP verzió',
    'ldap_active_flag'          => 'LDAP aktív zászló',
    'ldap_emp_num'              => 'LDAP alkalmazott száma',
    'ldap_email'                => 'LDAP e-mail',
    'load_remote_text'          => 'Távoli parancsfájlok',
    'load_remote_help_text'		=> 'Ez a Snipe-IT telepítés betölti a szkripteket a külvilágtól.',
    'login_note'                => 'Bejelentkezési megjegyzés',
    'login_note_help'           => 'Opcionálisan tartalmazhat néhány mondatot a bejelentkezési képernyőn, például, hogy segítse az embereket, akik elvesztett vagy ellopott eszközt találtak. Ez a mező elfogad <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et',
    'logo'                    	=> 'logo',
    'full_multiple_companies_support_help_text' => 'A vállalatoknak a vállalat eszközeihez rendelt felhasználók (köztük az adminisztrátorok) korlátozása.',
    'full_multiple_companies_support_text' => 'Teljes több vállalat támogatása',
    'optional'					=> 'választható',
    'per_page'                  => 'Eredmények oldalanként',
    'php'                       => 'PHP verzió',
    'php_gd_info'               => 'A QR-kódok megjelenítéséhez telepíteni kell a php-gd-t, lásd a telepítési utasításokat.',
    'php_gd_warning'            => 'A PHP Image Processing és a GD plugin NEM van telepítve.',
    'pwd_secure_complexity'     => 'Jelszó komplexitás',
    'pwd_secure_complexity_help' => 'Válassza ki a jelszavak összetettségi szabályait, amelyeket érvényesíteni kíván.',
    'pwd_secure_min'            => 'Jelszó minimális karakterek',
    'pwd_secure_min_help'       => 'A minimális megengedett érték 5',
    'pwd_secure_uncommon'       => 'A közös jelszavak megakadályozása',
    'pwd_secure_uncommon_help'  => 'Ez megakadályozza a felhasználók számára, hogy közös jelszavakat használjanak fel a leggyakrabban előforduló 10 000 jelszóból.',
    'qr_help'                   => 'Először engedélyezze a QR kódokat, hogy ezt beállítsa',
    'qr_text'                   => 'QR kód szöveg',
    'setting'                   => 'Beállítás',
    'settings'                  => 'Beállítások',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Webhely neve',
    'slack_botname'             => 'Laza botneve',
    'slack_channel'             => 'Laza csatorna',
    'slack_endpoint'            => 'Laza végpont',
    'slack_integration'         => 'Laza beállítások',
    'slack_integration_help'    => 'A laza integráció opcionális, de a végpont és a csatorna akkor szükséges, ha használni szeretné. A laza integráció beállításához elõször <a href=":slack_link" target="_new"> létre kell hoznia egy bejövõ webhook</a>-et a Slack fiókján.',
    'snipe_version'  			=> 'Snipe-IT változat',
    'system'                    => 'Rendszer információ',
    'update'                    => 'Frissítési beállítások',
    'value'                     => 'Érték',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'A Beállítások részről',
    'about_settings_text'       => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'labels_per_page'           => 'Címkék oldalanként',
    'label_dimensions'          => 'Címke méretei (hüvelyk)',
    'next_auto_tag_base'        => 'Következő automatikus növekmény',
    'page_padding'             => 'Oldal margó (hüvelyk)',
    'purge'                    => 'Törölje a törölt rekordokat',
    'labels_display_bgutter'    => 'Jelölje le az alsó csatornát',
    'labels_display_sgutter'    => 'Címke oldalsó csatorna',
    'labels_fontsize'           => 'Címke betűmérete',
    'labels_pagewidth'          => 'Címke lap szélessége',
    'labels_pageheight'         => 'Címke lapmagassága',
    'label_gutters'        => 'Címke távolsága (hüvelyk)',
    'page_dimensions'        => 'Oldalméretek (hüvelyk)',
    'label_fields'          => 'Címke látható mezők',
    'inches'        => 'hüvelyk',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link a Snipe-IT-re az e-mailekben',
    'show_url_in_emails_help_text'      => 'Törölje a jelet a jelölőnégyzetből, ha nem kíván visszaváltani a Snipe-IT telepítéséhez az e-mail láblécében. Hasznos ha a legtöbb felhasználó soha nem jelentkezik be.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximális képpontos magasság, amelyet a bélyegképek megjelenhetnek a listázási nézetben. Min 25, max 500.',
    'two_factor'        => 'Két tényező hitelesítés',
    'two_factor_secret'        => 'Két faktor kód',
    'two_factor_enrollment'        => 'Két faktoros beiratkozás',
    'two_factor_enabled_text'        => 'Engedélyezze a két tényezőt',
    'two_factor_reset'        => 'Törölje a két faktor titkát',
    'two_factor_reset_help'        => 'Ez arra kényszeríti a felhasználót, hogy újból beiktassa eszközét a Google Hitelesítővel. Ez hasznos lehet, ha az éppen beiratkozott eszközüket elveszik vagy ellopják.',
    'two_factor_reset_success'          => 'Két tényező eszköz sikeresen visszaáll',
    'two_factor_reset_error'          => 'Két faktoros eszköz visszaállítása sikertelen',
    'two_factor_enabled_warning'        => 'A két tényező bekapcsolása, ha nincs aktuálisan engedélyezve, azonnal kényszeríti Önt arra, hogy hitelesítést végezzen egy Google Auth által beiratkozott eszközzel. Lehetőséged lesz arra, hogy beírja a készüléket, ha nincs beiratkozva.',
    'two_factor_enabled_help'        => 'Ezzel a Google Authenticator használatával kétfaktoros hitelesítést kapcsolhat be.',
    'two_factor_optional'        => 'Szelektív (a felhasználók engedélyezhetik vagy letilthatják, ha megengedettek)',
    'two_factor_required'        => 'Minden felhasználó számára kötelező',
    'two_factor_disabled'        => 'Tiltva',
    'two_factor_enter_code'	=> 'Adja meg a két faktor kódot',
    'two_factor_config_complete'	=> 'Kód küldése',
    'two_factor_enabled_edit_not_allowed' => 'Az adminisztrátor nem teszi lehetővé a beállítás szerkesztését.',
    'two_factor_enrollment_text'	=> "Két tényező hitelesítésre van szükség, de a készülék még nem került bejegyzésre. Nyissa meg a Google Hitelesítő alkalmazást, és szkennelje be az alábbi QR-kódot a készülék regisztrálásához. Miután beírta a készüléket, adja meg az alábbi kódot",
    'require_accept_signature'      => 'Aláírásra van szükség',
    'require_accept_signature_help_text'      => 'Ha engedélyezni szeretné ezt a funkciót, akkor a felhasználóknak fizikailag ki kell jelentkezniük egy eszköz elfogadásáról.',
    'left'        => 'balra',
    'right'        => 'jobb',
    'top'        => 'felső',
    'bottom'        => 'alsó',
    'vertical'        => 'függőleges',
    'horizontal'        => 'vízszintes',
    'zerofill_count'        => 'Az eszközcímkék hossza, beleértve a nem töltöt',
);