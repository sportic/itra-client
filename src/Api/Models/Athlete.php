<?php

namespace Sportic\Itra\Api\Models;

class Athlete
{
    /**
     * @var mixed|null
     */
    protected int $id;

    /**
     * @var mixed|null
     */
    protected $login;

    /**
     * @var mixed|null
     */
    protected $firstName;

    /**
     * @var mixed|null
     */
    protected $lastName;

    /**
     * @var mixed|null
     */
    protected $gender;

    /**
     * @var mixed|null
     */
    protected $nationality;

    /**
     * @var mixed|null
     */
    protected $birthDate;

    /**
     * @var mixed|null
     */
    protected $idVerified;

    /**
     * @var mixed|null
     */
    protected $nbRes;

    /**
     * @var mixed|null
     */
    protected $town;

    /**
     * @var mixed|null
     */
    protected $pi;

    /**
     * @var mixed|null
     */
    protected $memberId;

    public static function fromApiData($data): self
    {
        $item = new self();
        $item->id = $data['id'] ?? null;
        $item->login = $data['login'] ?? null;
        $item->firstName = $data['firstName'] ?? null;
        $item->lastName = $data['lastName'] ?? null;
        $item->gender = $data['gender'] ?? null;
        $item->nationality = $data['nationality'] ?? null;
        $item->birthDate = $data['birthDate'] ?? null; //1987/10/27
        $item->idVerified = $data['idVerified'] ?? null; // Y|N
        $item->nbRes = $data['nbRes'] ?? null; // Y|N
        $item->town = $data['town'] ?? null; // Y|N
        $item->pi = $data['pi'] ?? null; // Y|N
        $item->memberId = $data['memberId'] ?? null; // Y|N
        return $item;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed|null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed|null
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return mixed|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return mixed|null
     */
    public function getIdVerified()
    {
        return $this->idVerified;
    }

    /**
     * @return mixed|null
     */
    public function getNbRes()
    {
        return $this->nbRes;
    }

    /**
     * @return mixed|null
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @return mixed|null
     */
    public function getPerformanceIndex()
    {
        return $this->pi;
    }

    /**
     * @return mixed|null
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    public function getFullName(): string
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }
}