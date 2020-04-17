<?php

class CoffeeCup
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $brand;

    /**
     * @var ?int
     */
    private $temperature;

    /**
     * @var int
     */
    private $volume;

    public function __construct(int $volume)
    {
        $this->setVolume($volume);
    }

    /**
     * Get the value of quantity
     *
     * @return  ?int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param  ?int  $quantity
     *
     * @return  self
     */
    public function setQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of brand
     *
     * @return  ?string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @param  ?string  $brand
     *
     * @return  self
     */
    public function setBrand(?string $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of temperature
     *
     * @return  ?int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set the value of temperature
     *
     * @param  ?int  $temperature
     *
     * @return  self
     */
    public function setTemperature(?int $temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get the value of volume
     *
     * @return  ?int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @param  ?int  $volume
     *
     * @return  self
     */
    public function setVolume(?int $volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Siroter le café
     */
    public function sip(?int $sirotage)
    {
        $rest = $this->quantity - $sirotage;

        if ($rest <= 0) {
            echo "Vous n'avez plus rien à siroter";
        } else {
            echo "Il vous reste $rest cl de café.";
            return $this->quantity = $rest;
        }
    }

    /**
     * Remplir la tasse
     */
    public function refill()
    {
        $this->quantity = $this->volume;
        echo "Votre tasse est a nouveau remplie";
    }
}
