<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Developer Advocate at JetBrains');
        $response->assertSee('When Information Isn\'t Enough');
        $response->assertSee('Commit Your Code 2026');
        $response->assertSee('Magnolia Conf 2025');
        $response->assertSee('RenderATL 2025');
        $response->assertSee('2:00–8:00 PM ET');
        $response->assertSee('9:40 AM');
        $response->assertSee('jetbrains-mono');
        $response->assertSee('localStorage.getItem');
        $response->assertSee('prefers-color-scheme');
        $response->assertSee('id="theme-toggle"', false);
        $response->assertSee('Switch to');
        $response->assertSee('Read the newsletter');
        $response->assertSee('Musings of an Idiot');
        $response->assertSee('musings-of-an-idiot-7414020052481413120');
        $response->assertSee('/fullcircle');
        $response->assertSee('/2025blog');
        $response->assertSee('/santatracker');
        $response->assertSee('/aiblog');
        $response->assertSee('/tutorial');
        $response->assertSee('https://film2code.vercel.app');
        $response->assertSee('https://thejasontorres.com/');
        $response->assertSee('https://lookatmyboyjason.com/');
        $response->assertDontSee('Community Manager');
        $response->assertDontSee('https://jasontorres.com');
        $response->assertDontSee('https://www.jasontorres.com');
        $response->assertDontSee('beehiiv');
        $response->assertDontSee('Fraunces');
    }

    public function test_rss_lists_verified_writing(): void
    {
        $response = $this->get('/rss');

        $response->assertOk();
        $response->assertSee('DevEco 2025');
        $response->assertSee('https://film2code.vercel.app');
        $response->assertDontSee('beehiiv');
    }
}
