<?php

declare(strict_types=1);

namespace Drupal\anytown\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a hello world block.
 */
// The Drupal `Block` attribute, telling Drupal we're defining a block.
#[Block(
  id: 'anytown_hello_world',
  admin_label: new TranslatableMarkup('Hello world'),
  category: new TranslatableMarkup('Custom')
)]
// Class name matches `HelloWorldBlock.php`, so it matches PSR-4 standard.
class HelloWorldBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  // Returns a structured _renderable array_ instead of an HTML string.
  public function build(): array {
    $today = (new \DateTime())->format('d-m-y');

    $build['content'] = [
      '#markup' => $this->t('Hello, @test World! <br /> Does this go into a new line of text?', ['@test' => $today]),
    ];
    return $build;
  }
}
