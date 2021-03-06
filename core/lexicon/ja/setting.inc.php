<?php
/**
 * Setting Japanese lexicon topic
 *
 * @language ja
 * @package modx
 * @subpackage lexicon
 * @author Nick http://smallworld.west-tokyo.com
 * @author shimojo http://www.priqia.com/
 * @author yamamoto http://kyms.jp
 */
$_lang['area'] = 'エリア';
$_lang['area_authentication'] = '認証とセキュリティ';
$_lang['area_caching'] = 'キャッシュ';
$_lang['area_editor'] = 'リッチテキストエディタ';
$_lang['area_file'] = 'ファイルシステム';
$_lang['area_filter'] = 'エリアで絞り込み';
$_lang['area_furls'] = 'フレンドリーURL';
$_lang['area_gateway'] = 'ゲートウェイ(コントローラ)';
$_lang['area_language'] = '辞書と言語';
$_lang['area_mail'] = 'メール';
$_lang['area_manager'] = '管理画面の設定';
$_lang['area_proxy'] = 'プロキシ';
$_lang['area_session'] = 'セッションとクッキー';
$_lang['area_lexicon_string'] = '語彙エントリー領域';
$_lang['area_lexicon_string_msg'] = 'Enter the key of the lexicon entry for the area here. If there is no lexicon entry, it will just display the area key.<br />Core Areas:<ul><li>authentication</li><li>caching</li><li>file</li><li>furls</li><li>gateway</li><li>language</li><li>manager</li><li>session</li><li>site</li><li>system</li></ul>';
$_lang['area_site'] = 'サイト';
$_lang['area_system'] = 'システムとサーバ';
$_lang['areas'] = 'Areas';
$_lang['namespace'] = 'ネームスペース';
$_lang['namespace_filter'] = 'ネームスペースで絞り込み';
$_lang['search_by_key'] = 'キーで検索';
$_lang['setting_create'] = '新しい設定を作成';
$_lang['setting_err'] = 'このフィールドの存在を確認してください：';
$_lang['setting_err_ae'] = 'そのキーの設定はすでに存在します。ほかのキー名を指定してください。';
$_lang['setting_err_nf'] = '設定が見つかりませんでした。';
$_lang['setting_err_ns'] = '設定が指定されていません。';
$_lang['setting_err_remove'] = '設定の削除中にエラーが発生しました。';
$_lang['setting_err_save'] = '設定の保存中にエラーが発生しました。';
$_lang['setting_err_startint'] = 'Settings may not start with an integer.';
$_lang['setting_err_invalid_document'] = 'ID %のドキュメントが見つかりませんでした。存在するドキュメントを設定してください。';
$_lang['setting_remove'] = '設定を削除';
$_lang['setting_remove_confirm'] = '設定を削除しますか？(MODxのインストール設定が消失します)';
$_lang['setting_update'] = '設定を編集';
$_lang['settings_after_install'] = '<p><strong style="color:red;">新規インストール直後のため、各種設定を確認し保存する必要があります。設定を確認した後、データベースを更新するために「保存」ボタンをクリックしてください。</strong></p><p>※この設定はいつでも自由に変更できます。</p>';
$_lang['settings_desc'] = 'システム全体の設定(管理画面の設定も含む)を管理します。値をダブルクリックして直接編集するか、右クリックメニューから詳細設定ダイアログを開いて編集します。「＋」マークをクリックすると項目の説明を表示します。<br />複数サイトを管理する場合は「コンテキスト」でサイトごとのシステム設定を定義してください。';
$_lang['settings_furls'] = 'フレンドリーURL';
$_lang['settings_misc'] = 'ファイルマネージャ';
$_lang['settings_site'] = 'サイト';
$_lang['settings_ui'] = 'インターフェースとその他の機能';
$_lang['settings_users'] = '詳細設定';
$_lang['system_settings'] = 'システム設定';

// user settings
$_lang['setting_allow_mgr_access'] = '管理画面へのアクセス';
$_lang['setting_allow_mgr_access_desc'] = 'Select this option to enable or disable access to the manager interface. <strong>NOTE: If this option is set to no then the user will be redirected the the Manager Login Startup or Site Start web page.</strong>';

$_lang['setting_failed_login'] = 'ログイン失敗許可数';
$_lang['setting_failed_login_desc'] = 'ここにログインの失敗を許可する回数を入力することができます。この回数を過ぎるとユーザーは拒否されます。';

$_lang['setting_login_allowed_days'] = '有効な日';
$_lang['setting_login_allowed_days_desc'] = 'このユーザがログインできる日を選択します。';

$_lang['setting_login_allowed_ip'] = '有効なIPアドレス';
$_lang['setting_login_allowed_ip_desc'] = 'IPアドレスを入力すると、このユーザはそのIPアドレスからのログインのみ有効になります。<strong>ノート: 複数のIPアドレスを指定するにはカンマ(,)で区切ります</strong>';

$_lang['setting_login_homepage'] = 'ログインのホームページ';
$_lang['setting_login_homepage_desc'] = 'ログイン後に遷移させたいドキュメントのIDを入力します。<strong>ノート: 公開されていて、このユーザ－がアクセスできるドキュメントのIDを入力してください。</strong>';

// system settings
$_lang['setting_allow_duplicate_alias'] = '同じエイリアスを許可';
$_lang['setting_allow_duplicate_alias_desc'] = '「はい」を選択すると、同じエイリアスでの保存を許可します。<strong>ノート: このオプションはリソース参照時の問題を避けるため、「フレンドリーエイリアスパス」設定を「はい」で設定し、それと一緒に使用されるべきです。</strong>';

$_lang['setting_allow_tags_in_post'] = 'POSTアクションでHTMLタグを許可';
$_lang['setting_allow_tags_in_post_desc'] = '無効に設定すると、管理画面の全てのPOSTアクションは、タグを削除します。「有効」とすることを推奨します。';

$_lang['setting_archive_with'] = 'Force PCLZip Archives';
$_lang['setting_archive_with_desc'] = 'If true, will use PCLZip instead of ZipArchive as the zip extension. Turn this on if you are getting extractTo errors or are having problems with unzipping in Package Management.';

