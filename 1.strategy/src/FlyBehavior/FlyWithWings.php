<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\FlyBehavior;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I can fly by my wings" . PHP_EOL;
    }
}
