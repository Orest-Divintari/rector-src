<?php

declare(strict_types=1);

namespace Rector\Tests\TypeDeclaration\Rector\ClassMethod\NarrowObjectReturnTypeRector\Source;

abstract class AbstractTalkFactory
{
    abstract public function build(): Talk;
}