<?php

namespace App\Controllers\Common;

use App\App;
use Core\FileDB;

class InstallController
{
    public function install()
    {
        App::$db = new FileDB(DB_FILE);

        // Users table
        App::$db->createTable('users');
        App::$db->insertRow('users', [
            'name' => 'Mindaugas',
            'surname' => 'R.',
            'email' => 'klevas@post.lt',
            'password' => 'klevas123',
            'phone' => '+37062011122',
            'address' => 'Antakalnio g. 22, Vilnius',
        ]);

        // Feedback (comments) table
        App::$db->createTable('comments');
        App::$db->insertRow('comments', [
            'user_id' => 0,
            'timestamp' => 1607641838,
            'comment' => 'Ačiū:) Labai rekomenduoju.',
        ]);

        print 'Duomenų bazė išvalyta!';
    }
}

