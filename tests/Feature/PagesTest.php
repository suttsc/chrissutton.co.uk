<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_the_index_renders_the_background_with_no_content(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('id="background-container"', false);
        $response->assertDontSee('<h1', false);
        $response->assertDontSee('Senior PHP and Laravel Developer');
    }

    public function test_the_about_page_shows_the_cv(): void
    {
        $response = $this->get('/about');

        $response->assertOk();
        $response->assertSee('id="background-container"', false);
        $response->assertSee('Chris Sutton</h1>', false);
        $response->assertSee('Senior PHP and Laravel Developer');
    }

    public function test_the_about_page_uses_root_relative_asset_urls(): void
    {
        $html = (string) $this->get('/about')->getContent();

        preg_match_all('/<img[^>]+src="([^"]+)"/', $html, $matches);

        $this->assertNotEmpty($matches[1]);

        foreach ($matches[1] as $src) {
            $this->assertMatchesRegularExpression('#^(/|https?://|data:)#', $src, "Image [{$src}] must not use a relative URL.");
        }
    }

    public function test_the_article_pages_render(): void
    {
        $this->get(route('articles.index'))->assertOk();
        $this->get(route('articles.show', ['article' => 'example']))->assertOk();
    }

    public function test_unknown_pages_return_not_found(): void
    {
        $this->get('/does-not-exist')->assertNotFound();
    }
}
