<?php

declare(strict_types=1);

namespace Drupal\anytown\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for anytown.weather_page route.
 */
class WeatherPage extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build(string $style): array {
    // Style should be one of 'short' (default) or 'extended.'
    $style = (in_array($style, ['short', 'extended'])) ? $style : 'short';

    $build['content'] = [
      '#type' => 'markup',
      '#markup' => '<p>The weather forecase for this week is sunny with a chance of meatballs.</p>',
    ];

    if ($style === 'extended') {
      $build['content_extended'] = [
        '#type' => 'markup',
        '#markup' => '<p><strong>Extended forecase: </strong> Looking ahead to next week we expect some snow.</p>',
      ];
    }

    return $build;
  }
}
