<?php

namespace Dhii\Block;

use Dhii\Output\RendererInterface;
use Dhii\Util\String\StringableInterface;

/**
 * Represents a unit of output.
 *
 * @since [*next-version*]
 */
interface BlockInterface extends
    RendererInterface,
    StringableInterface
{
}
