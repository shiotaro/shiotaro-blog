<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'shiotaro_wp_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'shiotaro_wp');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'shiotaro_wp');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost:/var/lib/mysql/mysql.sock');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';?y]A+uns1&iX}cp&%+[H%X+}fIjm:/sV5:jrulA!DNq3EN{?)rHJF!}|qm5BU9u');
define('SECURE_AUTH_KEY',  'Vp~uLTKd]EVTrwih+ i$vY]TZGovt?ZOUjzufwEC3+Sw!<e$$#)r(Ur-S,X3JqEv');
define('LOGGED_IN_KEY',    'a`JU|Ss<9H|6ofknKD%)Jfa^{]sWJAtuUN!`jCZKN7:(EGG+O:)=<-}{/r!@X21d');
define('NONCE_KEY',        's2wnByRxFT|on|m/Yt7Qs!aWk?th/Hxd[CLhUjc>F4>},[=1Wzwkdd)-?Imwmp^k');
define('AUTH_SALT',        '[KRZ_3cEq*DY_7{oV#|id:P`ic-{b3b{+-WCdlMMOYURPiZn*B;2/!{1:kR~!XKb');
define('SECURE_AUTH_SALT', '4U^#|3s;1}s#8P=#ATVfi+#_ihD?ou<,Bd+#-|{7n[DYj;#*D;D7+hQ=^,U|}@GG');
define('LOGGED_IN_SALT',   't6O`jv(=bC$a6IGXQtoMfAk`HER>T`+[fqH<lG^hxvAne|,,}`|9p;N7D{mNmS}d');
define('NONCE_SALT',       '+&:7Te!@hT?eILn<+-s+NhjVc)p$SWA/Y<b!mn`0c@M23Yoz*to[!,B6V.J*9<H?');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
