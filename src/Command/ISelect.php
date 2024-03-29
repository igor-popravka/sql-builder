<?php

declare(strict_types=1);

namespace SQLBuilder\Command;



interface ISelect {
    const EXPRESSION_ALL = '*';

    public function __construct (string $expression = ISelect::EXPRESSION_ALL, string ...$_expression);

    public function from (string $table): IFrom;
}