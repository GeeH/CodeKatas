<?php

namespace spec\CodeKata\Daily2015\September\Ninth;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Array123Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CodeKata\Daily2015\September\Ninth\Array123');
    }

    function it_should_return_true_if_123_appears_somewhere()
    {
        $this->array123([1, 1, 2, 3, 1])->shouldBe(true);
        $this->array123([1, 1, 2, 1, 2, 3])->shouldBe(true);
    }

    function it_should_return_false_if_123_does_not_appear()
    {
        $this->array123([1, 1, 2, 4, 1])->shouldBe(false);
    }
}
