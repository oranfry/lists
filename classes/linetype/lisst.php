<?php

namespace tools\linetype;

class lisst extends \jars\Linetype
{
    public function __construct()
    {
        $this->table = 'list';

        $this->fields = [
            'name' => fn ($records) => $records['/']->name,
            'comment' => fn ($records) => $records['/']->comment,
        ];

        $this->unfuse_fields = [
            'name'=> fn ($line, $oldline) => $line->name,
            'comment'=> fn ($line, $oldline) => $line->comment,
        ];

        $this->children = [
            (object) [
                'linetype' => 'listitem',
                'property' => 'listitems',
                'tablelink' => 'list_listitem',
            ],
        ];
    }
}
