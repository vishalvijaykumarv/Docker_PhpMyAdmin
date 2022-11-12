<?php

/*
* 1st server
*/
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['verbose'] = 'local_host';
$cfg['Servers'][$i]['host'] = '172.22.0.10';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['port']          = '3306';
//$cfg['Servers'][$i]['user']          = '';
//$cfg['Servers'][$i]['password']      = '';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/*
* 2nd server
*/

//$i++;
/* Authentication type */
//$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
//$cfg['Servers'][$i]['verbose'] = 'Mysql_3306';
//$cfg['Servers'][$i]['host'] = '172.22.0.4';
//$cfg['Servers'][$i]['connect_type'] = 'tcp';
//$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
//$cfg['Servers'][$i]['extension'] = 'mysql';
//$cfg['Servers'][$i]['AllowNoPassword'] = false;

