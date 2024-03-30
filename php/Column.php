<?php

namespace ProtoneMedia\LaravelQueryBuilderInertiaJs;

use Illuminate\Contracts\Support\Arrayable;

class Column implements Arrayable
{
    public function __construct(
        public string $key,
        public string $label,
        public string|null $abbr,
        public bool $canBeHidden,
        public bool $hidden,
        public bool $sortable,
        public bool|string $sorted,
        public string|null $tdClasses,
        public string|null $thClasses
    ) {
    }

    public function toArray()
    {
        return [
            'key'           => $this->key,
            'label'         => $this->label,
            'abbr'          => $this->abbr,
            'can_be_hidden' => $this->canBeHidden,
            'hidden'        => $this->hidden,
            'sortable'      => $this->sortable,
            'sorted'        => $this->sorted,
            'tdClasses'     => $this->tdClasses,
            'thClasses'     => $this->thClasses,
        ];
    }
}
