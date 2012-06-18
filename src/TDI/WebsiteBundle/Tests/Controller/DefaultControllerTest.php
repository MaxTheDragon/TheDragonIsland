<?php
namespace TDI\WebsiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase {
    public function testIndex() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Max');

        $this->assertTrue($crawler->filter('html:contains("Hello Max")')->count() > 0);
    }
}
