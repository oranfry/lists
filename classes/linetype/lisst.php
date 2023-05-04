<?php

namespace lists\linetype;

use simplefields\traits\SimpleFields;

class lisst extends \jars\Linetype
{
    use SimpleFields;

    public function __construct()
    {
        $this->table = 'list';

        $this->simple_string('name');
        $this->simple_string('comment');

        $this->children = [
            (object) [
                'linetype' => 'listitem',
                'property' => 'listitems',
                'tablelink' => 'list_listitem',
                'only_parent' => 'list_id',
            ],
        ];
    }
}
