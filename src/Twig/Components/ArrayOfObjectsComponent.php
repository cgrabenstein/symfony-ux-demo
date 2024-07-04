<?php

declare(strict_types=1);

namespace App\Twig\Components;

use App\Model\IntWrapper;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class ArrayOfObjectsComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    /**
     * @var IntWrapper[]
     */
    public array $dtos;

    public function mount(): void
    {
        $one = new IntWrapper();
        $one->value = 1;

        $two = new IntWrapper();
        $two->value = 2;

        $three = new IntWrapper();
        $three->value = 3;

        $this->dtos = [$one, $two, $three];
    }
}
