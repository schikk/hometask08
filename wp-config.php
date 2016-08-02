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
define('DB_NAME', 'hometask');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g,?;tipt.=9VtrQi0w6[/fSe-Bn!5k`<dJJk?@Uuzv7w[=X};56~5RQhI|)+cQEF');
define('SECURE_AUTH_KEY',  '4wcdglpmhO0!MZOcv0Z3>:Q`3c-_>[3G(jX8Vp!:b>=}SgapfRUW6(|<g(+4CHw$');
define('LOGGED_IN_KEY',    '_i+$P^iq^n:!Vh!Bz*kH}ILT*O4R&`mmX;lxUuKO-89/%Q6sUcciq-s8l:9|d<Ec');
define('NONCE_KEY',        '1}duGEDC0a>=R:T%0wU%JsTFrz+o[s{h4ITyraT!:D3tyv{I#6;.f&lRhbZAB6=L');
define('AUTH_SALT',        'p?BhAJ|$B`5o=[lJdzBU)K#H19ot+rRa%) 21s?!*vGhtl2?_8Ls)XeK%86.nS=#');
define('SECURE_AUTH_SALT', 'xil%>@KM3cE3W>-2GIn D8wecl%^93m.IoN,4/vO*E_d)-c5*WVtAxmGY%K1u8J;');
define('LOGGED_IN_SALT',   '7XN#%#-B>=HE-9ZP5h.V9:A>boI_$dtY]p,l9OO-{3{/fLbn]Is6Zd%sN67w}XY0');
define('NONCE_SALT',       '7^U1k5EK(2U7P6Q)}n(]B((?k:b.2>jj>U9A|Pw!r*yrU!&%6[nqOuzS/HZq0S[G');

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
