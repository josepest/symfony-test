<?php


class DummyTest
{
    private $init;

    public function __construct(String $init)
    {
        $this->init = $init;
    }

    /**
     * Get the value of init
     */
    public function getInit()
    {
        return $this->init;
    }

    /**
     * Set the value of init
     *
     * @return  self
     */
    public function setInit($init)
    {
        $this->init = $init;

        return $this;
    }
}
