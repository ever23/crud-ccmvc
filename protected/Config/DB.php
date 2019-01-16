<?php

return [
   'class' => '\\Cc\\Mvc\\MySQLi',
   'param' => ['localhost', 'root', '', 'id8487085_crud'],
   //'param' => ['localhost', 'id8487085_enyerber', 'ever2310', 'id8487085_crud'],
   'UseStmt'=>true
  ];
/** Sqlite con PDO
 * return [
 *   'class' => '\\Cc\\Mvc\\PDO',
 *   'param' => ['sqlite:'.dirname(__FILE__) . '/../testdb.db']
 * ];
 */

/** Mysql con MySQLi
 * return [
 *   'class' => '\\Cc\\Mvc\\MySQLi',
 *   'param' => ['localhost', 'root', '', 'testDB']
 * ];
 */
 
/** Mysql con PDO
 * return [
 *   'class' => '\\Cc\\Mvc\\PDO',
 *   'param' => ['mysql:host=localhost;dbname=testDB;charset=utf8', 'root', '']
 * ];
 */

/** PosgreSql con PDO
 * return [
 *   'class' => '\\Cc\\Mvc\\PDO',
 *   'param' => ['pgsql:host=localhost;port=5432;dbname=testDB;', 'root', '']
 * ];
 */
