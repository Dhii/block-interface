<?php

namespace Dhii\Block;

use Dhii\Output\RendererInterface;
use Dhii\Util\String\StringableInterface;

/**
 * Something that can be a block.
 *
 * A block is a class that is responsible for generating output.
 *
 * @since [*next-version*]
 */
interface BlockInterface extends
    RendererInterface,
    StringableInterface
{
}
