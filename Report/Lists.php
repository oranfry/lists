<?php

namespace OranFry\Lists\Report;

use OranFry\Obex\Obex;

class Lists extends OranFry\Jars\Core\Report
{
    public function __construct()
    {
        $this->listen = [
            'list' => (object) [
                'children' => ['listitems'],
            ],
        ];

        $this->sorter = Obex::createStringCmp('name');
    }
}
