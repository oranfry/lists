<?php

namespace OranFry\Lists\Linetype;

use OranFry\SimpleFields\Traits\SimpleFields;

class lisst extends \OranFry\Jars\Core\Linetype
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