$_lang['setting_auto_menuindex'] = 'メニューインデックスを自動インクリメント';
$_lang['setting_auto_menuindex_desc'] = '「はい」を選択すると、デフォルトでメニューのインデックスが自動的に1ずつ増加します。';

$_lang['setting_auto_check_pkg_updates'] = 'パッケージのアップデートを自動で確認する';
$_lang['setting_auto_check_pkg_updates_desc'] = '「はい」を選択すると、パッケージマネージャからパッケージのアップデートを自動的に確認します。ただし、一覧の読み込みが遅くなるかもしれません。';

$_lang['setting_auto_check_pkg_updates_cache_expire'] = 'Cache Expiration Time for Automatic Package Updates Check';
$_lang['setting_auto_check_pkg_updates_cache_expire_desc'] = 'The number of minutes that Package Management will cache the results for checking for package updates.';

$_lang['setting_allow_multiple_emails'] = '登録メールアドレスの重複を許可';
$_lang['setting_allow_multiple_emails_desc'] = '有効にすると、同じメールアドレスで複数のユーザを登録することができます。';

$_lang['setting_automatic_alias'] = 'エイリアスの自動付加';
$_lang['setting_automatic_alias_desc'] = '「はい」を選択すると、保存時にシステムがリソースのページタイトルからエイリアスを生成します。';

$_lang['setting_blocked_minutes'] = 'ブロック時間';
$_lang['setting_blocked_minutes_desc'] = 'ここには、ユーザーがログイン失敗許可数を超過した場合にブロックを行う時間を数値で指定できます。この値は数値のみを入力してください。（カンマやスペース等は使えません）';

$_lang['setting_cache_action_map'] = 'アクションマップキャッシュを有効';
$_lang['setting_cache_action_map_desc'] = 'When enabled, actions (or controller maps) will be cached to reduce manager page load times.';

$_lang['setting_cache_context_settings'] = 'コンテキスト設定キャッシュを有効';
$_lang['setting_cache_context_settings_desc'] = 'When enabled, context settings will be cached to reduce load times.';

$_lang['setting_cache_db'] = 'データベースキャッシュを有効';
$_lang['setting_cache_db_desc'] = 'When enabled, objects and raw result sets from SQL queries are cached to significantly reduce database loads.';

$_lang['setting_cache_db_expires'] = 'データベースキャッシュの有効秒数';
$_lang['setting_cache_db_expires_desc'] = 'This value (in seconds) sets the amount of time cache files last for DB result-set caching.';

$_lang['setting_cache_default'] = 'デフォルトでキャッシュ有効';
$_lang['setting_cache_default_desc'] = '「はい」を選択すると、すべての新規リソースでキャッシュ有効をデフォルトにします。';
$_lang['setting_cache_default_err'] = 'Please state whether or not you want documents to be cached by default.';

$_lang['setting_cache_disabled'] = 'グローバルキャッシュを無効にする';
$_lang['setting_cache_disabled_desc'] = '「はい」を選択すると、全てのキャッシュ機能を無効にします。 キャッシュを無効にすることは推奨しません。';
$_lang['setting_cache_disabled_err'] = 'Please state whether or not you want the cache enabled.';

$_lang['setting_cache_json'] = 'JSON型データのキャッシュ';
$_lang['setting_cache_json_desc'] = 'Cache any JSON data sent to and from the manager UI.';

$_lang['setting_cache_expires'] = 'デフォルトキャッシュの有効秒数';
$_lang['setting_cache_expires_desc'] = 'This value (in seconds) sets the amount of time cache files last for default caching.';

$_lang['setting_cache_json_expires'] = 'JSONキャッシュの有効秒数';
$_lang['setting_cache_json_expires_desc'] = 'This value (in seconds) sets the amount of time cache files last for JSON caching.';

$_lang['setting_cache_handler'] = 'ハンドラークラスのキャッシュ';
$_lang['setting_cache_handler_desc'] = 'The class name of the type handler to use for caching.';

$_lang['setting_cache_lang_js'] = '語彙Javascript文字列のキャッシュ';
$_lang['setting_cache_lang_js_desc'] = 'If set to true, this will use server headers to cache the lexicon strings loaded into JavaScript for the manager interface.';

$_lang['setting_cache_lexicon_topics'] = '語彙トピックのキャッシュ';
$_lang['setting_cache_lexicon_topics_desc'] = 'When enabled, all Lexicon Topics will be cached so as to greatly reduce load times for Internationalization functionality. MODx strongly recommends leaving this set to \'Yes\'.';

$_lang['setting_cache_noncore_lexicon_topics'] = 'コア以外の語彙トピックを有効';
$_lang['setting_cache_noncore_lexicon_topics_desc'] = 'When disabled, non-core Lexicon Topics will be not be cached. This is useful to disable when developing your own Extras.';

$_lang['setting_cache_resource'] = '部分的なリソースキャッシュを有効';
$_lang['setting_cache_resource_desc'] = 'Partial resource caching is configurable by resource when this feature is enabled.  Disabling this feature will disable it globally.';

$_lang['setting_cache_resource_expires'] = '部分的なリソースキャッシュの有効秒数';
$_lang['setting_cache_resource_expires_desc'] = 'This value (in seconds) sets the amount of time cache files last for partial Resource caching.';

$_lang['setting_cache_scripts'] = 'スクリプトキャッシュを有効';
$_lang['setting_cache_scripts_desc'] = 'When enabled, MODx will cache all Scripts (Snippets and Plugins) to file to reduce load times. MODx recommends leaving this set to \'Yes\'.';

$_lang['setting_cache_system_settings'] = 'システム設定キャッシュを有効';
$_lang['setting_cache_system_settings_desc'] = 'When enabled, system settings will be cached to reduce load times. MODx recommends leaving this on.';

$_lang['setting_compress_css'] = '圧縮したCSSを使用';
$_lang['setting_compress_css_desc'] = 'When this is enabled, MODx will use a compressed version of its css stylesheets in the manager interface. This greatly reduces load and execution time within the manager. Disable only if you are modifying core elements.';

