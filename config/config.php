<?php

#Caminhos absolutos
$pastaInterna="Recifacil/";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') ? $barra = "" : $barra = "/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG', DIRPAGE.'img/');
define('DIRCSS', DIRPAGE.'lib/css/');
define('DIRJS', DIRPAGE.'lib/js/');

#Dados de Acesso ao Database
define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");

