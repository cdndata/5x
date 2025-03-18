<?php
if(!defined('ANTIBOT')) die('access denied');

// если включен демо режим, то ничего нельзя изменять:
if ($ab_config['demo'] == 1) {
echo '<script>document.location.href="?'.$abw.$abp.'=index";</script>';
abDie();
}

$title = abTranslate('phpinfo()');

if(function_exists('opcache_reset')) {
@opcache_reset();
}
clearstatcache(true);

ob_start();
phpinfo();
$s = ob_get_contents();
ob_end_clean();

$content .= '<style>
table {border-collapse: collapse; border: 0; width: 100%; box-shadow: 1px 2px 3px #ccc;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
th {position: sticky; top: 0; background: inherit;}
.p {text-align: left;}
.e {background-color: #ccf; width: 300px; font-weight: bold;}
.h {background-color: #99c; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
.v i {color: #999;}
hr {width: 100%; background-color: #ccc; border: 0; height: 1px;}
</style>';

preg_match ('!<body>(.*?)</body>!siu', $s, $matches);
$content .= $matches[0];