$_lang['setting_compress_js'] = '圧縮したJavascriptを使用';
$_lang['setting_compress_js_desc'] = 'When this is enabled, MODx will use a compressed version of its custom JavaScript libraries in the manager interface. This greatly reduces load and execution time within the manager. Disable only if you are modifying core elements.';

$_lang['setting_concat_js'] = '連結したJavascriptを使用';
$_lang['setting_concat_js_desc'] = 'When this is enabled, MODx will use a concatenated version of its common JavaScript libraries in the manager interface. This greatly reduces load and execution time within the manager. Disable only if you are modifying core elements.';

$_lang['setting_container_suffix'] = 'コンテナの添え字';
$_lang['setting_container_suffix_desc'] = 'フレンドリーURLを使用する場合に、コンテナ属性のリソースに追加する添え字';

$_lang['setting_cultureKey'] = '言語';
$_lang['setting_cultureKey_desc'] = 'Select the language for all non-manager Contexts, including web.';

$_lang['setting_custom_resource_classes'] = 'カスタムリソースクラス';
$_lang['setting_custom_resource_classes_desc'] = 'A comma-separated list of custom Resource classes. Specify with lowercase_lexicon_key:className (Ex: wiki_resource:WikiResource). All custom Resource classes must extend modResource. To specify the controller location for each class, add a setting with [nameOfClassLowercase]_delegate_path with the directory path of the create/update php files. Ex: wikiresource_delegate_path for a class WikiResource that extends modResource.';

$_lang['setting_default_template'] = 'デフォルトテンプレート';
$_lang['setting_default_template_desc'] = 'Select the default Template you wish to use for new Resources. You can still select a different template in the Resource editor, this setting just pre-selects one of your Templates for you.';

$_lang['setting_default_per_page'] = 'Default Per Page';
$_lang['setting_default_per_page_desc'] = 'The default number of results to show in grids throughout the manager.';

$_lang['setting_editor_css_path'] = 'CSSファイルのパス';
$_lang['setting_editor_css_path_desc'] = 'Enter the path to your CSS file that you wish to use within a richtext editor. The best way to enter the path is to enter the path from the root of your server, for example: /assets/site/style.css. If you do not wish to load a style sheet into a richtext editor, leave this field blank.';

$_lang['setting_editor_css_selectors'] = 'スタイルセレクタ(RTE用)';
$_lang['setting_editor_css_selectors_desc'] = 'A comma-separated list of CSS selectors for a richtext editor.';

$_lang['setting_emailsender'] = '送信者メールアドレス';
$_lang['setting_emailsender_desc'] = ' 	ユーザー名とパスワードを送信時の送信元メールアドレスを指定してください。';
$_lang['setting_emailsender_err'] = '送信者メールアドレスを指定してください。';

$_lang['setting_emailsubject'] = 'メールのタイトル';
$_lang['setting_emailsubject_desc'] = 'サインアップメールのタイトルを指定してください。';
$_lang['setting_emailsubject_err'] = 'サインアップメールのタイトルを指定してください。';

$_lang['setting_error_page'] = 'エラーページ';
$_lang['setting_error_page_desc'] = 'ドキュメントが存在しない場合のエラーページ(404 ページ)として表示する、ドキュメントのIDを入力してください。<strong注意: 既に存在するドキュメントで、かつ公開されている必要があります。</strong>';
$_lang['setting_error_page_err'] = 'エラーページに使用するドキュメントIDを指定してください。';

$_lang['setting_extension_packages'] = 'Extension Packages';
$_lang['setting_extension_packages_desc'] = 'A comma separated list of packages to load on MODx instantiation. In the format packagename:pathtomodel';

$_lang['setting_failed_login_attempts'] = 'ログイン失敗回数の上限';
$_lang['setting_failed_login_attempts_desc'] = 'The number of failed login attempts a User is allowed before becoming \'blocked\'.';

$_lang['setting_fe_editor_lang'] = 'エディタの言語';
$_lang['setting_fe_editor_lang_desc'] = 'Choose a language for the editor to use when used as a front-end editor.';

$_lang['setting_feed_modx_news'] = 'MODxニュースフィードURL';
$_lang['setting_feed_modx_news_desc'] = 'Set the URL for the RSS feed for the MODx News panel in the manager.';

$_lang['setting_feed_modx_news_enabled'] = 'MODxニュースフィードを有効';
$_lang['setting_feed_modx_news_enabled_desc'] = '「いいえ」を選択すると管理画面のようこそ画面でニュースフィードが表示されません。';

$_lang['setting_feed_modx_security'] = 'MODxセキュリティー警告フィードのURL';
$_lang['setting_feed_modx_security_desc'] = 'Set the URL for the RSS feed for the MODx Security Notices panel in the manager.';

$_lang['setting_feed_modx_security_enabled'] = 'MODxセキュリティフィードを有効';
$_lang['setting_feed_modx_security_enabled_desc'] = 'If \'No\', MODx will hide the Security feed in the welcome section of the manager.';

$_lang['setting_filemanager_path'] = 'ファイル管理領域のパス';
$_lang['setting_filemanager_path_desc'] = 'IIS often does not populate the document_root setting properly, which is used by the file manager to determine what you can look at. If you\'re having problems using the file manager, make sure this path points to the root of your MODx installation.';

$_lang['setting_filemanager_url'] = 'File Manager Url';
$_lang['setting_filemanager_url_desc'] = 'Optional. Set this if you want to set an explicit URL to access the files in the MODx file manager from (useful if you have changed filemanager_path to a path outside the MODx webroot). Make sure this is the web-accessible URL of the filemanager_path setting value. If leave this empty, MODx will try to automatically calculate it.';

$_lang['setting_forgot_login_email'] = 'Forgot Login Email';
$_lang['setting_forgot_login_email_desc'] = 'The template for the email that is sent when a user has forgotten their MODx username and/or password.';

