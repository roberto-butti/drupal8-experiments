<?php

/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 *
 * @package Drupal\hello\Controller
 */
class HelloController extends ControllerBase {
  /**
   * Main.
   *
   * @return string
   *   Return Hello string.
   */
  public function main($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: main with parameter(s): $name")
    ];
  }

}
