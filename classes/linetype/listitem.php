<?php

namespace lists\linetype;

use simplefields\traits\SimpleFields;

class listitem extends \jars\Linetype
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
