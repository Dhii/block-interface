<?php

namespace Dhii\Block\FuncTest;

use Xpmock\TestCase;
use Dhii\Output\BlockAwareInterface;

/**
 * Tests {@see \Dhii\Output\BlockAwareInterface}.
 *
 * @since [*next-version*]
 */
class BlockAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\BlockAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return BlockAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getBlock()
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

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'A valid instance of the test subject could not be created.'
        );
    }
}
