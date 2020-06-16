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
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CHRP!P_z5/~UCj??i,ecS.Z4A?<+9ZoGeRmVsq1xe<wY~shGz!92f+[M~HVH&}.-' );
define( 'SECURE_AUTH_KEY',  'uih]CEDkEA2;kWwV0PyAT~fcy]5tRB7UeU,|.pkJ6|_x*/D1d&v^iUj1{LX93-)}' );
define( 'LOGGED_IN_KEY',    '^zdoI~~lNgQap83D=sr|1,<VU;adLyn?Bl>PK:dNWV.-yEc|[iV`Xi%2;e#i#B+z' );
define( 'NONCE_KEY',        '8eL~NSI]112a2<3dn=,3.MTQeNW?h{m4G4}[CyN[_ZA+g*|@=C=]!I_w1cpXy2ly' );
define( 'AUTH_SALT',        'hnL4A@q jnq`Gq5S=Cu{#M(OXzDn-~oim-GYMMT.~BF7q96U!w)(y =CO7_%ht;.' );
define( 'SECURE_AUTH_SALT', '4Le1)b=g4qO,lgYndK7})sjJHnao0[dqUa)}7S;po/8x]{ Eu{=pw!,nW6MrD1`S' );
define( 'LOGGED_IN_SALT',   'lSissR/XD?HvuI|t!=DvNe?S[/)4ae{3~fLjD=IS`]3hvF3 oYj.a=&o[buh+W;c' );
define( 'NONCE_SALT',       's]Hlco]n$tAhIn7l.:tc1JX6xY!t<u?E]OD>@tF~V$%~*Xmq^X?x$rApU-7^R33A' );

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
