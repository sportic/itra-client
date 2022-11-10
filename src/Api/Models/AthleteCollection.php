<?php

namespace Sportic\Itra\Api\Models;

use Nip\Collections\Typed\ClassCollection;

class AthleteCollection extends ClassCollection
{
    protected $validClass = Athlete::class;

    public static function fromApiData($data): self
    {
        $items = [];
        foreach ($data as $item) {
            $items[] = Athlete::fromApiData($item);
        }
        return new static($items);
    }
}