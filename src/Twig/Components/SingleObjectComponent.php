<?php

declare(strict_types=1);

namespace App\Twig\Components;

use App\Model\IntWrapper;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class SingleObjectComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: ['value'])]
    public IntWrapper $dto;

    public function mount(): void
    {
        $this->dto = new IntWrapper();
        $this->dto->value = 10;
    }
}
