<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);
//define('SERVER_AP', 'yugocorp.sytes.net');
define('SERVER_AP', 'localhost');
define('SERVER_DB', 'localhost');
define('URL_GLOBALCSS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/global/css');
define('URL_ADMINLCSS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/layout/css');
define('URL_ADMINPCSS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/pages/css');
define('URL_GOBALJS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/global/scripts');
define('URL_ADMINLJS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/layout/scripts');
define('URL_ADMINPJS', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/pages/scripts');
define('URL_IMGAP', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/pages/scripts');
define('URL_GOBALPG', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/global/plugins');
define('URL_ADMINLIMG', 'http://'.SERVER_AP.'/pytsimadmin-ci/assets/admin/layout/img');
define('URL_MAIN', 'http://'.SERVER_AP.'/pytsimadmin-ci');
define('URL_MAINDAS', 'http://'.SERVER_AP.'/pytsimadmin-ci/dashboard'); 

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */