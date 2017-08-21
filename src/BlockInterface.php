<?php

namespace Dhii\Output;

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
