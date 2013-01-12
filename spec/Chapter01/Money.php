<?php

namespace spec\Chapter01;

use PHPSpec2\ObjectBehavior;

class Money extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(5);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Chapter01\Money');
    }

    function it_should_multiply_by_multiplier()
    {
        $numbers = array(0=>0,2=>10,50=>250);

        foreach($numbers as $times => $return) {
            $this->times($times)->shouldReturn($return);
        }
    }
}
