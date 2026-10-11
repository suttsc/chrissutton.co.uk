<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExportTest extends TestCase
{
    public function test_the_about_page_is_listed_for_export(): void
    {
        // The index links to nothing, so the crawler cannot discover pages on its own.
        $this->assertContains('about', config('export.paths'));
    }

    public function test_every_export_path_renders(): void
    {
        /** @var list<string> $paths */
        $paths = config('export.paths');

        foreach ($paths as $path) {
            $this->get('/'.ltrim($path, '/'))->assertOk();
        }
    }

    public function test_the_public_folder_is_copied_into_the_export(): void
    {
        $this->assertSame(['public' => ''], config('export.include_files'));
    }
}
