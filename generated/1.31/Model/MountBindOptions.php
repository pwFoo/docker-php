<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class MountBindOptions
{
    /**
     * @var mixed
     */
    protected $propagation;

    /**
     * @return mixed
     */
    public function getPropagation()
    {
        return $this->propagation;
    }

    /**
     * @param mixed $propagation
     *
     * @return self
     */
    public function setPropagation($propagation = null)
    {
        $this->propagation = $propagation;

        return $this;
    }
}