$_lang['setting_friendly_alias_lowercase_only'] = 'エイリアスを小文字で揃える';
$_lang['setting_friendly_alias_lowercase_only_desc'] = 'リソースのエイリアスに小文字のみを許可するかを決定します。';

$_lang['setting_friendly_alias_max_length'] = 'エイリアスの最大サイズ';
$_lang['setting_friendly_alias_max_length_desc'] = 'If greater than zero, the maximum number of characters to allow in a Resource alias. Zero equals unlimited.';

$_lang['setting_friendly_alias_restrict_chars'] = 'エイリアスの文字の制限方法';
$_lang['setting_friendly_alias_restrict_chars_desc'] = 'The method used to restrict characters used in a Resource alias. "pattern" allows a RegEx pattern to be provided, "legal" allows any legal URL characters, "alpha" allows only letters of the alphabet, and "alphanumeric" allows only letters and numbers.';

$_lang['setting_friendly_alias_restrict_chars_pattern'] = 'エイリアスの文字の制限パターン';
$_lang['setting_friendly_alias_restrict_chars_pattern_desc'] = 'A valid RegEx pattern for restricting characters used in a Resource alias.';

$_lang['setting_friendly_alias_strip_element_tags'] = 'FURL Alias Strip Element Tags';
$_lang['setting_friendly_alias_strip_element_tags_desc'] = 'Determines if Element tags should be stripped from a Resource alias.';

$_lang['setting_friendly_alias_translit'] = 'エイリアスの翻字設定';
$_lang['setting_friendly_alias_translit_desc'] = '機種依存文字やヨーロッパ圏のウムラウト(アクセント記号付きの文字)などを「翻字」したい場合に当設定を用います。The method of transliteration to use on an alias specified for a Resource. Empty or "none" is the default which skips transliteration. Other possible values are "iconv" (if available) or a named transliteration table provided by a custom transliteration service class.';

$_lang['setting_friendly_alias_translit_class'] = 'FURL Alias Transliteration Service Class';
$_lang['setting_friendly_alias_translit_class_desc'] = 'An optional service class to provide named transliteration services for FURL Alias generation/filtering.';

$_lang['setting_friendly_alias_trim_chars'] = 'エイリアスからトリムする文字';
$_lang['setting_friendly_alias_trim_chars_desc'] = 'エイリアス文字列の末尾に付けたくない文字を指定します。たとえば「-」で終わるURLを美しくないと思う場合、もしエイリアス自動生成などの結果末尾に「-」が付いた時は、ここで指定しておけば自動的に削除できます。Characters to trim from the ends of a provided Resource alias.';

$_lang['setting_friendly_alias_urls'] = 'フレンドリーエイリアスの使用';
$_lang['setting_friendly_alias_urls_desc'] = 'MODxが生成するページのURLは、通常はindex.php?id=51といったGETクエリストリング形式になります。フレンドリーエイリアスをURLに使用する設定を用いると、見た目に分かりやすいURLを表現することができます。たとえばリソース編集画面でエイリアスを「introduction」とすると、URLは「http://example.com/introductionl.html」となります。 エイリアスを設定していない場合は、MODxが「http://example.com/51.html」というリンクを生成します。拡張子は「システム」→「コンテンツタイプ」でコンテンツタイプごとに指定します。';

$_lang['setting_friendly_alias_word_delimiter'] = 'エイリアス自動生成時の区切り文字';
$_lang['setting_friendly_alias_word_delimiter_desc'] = 'The preferred word delimiter for friendly URL alias slugs.';

$_lang['setting_friendly_alias_word_delimiters'] = 'エイリアス自動生成時の区切り文字';
$_lang['setting_friendly_alias_word_delimiters_desc'] = 'Characters which represent word delimiters when processing friendly URL alias slugs. These characters will be converted and consolidated to the preferred FURL alias word delimiter.';

$_lang['setting_friendly_urls'] = 'フレンドリーURLの利用';
$_lang['setting_friendly_urls_desc'] = '静的URI機能（フレンドリーURL）の設定を行います。この機能はMODxがApache上で動作している時のみ有効です。この機能を動作させるために .htaccessファイルに簡単な編集を加える必要があります。詳細は同梱 .htaccessファイルの末尾あたりをご覧ください。';
$_lang['setting_friendly_urls_err'] = 'フレンドリーURLを使用するかしないか選んでください。';

$_lang['setting_mail_charset'] = 'メールの文字セット';
$_lang['setting_mail_charset_desc'] = 'メールでの（デフォルトの）文字セットを指定します。例えば「UTF-8」など。';

$_lang['setting_mail_encoding'] = 'メールのエンコーディング';
$_lang['setting_mail_encoding_desc'] = 'メッセージのエンコーディングを設定します。ここで指定できるのは"8bit", "7bit", "binary", "base64", と"quoted-printable"です。';

$_lang['setting_mail_use_smtp'] = 'SMTPを使用';
$_lang['setting_mail_use_smtp_desc'] = '有効に設定すると、mail関数でSMTPを使用するように試みます。';

$_lang['setting_mail_smtp_auth'] = 'SMTP認証';
$_lang['setting_mail_smtp_auth_desc'] = 'SMTP認証をセットします。mail_smtp_userとmail_smtp_passwordの設定を利用します。';

$_lang['setting_mail_smtp_helo'] = 'SMTPようこそメッセージ';
$_lang['setting_mail_smtp_helo_desc'] = 'Sets the SMTP HELO of the message (Defaults to the hostname).';

$_lang['setting_mail_smtp_hosts'] = 'SMTPのホスト';
$_lang['setting_mail_smtp_hosts_desc'] = 'Sets the SMTP hosts.  All hosts must be separated by a semicolon.  You can also specify a different port for each host by using this format: [hostname:port] (e.g. "smtp1.example.com:25;smtp2.example.com"). Hosts will be tried in order.';

$_lang['setting_mail_smtp_keepalive'] = 'SMTP Keep-Alive';
$_lang['setting_mail_smtp_keepalive_desc'] = 'Prevents the SMTP connection from being closed after each mail sending. Not recommended.';

