<?php
namespace Monad\Feature;

use Monad\MonadInterface;

interface LiftInterface
{
    /**
     * Converts values returned by regular function to monadic value.
     *
     * @param callable $transformation
     * @return MonadInterface
     */
    public function lift(callable $transformation);
}