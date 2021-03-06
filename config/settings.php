<?php
return array(
    /**
     * Which type of store to use.
     *
     * Valid options are 'json' and 'database'.
     */
    'store' => 'database',

    /**
     * If the json store is used, give the full path to the .json file
     * that the store writes to.
     */
    'path' => storage_path() . '/app/settings.json',

    /**
     * If the database store is used, give the name of the database
     * table to use.
     */
    'table' => 'settings',
);