$_lang['setting_mail_smtp_pass'] = 'SMTPのパスワード';
$_lang['setting_mail_smtp_pass_desc'] = 'The password to authenticate to SMTP against.';

$_lang['setting_mail_smtp_port'] = 'SMTPのポート';
$_lang['setting_mail_smtp_port_desc'] = 'Sets the default SMTP server port.';

$_lang['setting_mail_smtp_prefix'] = 'SMTPコネクションの添え字';
$_lang['setting_mail_smtp_prefix_desc'] = 'Sets connection prefix. Options are "", "ssl" or "tls"';

$_lang['setting_mail_smtp_single_to'] = 'SMTP Single To';
$_lang['setting_mail_smtp_single_to_desc'] = 'Provides the ability to have the TO field process individual emails, instead of sending to entire TO addresses.';

$_lang['setting_mail_smtp_timeout'] = 'SMTPのタイムアウト';
$_lang['setting_mail_smtp_timeout_desc'] = 'Sets the SMTP server timeout in seconds. This function will not work in win32 servers.';

$_lang['setting_mail_smtp_user'] = 'SMTPのユーザー';
$_lang['setting_mail_smtp_user_desc'] = 'The user to authenticate to SMTP against.';

$_lang['setting_manager_direction'] = 'テキストの方向';
$_lang['setting_manager_direction_desc'] = '管理画面でのテキストの流れる方向を指定します。「ltr」は、左から右。「rtl」は、右から左です。主にアラビア語圏などで利用する設定です。';

$_lang['setting_manager_date_format'] = '管理画面の日付フォーマット';
$_lang['setting_manager_date_format_desc'] = '管理画面内で用いる日付の書式。PHPのdate関数のフォーマットを用いて指定します。';

$_lang['setting_manager_lang_attribute'] = '管理画面のHTMLとXMLの言語属性';
$_lang['setting_manager_lang_attribute_desc'] = 'Enter the language code that best fits with your chosen manager language, this will ensure that the browser can present content in the best format for you.';

$_lang['setting_manager_language'] = '管理画面の言語';
$_lang['setting_manager_language_desc'] = '管理画面の使用言語を選択してください';

$_lang['setting_manager_login_start'] = 'スタートページ';
$_lang['setting_manager_login_start_desc'] = 'トップページとして使用するドキュメントのIDを入力してください。<strong>注意: 既に存在するドキュメントのIDを入力してください。ドキュメントは公開されている必要があります</strong>';

$_lang['setting_manager_theme'] = '管理画面のテーマ';
$_lang['setting_manager_theme_desc'] = '管理画面で使用するデザインテーマを選択してください。';

$_lang['setting_manager_time_format'] = '管理画面の時刻フォーマット';
$_lang['setting_manager_time_format_desc'] = '管理画面内で用いる時刻の書式。PHPのdate関数のフォーマットを用いて指定します。';

$_lang['setting_manager_use_tabs'] = '管理画面内でタブを使用';
$_lang['setting_manager_use_tabs_desc'] = 'If true, the manager will use tabs for rendering the content panes. Otherwise, it will use portals.';

$_lang['setting_modRequest.class'] = 'Request Handler Class';
$_lang['setting_modRequest.class_desc'] = '';

$_lang['setting_modx_charset'] = 'エンコード';
$_lang['setting_modx_charset_desc'] = '使用したいエンコードを選択してください。日本語も含め、ほとんどの言語ではデフォルト設定のUTF-8が利用できます。';

$_lang['setting_new_file_permissions'] = '新ファイルのパーミッション';
$_lang['setting_new_file_permissions_desc'] = '管理画面を通じて新しいファイルをアップロードしたとき、ここで設定したパーミッションに変更します。この機能はIISなど一部の環境では動作しません。';

$_lang['setting_new_folder_permissions'] = '新フォルダのパーミッション';
$_lang['setting_new_folder_permissions_desc'] = '管理画面を通じて新しいフォルダをを作成したとき、ここで設定したパーミッションに変更します。この機能はIISなど一部の環境では動作しません。';

$_lang['setting_password_generated_length'] = '自動生成するパスワードの長さ';
$_lang['setting_password_generated_length_desc'] = 'The length of the auto-generated password for a User.';

$_lang['setting_proxy_auth_type'] = 'プロキシの認証タイプ';
$_lang['setting_proxy_auth_type_desc'] = 'Supports either BASIC or NTLM.';

$_lang['setting_proxy_host'] = 'プロキシのホスト';
$_lang['setting_proxy_host_desc'] = 'If your server is using a proxy, set the hostname here to enable MODx features that might need to use the proxy, such as Package Management.';

$_lang['setting_proxy_password'] = 'プロキシのパスワード';
$_lang['setting_proxy_password_desc'] = 'The password required to authenticate to your proxy server.';

$_lang['setting_proxy_port'] = 'プロキシのポート';
$_lang['setting_proxy_port_desc'] = 'The port for your proxy server.';

$_lang['setting_proxy_username'] = 'プロキシのユーザー名';
$_lang['setting_proxy_username_desc'] = 'The username to authenticate against with your proxy server.';

$_lang['setting_password_min_length'] = 'パスワードの最小の長さ';
$_lang['setting_password_min_length_desc'] = 'The minimum length for a password for a User.';

$_lang['setting_phpthumb_cache_maxage'] = 'phpThumb Max Cache Age';
$_lang['setting_phpthumb_cache_maxage_desc'] = 'Delete cached thumbnails that have not been accessed in more than X days.';

$_lang['setting_phpthumb_cache_maxsize'] = 'phpThumb Max Cache Size';
$_lang['setting_phpthumb_cache_maxsize_desc'] = 'Delete least-recently-accessed thumbnails when cache grows bigger than X megabytes in size.';

$_lang['setting_phpthumb_cache_maxfiles'] = 'phpThumb Max Cache Files';
$_lang['setting_phpthumb_cache_maxfiles_desc'] = 'Delete least-recently-accessed thumbnails when cache has more than X files.';

$_lang['setting_phpthumb_cache_source_enabled'] = 'phpThumb Cache Source Files';
$_lang['setting_phpthumb_cache_source_enabled_desc'] = 'Whether or not to cache source files as they are loaded. Recommended to off.';

