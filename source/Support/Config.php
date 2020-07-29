<?php
/**
 *  DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "fsphp");


/**
 * SITE
 */
define("CONF_SITE_NAME", "RafaelSoje");
define("CONF_SITE_LANG", "pt_br");
define("CONF_SITE_DOMAIN", "rafaelsoje.com.br");


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@rafaelsoje");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@rafaelsoje");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "rafaelsoje");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "rafaelsoje");


/**
 *  PROJECT URLs
 */
define("CONF_URL_BASE", "http://localhost/fsphp");
define("CONF_URL_ADMIN", CONF_URL_BASE . "/admin");
define("CONF_URL_ERROR", CONF_URL_BASE . "/404");

/**
 *  DATES
 */
define("CONF_DATE_BR", "d/m/y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 *  SESSION
 */
define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions/");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIM_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", 'trigger');
define("CONF_MESSAGE_INFO", 'info');
define("CONF_MESSAGE_SUCCESS", 'success');
define("CONF_MESSAGE_WARNING", 'warning');
define("CONF_MESSAGE_ERROR", 'error');

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "./../../assets/views");
define("CONF_VIEW_EXT", "php");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "./../storage/uploads");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/" . "cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);


/**
 * MAIL
 */
define("CONF_MAIL_HOST", "");
define("CONF_MAIL_PORT", "");
define("CONF_MAIL_USER", "");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name"=>"", "address"=>""]);
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", "true");
define("CONF_MAIL_OPTION_AUTH", "true");
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");