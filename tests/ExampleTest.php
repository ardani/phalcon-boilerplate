<?php
use Phalcon\Http\Client\Request;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url;

class ExampleTest extends TestCase
{
    public function testShouldSeeWelcome()
    {
        $provider = Request::getProvider();
        $response = $provider->get('http://localhost/');

        $this->assertEquals(true,
            str_contains($response->body, "I'm Lightning!")
        );
    }
}
