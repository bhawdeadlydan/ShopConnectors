<?php

namespace rutgerkirkels\ShopConnectors\Models;

/**
 * Class AbstractAddress
 * @package rutgerkirkels\ShopConnectors\Models
 *
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class AbstractAddress extends AbstractModel
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $countryIso2;

    /**
     * @var array
     */
    protected $phoneNumbers = [];

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountryIso2(): string
    {
        return $this->countryIso2;
    }

    /**
     * @param string $countryIso2
     */
    public function setCountryIso2(string $countryIso2)
    {
        $this->countryIso2 = $countryIso2;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return array
     */
    public function getPhoneNumbers(): array
    {
        return $this->phoneNumbers;
    }

    /**
     * @param string $phoneNumber
     * @param string $type
     */
    public function addPhone(string $phoneNumber, string $type = 'landline')
    {
        $phone = new Phone($phoneNumber, $type);

        $this->phoneNumbers[] = $phone;
    }


}