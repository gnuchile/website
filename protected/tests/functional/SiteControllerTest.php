class SiteControllerTest extends WUnitTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/site/index');

//        $this->assertTrue($crawler->filter('html:contains("CHILE")')->count() > 0);
//        $this->assertTrue(true, 'hola123');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("a")')->count());
    }
}
