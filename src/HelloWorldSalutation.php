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
    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      return $this->t('Good afternoon world');
    }
    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      return $this->t('Good morning world');
    }

    if ((int) $time->format('G') >= 18) {
      return $this->t('Good evening world');
    }

  }
}