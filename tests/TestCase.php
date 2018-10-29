<?php

namespace GoogleShokry\BladeDirectives\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;
use GoogleShokry\BladeDirectives\Test\Concerns\RendersBlade;
use GoogleShokry\BladeDirectives\Test\Concerns\CreatesApplication;

class TestCase extends BaseTestCase
{
    use CreatesApplication, RendersBlade;

    /**
     * Assert that blade markup and view data render HTML markup.
     *
     * @param string $expectedHtml
     * @param string $viewContent blade markup
     * @param array $viewData
     * @return void
     */
    protected function assertBladeRenders($expectedHtml, $viewContent, $viewData = [])
    {
        $this->assertEquals($expectedHtml, $this->renderBlade($viewContent, $viewData));
    }
}
