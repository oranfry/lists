<?php

namespace OranFry\Lists\Linetypes;

use OranFry\SimpleFields\Traits\SimpleFields;

class ListItem extends \OranFry\Jars\Core\Linetype
{
    use SimpleFields;

    public function __construct()
    {
        $this->table = 'listitem';

        $this->simple_string('item');
        $this->simple_string('comment');
    }

    public function validate($line): array
    {
        $errors = parent::validate($line);

        if (!$line->item) {
            $errors[] = 'Empty list item not allowed';
        }

        return $errors;
    }
}