$_lang['setting_phpthumb_imagemagick_path'] = 'phpThumb ImageMagick Path';
$_lang['setting_phpthumb_imagemagick_path_desc'] = 'Optional. Set an alternative ImageMagick path here for generating thumbnails with phpThumb, if it is not in the PHP default.';

$_lang['setting_phpthumb_zoomcrop'] = 'phpThumb Zoom-Crop';
$_lang['setting_phpthumb_zoomcrop_desc'] = 'The default zc setting for phpThumb when used in MODx. Defaults to 0 to prevent zoom cropping.';

$_lang['setting_phpthumb_far'] = 'phpThumb Force Aspect Ratio';
$_lang['setting_phpthumb_far_desc'] = 'The default far setting for phpThumb when used in MODx. Defaults to C to force aspect ratio toward the center.';

$_lang['setting_publish_default'] = '公開デフォルト';
$_lang['setting_publish_default_desc'] = '新しく作成するドキュメントをデフォルトで公開に設定する場合は「はい」を選択してください。';
$_lang['setting_publish_default_err'] = '新しいドキュメントの公開状態を設定してください。';

$_lang['setting_rb_base_dir'] = 'リソースパス';
$_lang['setting_rb_base_dir_desc'] = 'ファイルブラウザディレクトリ(アセットディレクトリ)への物理パスを入力してください。通常この設定は自動的に生成されますが、IISなど一部のサーバでは正常に検出されないことがあります。この場合、イメージディレクトリなどのパスをここに入力することができます（パスはWindowsのエクスプローラで見るものです）。 注意: ファイルブラウザが全てを扱えるようにするためには、ファイルディレクトリにイメージや文書、Flash他のメディアを格納するサブフォルダを含むべきです。';
$_lang['setting_rb_base_dir_err'] = 'リソースパスのパス名を指定してください。';
$_lang['setting_rb_base_dir_err_invalid'] = 'このリソースパスは存在しないかアクセス禁止になっています。適切なパス名を指定しなおすかディレクトリのパーミッションを変更してください。';

$_lang['setting_rb_base_url'] = 'リソースURL';
$_lang['setting_rb_base_url_desc'] = 'ファイルディレクトリ(通常はassetsディレクトリ)への仮想パスを入力してください。MODx設置ディレクトリを基準とした相対パスまたは http://から始まるフルパスを記述します。通常この設定は自動的に生成されますが、IISなど一部のサーバでは正常に検出されないことがあります。)。';
$_lang['setting_rb_base_url_err'] = 'Please state the resource browser base URL.';

$_lang['setting_request_controller'] = 'コントローラのファイル名';
$_lang['setting_request_controller_desc'] = 'リクエストコントローラのファイル名をここで指定します。通常は「index.php」です。';

$_lang['setting_request_param_alias'] = 'エイリアスを受け取るパラメータ';
$_lang['setting_request_param_alias_desc'] = 'The name of the GET parameter to identify Resource aliases when redirecting with FURLs.';

$_lang['setting_request_param_id'] = 'IDを受け取るパラメータ';
$_lang['setting_request_param_id_desc'] = 'The name of the GET parameter to identify Resource IDs when not using FURLs.';

$_lang['setting_resolve_hostnames'] = 'Resolve hostnames';
$_lang['setting_resolve_hostnames_desc'] = 'Do you want MODx to try to resolve your visitors\' hostnames when they visit your site? Resolving hostnames may create some extra server load, although your visitors won\'t notice this in any way.';

$_lang['setting_richtext_default'] = 'デフォルトのエディタ';
$_lang['setting_richtext_default_desc'] = '「はい」を選択すると、デフォルトで新しいリソースを作成する際にリッチテキストエディタを使用します。';

$_lang['setting_search_default'] = '検索可能のデフォルト';
$_lang['setting_search_default_desc'] = '「はい」を選択すると、デフォルトで新しいリソースを作成する際に検索可能にします。';
$_lang['setting_search_default_err'] = 'Please specify whether or not you want documents to be searchable by default.';

$_lang['setting_server_offset_time'] = 'サーバの時間補正';
$_lang['setting_server_offset_time_desc'] = 'Select the number of hours time difference between where you are and where the server is.';

$_lang['setting_server_protocol'] = 'サーバタイプ';
$_lang['setting_server_protocol_desc'] = 'このサイトがSSL接続を使用している場合は、httpsを選択してください。';
$_lang['setting_server_protocol_err'] = 'サーバタイプをhttp・httpsのどちらかで選んでください。';
$_lang['setting_server_protocol_http'] = 'http';
$_lang['setting_server_protocol_https'] = 'https';

$_lang['setting_session_cookie_domain'] = 'Session Cookie Domain';
$_lang['setting_session_cookie_domain_desc'] = 'Use this setting to customize the session cookie domain.';

$_lang['setting_session_cookie_lifetime'] = 'Session Cookie Lifetime';
$_lang['setting_session_cookie_lifetime_desc'] = 'Use this setting to customize the session cookie lifetime in seconds.  This is used to set the lifetime of a client session cookie when they choose the \'remember me\' option on login.';

$_lang['setting_session_cookie_path'] = 'Session Cookie Path';
$_lang['setting_session_cookie_path_desc'] = 'Use this setting to customize the cookie path for identifying site specific session cookies.';

$_lang['setting_session_cookie_secure'] = 'Session Cookie Secure';
$_lang['setting_session_cookie_secure_desc'] = 'Enable this setting to use secure session cookies.';

$_lang['setting_session_handler_class'] = 'Session Handler Classname';
$_lang['setting_session_handler_class_desc'] = 'For database managed sessions, use \'modSessionHandler\'.  Leave this blank to use standard PHP session management.';

$_lang['setting_session_name'] = 'セッション名';
$_lang['setting_session_name_desc'] = 'Use this setting to customize the session name used for the sessions in MODx.';

$_lang['setting_settings_version'] = 'コアのバージョン';
$_lang['setting_settings_version_desc'] = '稼働しているMODxのバージョンです。';

