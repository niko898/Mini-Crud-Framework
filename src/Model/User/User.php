<?php

namespace Akimov\Crud\Model\User;

class User 
{
    private string $firstName;
    private string $lastName;

    /**
     * Get the value of lastName
     *
     * @return string
     */
    public function getLastName(): string {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get the value of firstName
     *
     * @return string
     */
    public function getFirstName(): string {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self {
        $this->firstName = $firstName;
        return $this;
    }
}