<?php

namespace ASH\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ASHUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
