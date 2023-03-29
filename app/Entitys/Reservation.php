<?php

namespace App\Entitys;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class Reservation
{
  /**
   * @Assert\NotBlank()
   * @Assert\Length(
   *     min = 1,
   *   max = 11,
   *  minMessage = "Your first name must be at least {{ limit }} characters long",
   * maxMessage = "Your first name cannot be longer than {{ limit }} characters"
   * )
   */
  private $person_id;

  /**
   * @Assert\NotBlank()
   * @Assert\Length(
   *  min = 1,
   *  max = 11,
   *  minMessage = "Your first name must be at least {{ limit }} characters long",
   *  maxMessage = "Your first name cannot be longer than {{ limit }} characters"
   * )
   */
  private $track_id;

  /**
   * @Assert\NotBlank()
   * @Assert\Length(
   *  min = 1,
   *  max = 11,
   *  minMessage = "Your first name must be at least {{ limit }} characters long",
   *  maxMessage = "Your first name cannot be longer than {{ limit }} characters"
   * )
   */
  private $opening_id;

  /**
   * @Assert\NotBlank()
   * @Assert\Date()
   */
  private $date_reservation;

  /**
   * @Assert\NotBlank()
   * @Assert\Time()
   */
  private $time_reservation;

  /**
   * @Assert\NotBlank()
   * @Assert\Length(
   *  min = 1,
   *  max = 8,
   *  minMessage = "Your first name must be at least {{ limit }} characters long",
   *  maxMessage = "Your first name cannot be longer than {{ limit }} characters"
   * )
   */
  private $adults;

  /**
   * @Assert\NotBlank()
   * @Assert\Length(
   *  min = 1,
   *  max = 8,
   *  minMessage = "Your first name must be at least {{ limit }} characters long",
   *  maxMessage = "Your first name cannot be longer than {{ limit }} characters"
   * )
   */
  private $children;

  /**
   * @Assert\Optional()
   * @Assert\Boolean()
   */
  private $is_active;
}
