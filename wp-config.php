<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u1481175_svoi');

/** Имя пользователя MySQL */
define('DB_USER', 'u1481175_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vISVOt4i');

/** Имя сервера MySQL */
define('DB_HOST', 'server21.hosting.reg.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L4d[y_`TTIW@gC4?b<>?6>3KLMfcOU&KF1@JDyPz(ZuVtHFP)7:P`c9<`#+P@Sig');
define('SECURE_AUTH_KEY',  '7@%]`o)jL254dIlD?<aX$hI7f+r0V0l`94mse{c*Z*}z_bvm?f>W&cVm+rd~GCa>');
define('LOGGED_IN_KEY',    '=fxYihg9(FaH^E82GGTdKVgeK0JA%T3-w?*XdW/)l6IG9}j@&+%zJB%:p8[MOyw0');
define('NONCE_KEY',        'l|)<t}l:KCq4A>6(yPmXJ@pZ7;8*xqG_AW(Yq>S{*rDX~4gHN?,A],W8}QgD:FGM');
define('AUTH_SALT',        '] C6rp(DC!)L->XeR_#A[`REL#CIl<$jzrb$ZomSdRNXkTxBgMt_ekMM9@awXD[-');
define('SECURE_AUTH_SALT', '.HH$V&dE;- KoUt]hJ|vWqj>ByzpP>}Xp&l#bifX)0eX .9jzSBCMd~`NFLHk:;V');
define('LOGGED_IN_SALT',   '9HS|]]xzV74lfY;xL,,G 0R/^Hm4Nah<SOB^g7t]nKzL{y$;ts$L;Y[xcsj4#VQ=');
define('NONCE_SALT',       'r7_`hpU!KX3#Rq`%9:rr+`%0MH[hE0^v-~@&KY? B+/!VE.=r5TN;5:tG|!1AX~4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
