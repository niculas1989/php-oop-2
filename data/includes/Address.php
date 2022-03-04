<?php

trait Address
{
    protected string $state;
    protected string $city;
    protected string $street;
    protected string $zip;

    public function setAddress($state, $city, $street, $zip)
    {
        $this->setState($state);
        $this->setCity($city);
        $this->setStreet($street);
        $this->setPostalCode($zip);
    }

    public function getAddress()
    {
        return "$this->state - $this->city - $this->street $this->zip";
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of zip
     */
    public function getPostalCode()
    {
        return $this->zip;
    }

    /**
     * Set the value of zip
     *
     * @return  self
     */
    public function setPostalCode($zip)
    {
        $this->zip = $zip;

        return $this;
    }
}
