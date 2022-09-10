<?php
/*
* First server
*/
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['verbose'] = 'Local_Mysql';
$cfg['Servers'][$i]['host'] = '172.22.0.10';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['AllowNoPassword'] = false;
/*
* Second server
*/
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['verbose'] = 'Second_server';
$cfg['Servers'][$i]['host'] = '172.22.0.12';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'Password123';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['AllowNoPassword'] = false;