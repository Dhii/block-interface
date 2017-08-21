<?php

namespace Dhii\Block\UnitTest;

use Dhii\Block\BlockInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Block\BlockInterface}.
 *
 * @since [*next-version*]
 */
class BlockInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Block\BlockInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @param string $output
     *
     * @return BlockInterface
     */
    public function createInstance($output = '')
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__toString($output)
            ->render()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Util\String\StringableInterface', $subject, 'Subject does not implement a required interface');
        $this->assertInstanceOf('Dhii\Output\RendererInterface', $subject, 'Subject does not implement a required interface');
    }
}
