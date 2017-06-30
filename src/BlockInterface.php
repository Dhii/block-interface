<?php

namespace Dhii\Block;

use Dhii\Util\String\StringableInterface;

/**
 * Something that can be a block.
 *
 * A block is a class that is responsible for generating output.
 *
 * @since [*next-version*]
 */
interface BlockInterface extends StringableInterface
{
    /**
     * Retrieves the rendered output for this block.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function render();
}
