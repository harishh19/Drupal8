<?php
/**
 * @file
 * @author Rakesh James
 * Contains \Drupal\baxter\Controller\BaxterController.
 */
namespace Drupal\baxter\Controller;
/**
 * Provides route responses for the Example module.
 */
class BaxterController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function helloworld() {
    $element = array(
      '#markup' => 'Hello world!',
    );
    return $element;
  }
}