$_lang['setting_set_header'] = 'HTTPヘッダーを設定';
$_lang['setting_set_header_desc'] = '有効にすると、リソースでHTTPヘッダーをセットするように試みます。';

$_lang['setting_signupemail_message'] = 'サインアップメール';
$_lang['setting_signupemail_message_desc'] = 'ユーザ管理画面でユーザーアカウントを作成した時に、ユーザー名とパスワードを記載したメールを送信することができます。このメールの内容を設定してください。<br><strong>注意:</strong> 下記の差し込み文字列は送信時に自動的に置き換えられます。<br><br>[[+sname]] - サイトの名前, <br>[[+saddr]] - サイト管理者のメールアドレス, <br>[[+surl]] - サイトのURL, <br>[[+uid]] - ユーザーのログイン名, <br>[[+pwd]] - ユーザーのパスワード, <br>[[+ufn]] - ユーザーのフルネーム. ';
$_lang['setting_signupemail_message_default'] = 'こんにちは[[+uid]]さん。 \n\n[[+sname]]の管理画面のログイン情報をお送りします。\n\nユーザ名: [[+uid]]\nパスワード: [[+pwd]]\n\nOnce you log into the Content Manager ([[+surl]]), you can change your password.\n\nRegards,\nSite Administrator';

$_lang['setting_site_name'] = 'サイト名';
$_lang['setting_site_name_desc'] = 'サイト名を入力してください。';
$_lang['setting_site_name_err'] = 'サイト名が入力されていません。';

$_lang['setting_site_start'] = 'トップページとして使用するドキュメントのIDを入力してください。';
$_lang['setting_site_start_desc'] = 'トップページとして使用するドキュメントのIDを入力してください。 <strong>注意: 既に存在するドキュメントのIDを入力してください。ドキュメントは公開されている必要があります</strong>';
$_lang['setting_site_start_err'] = 'トップページにしたいリソースのIDを指定してください。';

$_lang['setting_site_status'] = 'サイトステータス';
$_lang['setting_site_status_desc'] = 'このサイトをウェブ上に公開するには「はい」(オンライン)を選択してください。「いいえ」(メンテナンスモード)を選択した場合、訪問者には「メンテナンスモード用ページ」または「メンテナンスモード用メッセージ」が表示されます。';
$_lang['setting_site_status_err'] = 'サイトの状態を「オンライン」「メンテナンスモード」いずれかから選んでください。';

$_lang['setting_site_unavailable_message'] = 'メンテナンスモード時メッセージ';
$_lang['setting_site_unavailable_message_desc'] = 'サイトがメンテナンスモードの時、またはエラー発生時に表示するメッセージです。<strong>注意: このメッセージはメンテナンスモード用ページが設定されていないときのみ表示されます。</strong>';

$_lang['setting_site_unavailable_page'] = 'メンテナンスモード用ページ';
$_lang['setting_site_unavailable_page_desc'] = 'メンテナンスモード時に表示するドキュメントのIDをここに入力してください。 <strong>注意: 実在するドキュメントのIDを指定してください。また公開中であるものに限ります。</strong>';
$_lang['setting_site_unavailable_page_err'] = 'メンテナンスモード時の表示に使用するドキュメントIDを指定してください。';

$_lang['setting_strip_image_paths'] = 'src属性に相対パスを渡す';
$_lang['setting_strip_image_paths_desc'] = 'この設定を「はい」にした場合、ファイルブラウザで選択したファイル（画像・Flash・その他メディアファイルなど）のsrc指定を相対パスで書き出します。CMSでコンテンツを管理する場合は一般的には絶対パスが無難ですが、MODxでサイトを管理する場合はbaseタグを併用することで相対パスで効率よく運用することができます。';

$_lang['setting_tree_root_id'] = 'Tree Root ID';
$_lang['setting_tree_root_id_desc'] = 'Set this to a valid ID of a Resource to start the left Resource tree at below that node as the root. The user will only be able to see Resources that are children of the specified Resource.';

$_lang['setting_udperms_allowroot'] = 'ルートの使用許可';
$_lang['setting_udperms_allowroot_desc'] = 'サイトのルートディレクトリにユーザーがドキュメント/フォルダを作成できるようにしますか? ';
$_lang['setting_unauthorized_page'] = '権限外告知のページ';
$_lang['setting_unauthorized_page_desc'] = 'ユーザーがアクセスを許可されていないドキュメントを要求したとき表示するドキュメントのIDを入力してください。 <strong>注意: 実在するドキュメントのIDを指定してください。また公開中でしかもPublicなアクセスが可能であるものに限ります</strong>';
$_lang['setting_unauthorized_page_err'] = '権限外告知に利用するドキュメントIDを指定してください。';
$_lang['setting_upload_files'] = 'アップロード可能なファイルタイプ';
$_lang['setting_upload_files_desc'] = 'ファイルブラウザを使用して「assets/files/」にアップロードできるメディアファイルの拡張子をカンマで区切って入力してください。';
$_lang['setting_upload_flash'] = 'アップロード可能なFlash';
$_lang['setting_upload_flash_desc'] = 'ファイルブラウザを使用して「assets/flash/」にアップロードできるFlashファイルの拡張子をカンマで区切って入力してください。';

$_lang['setting_upload_images'] = 'アップロード可能な画像タイプ';
$_lang['setting_upload_images_desc'] = 'ファイルブラウザを使用して「assets/images/」にアップロードできる画像ファイルの拡張子をカンマで区切って入力してください。';

$_lang['setting_upload_maxsize'] = 'アップロードサイズの上限';
$_lang['setting_upload_maxsize_desc'] = '管理画面を通じてアップロード可能なファイルの最大サイズを入力してください。サイズはバイト単位で入力します。 <strong>注意: サーバ側で設けられている上限サイズを超えることはできません。</strong>';

$_lang['setting_upload_media'] = 'アップロード可能なマルチメディアタイプ';
$_lang['setting_upload_media_desc'] = 'ファイルブラウザを使用して「assets/media/」にアップロードできるメディアファイルの拡張子をカンマで区切って入力してください。';

