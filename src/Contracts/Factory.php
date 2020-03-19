<?php
namespace Paulm17\Ulid\Contracts;

interface Factory
{
    public function generate(): string;
}
