<?php

/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

use GuzzleHttp\Client;

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
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://httpbin.org/get', []);


    return [
        '#type' => 'markup',
        '#markup' => $this->t("CONTENT:".$res->getBody())
    ];
  }

}
