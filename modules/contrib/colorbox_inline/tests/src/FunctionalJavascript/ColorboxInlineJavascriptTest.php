<?php

namespace Drupal\Tests\colorbox_inline\FunctionalJavascript;

use Drupal\filter\Entity\FilterFormat;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\node\Traits\ContentTypeCreationTrait;
use Drupal\Tests\node\Traits\NodeCreationTrait;

/**
 * Test that Colorbox Inline functions.
 *
 * @group colorbox_inline
 */
class ColorboxInlineJavascriptTest extends WebDriverTestBase {

  use NodeCreationTrait;
  use ContentTypeCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'colorbox_inline',
    'node',
    'text',
  ];

  /**
   * How long to wait for colorbox to launch.
   */
  const COLORBOX_WAIT_TIMEOUT = 500;

  /**
   * Test Node.
   *
   * @var \Drupal\node\NodeInterface
   */
  protected $node;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->createContentType(['type' => 'page']);
    FilterFormat::create([
      'format' => 'full_html',
      'name' => 'Full HTML',
    ])->save();
    $this->node = $this->createNode([
      'body' => [
        [
          'value' => '<p><a data-colorbox-inline=".test-src" href="#">USS Voyager</a></p>
                      <div class="test-src" style="display:none;">NCC-74656</div>',
          'format' => 'full_html',
        ],
      ],
    ]);
  }

  /**
   * Test the inline colorbox launches when a link is clicked.
   */
  public function testInlineColorbox(): void {
    $page = $this->getSession()->getPage();
    $this->drupalGet('node/' . $this->node->id());
    $this->clickLink('USS Voyager');
    $this->getSession()->wait(static::COLORBOX_WAIT_TIMEOUT);
    $this->assertSession()->elementContains('css', '#colorbox', 'NCC-74656');
  }

}
