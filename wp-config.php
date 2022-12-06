<?php

/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'uborkatv_cleanhouse');

/** Имя пользователя MySQL */
define('DB_USER', 'uborkatv_cleanho');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '3t)&3LWp');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M+6Oi{~*MyN5Ewwa1Hj,+y%u_|]=:Ktd7o5OUOp| ?|KV5q}qTcX30L?tCO6Ppm?');
define('SECURE_AUTH_KEY',  '>:T@n6`S9Ca_pQL:?hNl^$8ha4h!S1Rs-wIaA9L`)H7sw*=OoI0`!xsAoa{O_^^`');
define('LOGGED_IN_KEY',    ' m+bR^GjfEF<b,!$bRqK-+&hfdh{I+}Trw+ L@5.PNb_!Y2Qyj78o`cu0)ndEs*G');
define('NONCE_KEY',        'v+iFx+}J$[(G>G`Q:;vcX$|$O|c/5|q)8X[-pPW6z;fj;3;>z^|>yS-+b}Q|W*w#');
define('AUTH_SALT',        'IznH5L!Hn:l=goC<aOnVoCvQeQ;JJ[H?fFS+0c$e*_6&^!S,71&BpTRr,i;.[^xi');
define('SECURE_AUTH_SALT', 'Iz|q}|zP|^K&~@Igrg;O3T`w*S>qoIFL#gVj)sP7 Az>xAx@*[%*U{+bohnH-n)/');
define('LOGGED_IN_SALT',   'sMcd4l0b7sW/v_!Ug=IF#zD;L4nrPyC`P2?}r>7EST=JM`s6f1E*WvK@<IWP|,8_');
define('NONCE_SALT',       '}IGALv{B%=e+%nHwT272;-g<B0D@a?7Lt.WtZglzyblSO|^6+jdG4Jo1#-EO3V,P');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
define('ALLOW_UNFILTERED_UPLOADS', true);
