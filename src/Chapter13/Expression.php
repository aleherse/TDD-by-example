<?php

namespace Chapter13;

interface Expression
{
    public function reduce($to);
}