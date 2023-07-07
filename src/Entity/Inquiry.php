<?php

namespace App\Entity;

class Inquiry
{

  /**
   * @ORM\Column(type="string", nullable=false)
   */
  private $name;
  /**
   * @ORM\Column(type="string", nullable=false)
   */
  private $email;
  /**
   * @ORM\Column(type="text", nullable=false)
   */
  private $message;

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }
}
