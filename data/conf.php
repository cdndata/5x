<?php
// June 29, 2023 - 10:46:38
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('error_log', __DIR__.'/errorlog.txt');

$ab_config['check'] = 1; // 1 - cloud, 0 - local
$ab_config['unresponsive'] = 1; // 1 - stop, 0 - skip
$ab_config['phperror'] = 1;
$ab_config['webdir'] = '{webdir}'; // change if renamed Antibot directory
$ab_config['cookie'] = '{cookie}';
$ab_config['js_error_msg'] = 'Your request has been denied.';
$ab_config['email'] = '{email}'; // change to your email
$ab_config['pass'] = '{pass}'; // change to your password
$ab_config['secondpass'] = ''; // delete this line if you forgot second password
$ab_config['salt'] = '{salt}_'.date('Y', time());
$ab_config['timesalt'] = 'Y';
$ab_config['is_bitrix'] = 0;
$ab_config['hits_per_user'] = 500;
$ab_config['input_button'] = 0;
$ab_config['tpl_lang'] = '';
$ab_config['buttons'] = 2;
$ab_config['time_ban'] = '0'; // string
$ab_config['re_check'] = 0;
$ab_config['recaptcha_key'] = '';
$ab_config['recaptcha_secret'] = '';
$ab_config['utm_referrer'] = 1; 
$ab_config['utm_noindex'] = 1;
$ab_config['check_get_ref'] = 1;
$ab_config['bad_get_ref'] = 'q text utm_source yclid ysclid utm_referrer';
$ab_config['secret_allow_get'] = '';
$ab_config['ptrcache_time'] = 10;
$ab_config['antibot_log_tests'] = 1;
$ab_config['antibot_log_local'] = 0;
$ab_config['antibot_log_allow'] = 1;
$ab_config['antibot_log_fake'] = 1;
$ab_config['antibot_log_goodip'] = 0;
$ab_config['antibot_log_block'] = 1;
$ab_config['header_test_code'] = 200;
$ab_config['header_error_code'] = 200;
$ab_config['period_cleaning'] = 'lastmonth';
$ab_config['noarchive'] = 0;
$ab_config['del_ref_query_string'] = 0;
$ab_config['del_page_query_string'] = 0;
$ab_config['last_rule'] = '';
$ab_config['samesite'] = 'Lax';