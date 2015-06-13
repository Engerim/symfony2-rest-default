<?php

namespace ACME\PROJECT\Demo\Controller;

use ACME\PROJECT\Demo\Model\Data;

/**
 * @author Alexander Miehe <alexander.miehe@gmail.com>
 */
class All
{
    public function __invoke()
    {
        return [new Data('dummy', 'lorem ipsum')];
    }
}
