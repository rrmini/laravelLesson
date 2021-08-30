<?php declare(strict_types=1);

namespace App\Contracts;

interface Parser
{
    public function getDate(string $url): array;
}
