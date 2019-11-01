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
define( 'DB_NAME', 'anastasia' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'anastasia' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R,kEm/wwZCm-s-8?iX]*lE^~Tg@0&;$)^}UJL;?83+a+v5qXaDCN9|VTZyworrtY' );
define( 'SECURE_AUTH_KEY',  '=e3sty s-7L&4it1Q?PEF3v*=S.+9aXk=2?#FLoc/oaa>{KUY17P~*NLGAoB~`/0' );
define( 'LOGGED_IN_KEY',    '1@Q.j]PR(c7T9/$[Pwe`er8SuY X[`kkCeI0btz7c//pqo&-EhHef1Cfkxz$U/QR' );
define( 'NONCE_KEY',        '0Haqf|g7XDY+BrJ$Zkl`<@!/OZkIH,TOU-Ev}z%;E&aK,w$)Y:Iir$_dd_JOZ;xa' );
define( 'AUTH_SALT',        '.Ozq#cmRf^K9@>}JmDjve;sAC{La**;`Y=9JsCuLEZ=b5hg (^<Z&ls{O*r5q6Hn' );
define( 'SECURE_AUTH_SALT', '?Dxf[[Ee^gd+k,H!31Xl(OsGQj@p.g^r8J[:}Mr-fdG;OuJZz:XQW@,?LT?%}!y1' );
define( 'LOGGED_IN_SALT',   'SxO_)?HFr{VIaf$?wwL/E2b$*tcPR0N6.&RE{peB}s8CzDP,`tcry9Pwxr9tc(1 ' );
define( 'NONCE_SALT',       '<R4{wzH,Ak!l&$nI|Gt5ma;2+I;X1Bncd&8./Ts?!JIO4k^9CDE}aPgOuu,SyWI9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wordpress.loc');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* Это всё, дальше не редактируем. Успехов! */
define('WP_ALLOW_MULTISITE', true);


/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
