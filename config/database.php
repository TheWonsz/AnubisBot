<?php
/**
 * Scara uses Laravel's Eloquent Database system for connecting and
 * pushing to and pulling from the database. Scara supports all drivers
 * Eloquent supports. PostgreSQL, MySQL, Microsoft SQL, and SQLite.
 *
 * For PostgreSQL, use `postgresql` as the driver
 * For MySQL, use `mysql` as the driver
 * For SQLite, use `sqlite` as the driver
 * For MsSQL, use `sqlsrv` as the driver
 */

return [
    // Driver can be 1 of 2 options
    // sqlite or mysql
    'driver'        => 'mysql',

    // Database user info
    'host'          => 'localhost',
    'username'      => 'root',
    'password'      => '',

    // Database info. Prefix and name
    'name'          => 'scaramvc',
    'prefix'        => 'mvc_',

    // If you use SQLite, you need to point to the database's
    // location
    'sqlite_file'   => app_path().'/../storage/database.sqlite',
];
