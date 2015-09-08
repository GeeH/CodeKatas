<?php

namespace spec\CodeKata\Daily2015\September\Eighth;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NotStringSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CodeKata\Daily2015\September\Eighth\NotString');
    }

    function it_will_return_a_string_beginning_with_not_unchanged()
    {
        $string = 'not numberwang';
        $this->notString($string)->shouldBe($string);
    }

    function it_will_return_a_string_not_beginning_with_not_with_not_prepended()
    {
        $string = 'numberwang';
        $this->notString($string)->shouldBe('not ' . $string);
    }
}
