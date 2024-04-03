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
define( 'DB_NAME', 'getpayce' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '@f ,(*@wM_(}7q$v(#{6)EQhyF)%u$3,2LA<=ndVW$0;FeY;j>B|0mLav[lo&}IW' );
define( 'SECURE_AUTH_KEY',  '8wfd/~ghJv}-I!NQea/<rkGR0QoFiSO+ByKp0f+v^!2D$uZx-u`1?OCnu{haay-|' );
define( 'LOGGED_IN_KEY',    '84R,lIU:oScHoT_L:V>|}%ZBTBEhP*KU6Ri^&fWe^W1xZk~KXbZnNdN*LeY;8IP*' );
define( 'NONCE_KEY',        'T%FipZC6iTaveKE>%9u}HV&a:IG(3ay53 +*pk^sHBF^!C<O,jQO;Y]Tb5l8>]%~' );
define( 'AUTH_SALT',        '] S]j?Unb|IpgxZb]U|UwaC|&2;1*rn%Pie~{6D_N`R[WP<hqq^~V]`P=p&xaZz)' );
define( 'SECURE_AUTH_SALT', '-[5a(V:lVav;~qQMvbh$9B$JX=,I7XWc_t}E.}@6}Ol4VehUiW.sxNtvl|OeQ;]v' );
define( 'LOGGED_IN_SALT',   '%h}m)n$Y_w44LJb)Pb08Yq6V9je.HX@_;UOfr=O{zk)!51O~QTFQD-b4x<u( aRQ' );
define( 'NONCE_SALT',       '_+)<s2ZLn^,:e>mu}J8OKwR{/Tgr*mxi(Jp<xFZE6yr/u,AdRl0];a`5q<LuRT,w' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
