<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'aleks_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'aleks' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '252190rastypO#' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
    define('AUTH_KEY',         'RZAd6P+;NB(Zy6dW1bL;p-r-T[h2G(Ec{EqStXs)MRNAdG<*a~ejw(Jyqo8.tTZr');
	define('SECURE_AUTH_KEY',  ',.ITax``&s$ifZ# 3$?a}=/l0pm`m!1>>*u&>|N`_}bwS39%W&JfIN/n8o-=%all');
	define('LOGGED_IN_KEY',    ',CMq&AZQb|KsBCiu#6E5?b5[(OH%)V,8|7_XX7pm]K#k|D<usg3?XYc%ytmP{Gg9');
	define('NONCE_KEY',        'gETA EpEK/gHn~?C_hBT$f3;!V+|9sn(G_BKE=,w_x0nF_K%H,nSq5#RT +QJAs<');
	define('AUTH_SALT',        'k3z(1uwSuAmrfE6Xd+f@^C#v^u8p7,y~h>*o}C%2qNMo#B7o2E,OZrR,wv+DVv2X');
	define('SECURE_AUTH_SALT', 'qnHN6hAdAB=g@_7s|B(5rd<|yxPEe|Wq42)*dY2~~A*=%i;;|rIYCoijR~Ea8 ql');
	define('LOGGED_IN_SALT',   'Mr6W>GX84kSX&xUf3ax9rj8F+_$.TH*0ImJ`q0_K<SLEaY86=~[0DZ+Eck?4xA1H');
	define('NONCE_SALT',       '`^l+%3YA{f|UcR8=Q)Tuea)t,soD8vBo J-K+fJ-FUb<IQ|99Z(mm8d|3!`)@l^7');

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */


define('FS_METHOD', 'direct');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
