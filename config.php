<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'DATABASE_NAME';
$CFG->dbuser    = 'DATABASE_USER';
$CFG->dbpass    = 'DATABASE_PASSWORD';
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://example.com';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
