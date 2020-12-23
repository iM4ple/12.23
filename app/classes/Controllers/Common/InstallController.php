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
            'name' => 'Antanas',
            'surname' => 'A.',
            'email' => 'antanas@post.lt',
            'password' => 'antanas123',
            'phone' => '+37062011122',
            'address' => 'Gedimino g. 9, Vilnius',
        ]);
        App::$db->insertRow('users', [
            'name' => 'Petras',
            'surname' => 'P.',
            'email' => 'petras@post.lt',
            'password' => 'petras123',
            'phone' => '+37062022332',
            'address' => 'Antakalnio g. 1, Vilnius',
        ]);

        // Feedback (comments) table
        App::$db->createTable('comments');
        App::$db->insertRow('comments', [
            'user_id' => 0,
            'timestamp' => 1607641838,
            'comment' => 'Ačiū. Labai patiko',
        ]);
        App::$db->insertRow('comments', [
            'user_id' => 1,
            'timestamp' => 1608641838,
            'comment' => 'Užeisiu dar kartą. Sėkmės',
        ]);

        print 'Duomenu bazė paruošta!';
    }
}

