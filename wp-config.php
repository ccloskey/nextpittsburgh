<?php
# Database Configuration
define( 'DB_NAME', 'wp_nextpittsburgh' );
define( 'DB_USER', 'nextpittsburgh' );
define( 'DB_PASSWORD', 'TvyIzbUdGIw9mQf9OqtZ' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '|hMh-7rJLoXa/^d5#{n}e-r#;K3jQ8y9DY_C7MR5#@N|P(s{A)DMyBF@=3R:g~g5');
define('SECURE_AUTH_KEY',  '/_MTj#sWje-A[5qO!5@f*;:1 +C0VmX<mx,=S_@XY_,le1r2Ezf|d[~jHZ{|hU5Y');
define('LOGGED_IN_KEY',    ':QL1fz0I+5,t+xN3(yNpZn>+b)n3+vm40a(K)Jz|ls/:bKl`2H4jJnlKH*mBao i');
define('NONCE_KEY',        'pvc=g-<27|<il>|nW>,A(?lz?5AI Bc{u8PYDV|!vg3sA*JB(D6wR--KQ9}P$-|_');
define('AUTH_SALT',        'yAFM`kBr9^:c!cL j[w3^/!IE(X0w_xk.yG!tr),mr z[b-<ND]^/CT.16}k/w%+');
define('SECURE_AUTH_SALT', 'X]SfZ(*?=L6zv@k?|2nS+3E}0@2E=hv$)@H^y0TbPTn:h4V2Ar-t?+j0lY{_TYgB');
define('LOGGED_IN_SALT',   'L:r~oLi+cN5/g&y/4T<UjSoCccxeqD+uaoaV&z}+L3JfR4*n+lql<GCsyn-&~7f(');
define('NONCE_SALT',       'nJ| DuhzmnO=0Z]le&H<bo fW#qX~bq.ce}.&|2[U0!L;}x%!PEe)M|Fmcx]wvAC');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'nextpittsburgh' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '21592086ba52a8c544203b7465ebe18118225feb' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41883' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.79.173.5' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'nextpittsburgh.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-41883', );

$wpe_special_ips=array ( 0 => '45.79.173.5', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
