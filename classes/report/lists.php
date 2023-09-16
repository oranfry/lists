<?php

namespace lists\report;

use obex\Obex;

class lists extends \jars\Report
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
