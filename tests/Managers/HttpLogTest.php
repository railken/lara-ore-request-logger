<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\HttpLogFaker;
use Amethyst\Managers\HttpLogManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class HttpLogTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = HttpLogManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = HttpLogFaker::class;

    /** @test */
    public function it_will_log_request()
    {
        $this->post('test', ['query' => 'foo']);

        /** @var \Amethyst\Models\HttpLog */
        $resource = $this->getManager()->getRepository()->findOneBy(['method' => 'POST']);
        $this->assertEquals('foo', $resource->request['body']['query']);
        $this->assertEquals(200, $resource->status);
        $this->assertArraySubset(['body' => 'bazinga'], $resource->response);
    }

    /** @test */
    public function it_will_not_log_request()
    {
        $this->post('test', ['password' => 'secret']);

        /** @var \Amethyst\Models\HttpLog */
        $resource = $this->getManager()->getRepository()->findOneBy(['method' => 'POST']);
        $this->assertEquals(false, isset($resource->request['body']['password']));
    }
}
