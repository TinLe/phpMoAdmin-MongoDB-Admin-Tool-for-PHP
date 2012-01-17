<?php error_reporting(E_ALL | E_STRICT);
/**
 * phpMoAdmin - built on a stripped-down version of the high-performance Vork Enterprise Framework
 *
 * www.phpMoAdmin.com
 * www.Vork.us
 * www.MongoDB.org
 *
 * @version 1.1.0
 * @author Eric David Benari, Chief Architect, phpMoAdmin
 * @license GPL v3 - http://vork.us/go/mvz5
 */

/**
 * To enable password protection, uncomment below and then change the username => password
 * You can add as many users as needed, eg.: array('scott' => 'tiger', 'samantha' => 'goldfish', 'gene' => 'alpaca')
 */
//$accessControl = array('scott' => 'tiger');

/**
 * Uncomment to restrict databases-access to just the databases added to the array below
 * uncommenting will also remove the ability to create a new database
 */
//moadminModel::$databaseWhitelist = array('admin');

/**
 * Sets the design theme - themes options are: swanky-purse, trontastic and classic
 */
define('THEME', 'trontastic');

/**
 * Allow connections to more than one MongoDB Host, port, DB, etc.
 */
$mongoServers = array(
	'Server 1' => array(
		'host' => 'localhost',
		'port' => '27017',
		'db'   => '',
		'user' => '',
		'password' => ''),
	'Server 2' => array(
		'host' => 'foo.mongolab.com',
		'port' => '27777',
		'db'   => 'db123',
		'user' => 'db123',
		'password' => 'db123'),
);

/**
 * To connect to a remote or authenticated Mongo instance, define the connection string in the MONGO_CONNECTION constant
 * mongodb://[username:password@]host1[:port1][,host2[:port2:],...]
 * If you do not know what this means then it is not relevant to your application and you can safely leave it as-is
 */
define('MONGO_CONNECTION', '');

/**
 * Set to true when connecting to a Mongo replicaSet
 * If you do not know what this means then it is not relevant to your application and you can safely leave it as-is
 */
define('REPLICA_SET', false);

/**
 * Default limit for number of objects to display per page - set to 0 for no limit
 */
define('OBJECT_LIMIT', 100);

/**
 * Contributing-developers of the phpMoAdmin project should set this to true, everyone else can leave this as false
 */
define('DEBUG_MODE', false);
?>

