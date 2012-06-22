<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Database Type
| -------------------------------------------------------------------------
| If set to TRUE, IonAuth will use MongoDB as its database backend.
*/
$config['use_mongodb'] = TRUE;

/*
| -------------------------------------------------------------------------
| MongoDB Collection.
| -------------------------------------------------------------------------
| IonAuth uses a simplified schema when using MongoDB as backend, here they are:
|
| groups: {
|	_id: GROUP_ID,
|	name,
|	description
| }
|
| login_attempts: {
|	_id: LOGIN_ATTEMPT_ID,
|	ip_address,
|	login,
|	time
| }
|
| users: {
| 	_id: USER_ID,
| 	ip_address,
| 	username, (ensureIndex)
| 	password,
| 	salt,
| 	email, (ensureIndex)
| 	activation_code,
| 	forgotten_password_code, (ensureIndex)
| 	forgotten_password_time,
| 	remember_code,
| 	created_on, (ensureIndex)
| 	last_login,
| 	active, (ensureIndex)
| 	first_name,
| 	last_name,
| 	company,
| 	phone,
| 	groups: [GROUP_ID_1, GROUP_ID_2, ...], (ensureIndex)
| }
|
*/
$config['collections']['users']          = 'users';
$config['collections']['groups']         = 'groups';
$config['collections']['login_attempts'] = 'login_attempts';

/*
| -------------------------------------------------------------------------
| Tables.
| -------------------------------------------------------------------------
| Database table names.
*/
$config['tables']['users']           = 'users';
$config['tables']['groups']          = 'groups';
$config['tables']['users_groups']    = 'users_groups';
$config['tables']['login_attempts']  = 'login_attempts';

/*
 | Users table column and Group table column you want to join WITH.
 |
 | Joins from users.id
 | Joins from groups.id
 */
$config['join']['users']  = 'user_id';
$config['join']['groups'] = 'group_id';

/*
 | -------------------------------------------------------------------------
 | Hash Method (sha1 or bcrypt)
 | -------------------------------------------------------------------------
 | Bcrypt is available in PHP 5.3+
 |
 | IMPORTANT: Based on the recommendation by many professionals, it is highly recommended to use
 | bcrypt instead of sha1.
 |
 | NOTE: If you use bcrypt you will need to increase your password column character limit to (80)
 |
 | Below there is "default_rounds" setting.  This defines how strong the encryption will be,
 | but remember the more rounds you set the longer it will take to hash (CPU usage) So adjust
 | this based on your server hardware.
 |
 | If you are using Bcrypt the Admin password field also needs to be changed in order login as admin:
 | $2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36
 |
 | Becareful how high you set max_rounds, I would do your own testing on how long it takes
 | to encrypt with x rounds.
 */
$config['hash_method']    = 'sha1';	// IMPORTANT: Make sure this is set to either sha1 or bcrypt
$config['default_rounds'] = 8;		// This does not apply if random_rounds is set to true
$config['random_rounds']  = FALSE;
$config['min_rounds']     = 5;
$config['max_rounds']     = 9;

/*
 | -------------------------------------------------------------------------
 | Authentication options.
 | -------------------------------------------------------------------------
 | maximum_login_attempts: This maximum is not enforced by the library, but is
 | used by $this->ion_auth->is_max_login_attempts_exceeded().
 | The controller should check this function and act
 | appropriately. If this variable set to 0, there is no maximum.
 */
$config['site_title']           = "Example.com"; 		// Site Title, example.com
$config['admin_email']          = "admin@example.com"; 	// Admin Email, admin@example.com
$config['default_group']        = 'members'; 			// Default group, use name
$config['admin_group']          = 'admin'; 				// Default administrators group, use name
$config['identity']             = 'email'; 				// A database column which is used to login with
$config['min_password_length']  = 8; 					// Minimum Required Length of Password
$config['max_password_length']  = 20; 					// Maximum Allowed Length of Password
$config['email_activation']     = FALSE; 				// Email Activation for registration
$config['manual_activation']    = FALSE; 				// Manual Activation for registration
$config['remember_users']       = TRUE; 				// Allow users to be remembered and enable auto-login
$config['user_expire']          = 86500; 				// How long to remember the user (seconds)
$config['user_extend_on_login'] = FALSE; 				// Extend the users cookies everytime they auto-login
$config['track_login_attempts'] = FALSE;				// Track the number of failed login attempts for each user or ip.
$config['maximum_login_attempts']     = 3; 				// The maximum number of failed login attempts.
$config['forgot_password_expiration'] = 0; 				// The number of seconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.


/*
 | -------------------------------------------------------------------------
 | Email options.
 | -------------------------------------------------------------------------
 | email_config:
 | 	  'file' = Use the default CI config or use from a config file
 | 	  array  = Manually set your email config settings
 */
$config['use_ci_email'] = FALSE; // Send Email using the builtin CI email class, if false it will return the code and the identity
$config['email_config'] = array(
	'mailtype' => 'html',
);

/*
 | -------------------------------------------------------------------------
 | Email templates.
 | -------------------------------------------------------------------------
 | Folder where email templates are stored.
 | Default: auth/
 */
$config['email_templates'] = 'auth/email/';

/*
 | -------------------------------------------------------------------------
 | Activate Account Email Template
 | -------------------------------------------------------------------------
 | Default: activate.tpl.php
 */
$config['email_activate'] = 'activate.tpl.php';

/*
 | -------------------------------------------------------------------------
 | Forgot Password Email Template
 | -------------------------------------------------------------------------
 | Default: forgot_password.tpl.php
 */
$config['email_forgot_password'] = 'forgot_password.tpl.php';

/*
 | -------------------------------------------------------------------------
 | Forgot Password Complete Email Template
 | -------------------------------------------------------------------------
 | Default: new_password.tpl.php
 */
$config['email_forgot_password_complete'] = 'new_password.tpl.php';

/*
 | -------------------------------------------------------------------------
 | Salt options
 | -------------------------------------------------------------------------
 | salt_length Default: 10
 |
 | store_salt: Should the salt be stored in the database?
 | This will change your password encryption algorithm,
 | default password, 'password', changes to
 | fbaa5e216d163a02ae630ab1a43372635dd374c0 with default salt.
 */
$config['salt_length'] = 10;
$config['store_salt']  = FALSE;

/*
 | -------------------------------------------------------------------------
 | Message Delimiters.
 | -------------------------------------------------------------------------
 */
$config['message_start_delimiter'] = '<p>'; 	// Message start delimiter
$config['message_end_delimiter']   = '</p>'; 	// Message end delimiter
$config['error_start_delimiter']   = '<p>';		// Error mesage start delimiter
$config['error_end_delimiter']     = '</p>';	// Error mesage end delimiter

/* End of file ion_auth.php */
/* Location: ./application/config/ion_auth.php */