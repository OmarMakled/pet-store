<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Domain\Models\Traits;

trait AccessibleTrait
{
    /**
     * Allow for property-style retrieval
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        $fn = 'get' . ucfirst($property);

        if (method_exists($this, $fn)) {
            return $this->{$fn}();
        }
    }
}
