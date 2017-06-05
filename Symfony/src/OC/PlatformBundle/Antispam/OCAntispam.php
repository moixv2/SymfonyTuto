<?php
// src/OC/PlatformBundle/Antispam/OCAntispam.php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
  private $mailer;
  private $locale;
  private $minLength;

  public function__construct(\Swift_Mailer $mailer, $locale, $minLength){

    this->mailer = $mailer;
    this->locale = $locale;
    this->minLength = $minLength;
  }

  public function isSpam($text){

    return strlen($text) < $this->minLength;
  }

  }