$_lang['setting_use_alias_path'] = 'エイリアスパスを使用';
$_lang['setting_use_alias_path_desc'] = 'このオプションを「はい」に設定すると、ドキュメントのエイリアスがパスとして表示されます。例えば、「child」というエイリアスを持ったドキュメント「parent」というエイリアスのフォルダの下に配置されていると、エイリアスパスは「/parent/child.html」になります。<br /><strong>注意: このオプションを「はい」にするとき、つまりエイリアスパスを使用するときは、ドキュメントから参照するものは全て（画像とかCSSとか JavaScriptなど）絶対パスで指定する必要があります。例えば、assets/imagesに対しては/assets/imagesと指定しなければなりません。baseタグを利用すると、この問題をスマートに解決できます。</strong>';

$_lang['setting_use_browser'] = 'ファイルブラウザを使用';
$_lang['setting_use_browser_desc'] = '「はい」を選択するとファイルブラウザを使用できます。これによりユーザーはサーバ上の画像やFlashなどのメディアファイルをブラウズしたり、ファイルをサーバにアップロードすることがきるようになります。';
$_lang['setting_use_browser_err'] = 'ファイルブラウザを使用するかしないか選択してください。';

$_lang['setting_use_editor'] = 'エディタの使用';
$_lang['setting_use_editor_desc'] = 'リッチテキストエディタを使用しますか? HTMLを直接書いた方が良いのでしたら「いいえ」を選択してエディタを使わない設定にすることもできます。この設定は全てのドキュメントおよび全てのユーザーに適用されますので注意してください';
$_lang['setting_use_editor_err'] = 'リッチテキストエディタの使用を選択してください。';

$_lang['setting_use_multibyte'] = 'MB関数を有効(マルチバイト)';
$_lang['setting_use_multibyte_desc'] = 'MB関数を有効にします。日本語環境では必須です。Set to true if you want to use the mbstring extension for multibyte characters in your MODx installation. Only set to true if you have the mbstring PHP extension installed.';

$_lang['setting_webpwdreminder_message'] = 'パスワード変更リクエストメール';
$_lang['setting_webpwdreminder_message_desc'] = 'ウェブユーザが、メールで新しいパスワードを要求する場合に、常に送信されるメッセージを入力します。コンテント管理はそれらの新しいパスワードと有効化情報を含むメールを送信します。<br /><strong>ノート:</strong>コンテント管理は、メッセージを送るときに以下のプレースホルダを置き換えます。<br /><br />[[+sname]] - ウェブサイト名、<br />[[+saddr]] - ウェブサイトのメールアドレス、<br />[[+surl]] - サイトのURL、<br />[[+uid]] - ユーザーのログイン名またはID、<br />[[+pwd]] - ユーザーのパスワード、<br />[[+ufn]] - ユーザーのフルネーム。<br /><br /><strong>[[+uid]] と [[+pwd]] は必ず記載してください。記載しない場合はユーザー名とパスワードはメールで送られないため、ユーザーはユーザー名とパスワードを知ることができません。</strong>';
$_lang['setting_webpwdreminder_message_default'] = 'こんにちは [[+uid]]さん\n\nパスワードを有効化するために、下記のリンクをクリックしてください。:\n\n[[+surl]]\n\n有効化が完了後、下記のパスワードでログインできます。:\n\nパスワード:[[+pwd]]\n\nこのメール内容に心当たりがない場合は、破棄してください。\n\n\n管理者';

$_lang['setting_websignupemail_message'] = 'ウェブサインアップのメールアドレス';
$_lang['setting_websignupemail_message_desc'] = 'ユーザー自らがウェブユーザーアカウントを作成した時に、ユーザー名とパスワードを記載したメールを送信することができます。このメールの内容を設定してください。 <br /><strong>注意:</strong> 下記の差し込み文字列は送信時に自動的に置き換えられます。<br><br>[[+sname]] - サイトの名前, <br>[[+saddr]] - サイト管理者のメールアドレス, <br>[[+surl]] - サイトのURL, <br>[[+uid]] - ユーザーのログイン名, <br>[[+pwd]] - ユーザーのパスワード, <br>[[+ufn]] - ユーザーのフルネーム. <br /><br /><strong>メールの文章を編集するときは、[[+uid]]と[[+pwd]]を残すようにしてください。記述されてないとユーザー名とパスワードが分からないため、ユーザーはログインできません。</strong>';
$_lang['setting_websignupemail_message_default'] = 'こんにちは  [[+uid]]さん \n\n[[+sname]] の管理画面へのログイン情報をお送りします。:\n\nユーザー名: [[+uid]]\nパスワード: [[+pwd]]\n\n[[+surl]]の管理画面へログイン後、パスワードを変更できます。\n\n[[+sname]] 管理者';

$_lang['setting_welcome_screen'] = 'ようこそ画面の表示';
$_lang['setting_welcome_screen_desc'] = '「はい」を選択すると、ようこそページの読み込みが完了したときに、ようこそ画面を表示します。そしてそれ以降は表示しません。';

$_lang['setting_welcome_screen_url'] = 'Welcome Screen URL';
$_lang['setting_welcome_screen_url_desc'] = 'The URL for the welcome screen that loads on first load of MODx Revolution.';

$_lang['setting_which_editor'] = '使用するエディタ';
$_lang['setting_which_editor_desc'] = '使用したいリッチテキストエディタを選択します。パッケージマネージャから他のリッチテキストエディタをダウンロード・インストールできます。';
$_lang['setting_which_element_editor'] = 'エレメントで使用するエディタ';
$_lang['setting_which_element_editor_desc'] = 'エレメントの編集で使用したいリッチテキストエディタを選択します。リッチテキストエディタはパッケージマネージャでダウンロード・インストールできます。';

$_lang['setting_xhtml_urls'] = 'XHTML URLs';
$_lang['setting_xhtml_urls_desc'] = 'If set to true, all URLs generated by MODx will be XHTML-compliant, including encoding of the ampersand character.';
