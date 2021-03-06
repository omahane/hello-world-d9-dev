<?php
// TODO: Salutation from Chapter 2
// https://learning.oreilly.com/library/view/drupal-9-module/9781800204621/B16296_02_Final_ASB_ePub.xhtml#_idParaDest-33
//
namespace Drupal\hello_world;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares the salutation to the world.
 */

class HelloWorldSalutation {
  use StringTranslationTrait;
  /**
   * Returns the salutation
   */
  public function getSalutation() {
    $time = new \DateTime();
    $time_written = $time->format('G:i');
    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      return $this->t('Good afternoon world because it is ' . $time_written);
    }
    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      return $this->t('Good morning world because it is ' . $time_written);
    }

    if ((int) $time->format('G') >= 18) {
      return $this->t('Good evening world because it is ' . $time_written);
    }

  }
}