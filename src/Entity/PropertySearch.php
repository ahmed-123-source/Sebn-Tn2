<?php
namespace App\Entity;
class PropertySearch
{
private $email;
public function getEmail(): ?string
    {
        return $this->email;
    }
public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
} 