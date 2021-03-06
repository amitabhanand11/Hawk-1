<?php

/**
 * This file is part of Swap.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swap\Tests\Provider;

use Swap\Model\CurrencyPair;
use Swap\Provider\NationalBankOfRomaniaProvider;

class NationalBankOfRomaniaProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Swap\Exception\UnsupportedCurrencyPairException
     */
    public function it_throws_an_exception_when_base_is_not_ron()
    {
        $url = 'http://www.bnr.ro/nbrfxrates.xml';
        $content = file_get_contents(__DIR__ . '/../../Fixtures/Provider/NationalBankOfRomania/nbrfxrates.xml');

        $body = $this->getMock('Psr\Http\Message\StreamableInterface');
        $body
            ->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue($content));

        $response = $this->getMock('\Ivory\HttpAdapter\Message\ResponseInterface');
        $response
            ->expects($this->once())
            ->method('getBody')
            ->will($this->returnValue($body));

        $adapter = $this->getMock('Ivory\HttpAdapter\HttpAdapterInterface');

        $adapter
            ->expects($this->once())
            ->method('get')
            ->with($url)
            ->will($this->returnValue($response));

        $provider = new NationalBankOfRomaniaProvider($adapter);
        $provider->fetchRate(new CurrencyPair('EUR', 'RON'));
    }

    /**
     * @test
     * @expectedException \Swap\Exception\UnsupportedCurrencyPairException
     */
    public function it_throws_an_exception_when_the_pair_is_not_supported()
    {
        $url = 'http://www.bnr.ro/nbrfxrates.xml';
        $content = file_get_contents(__DIR__ . '/../../Fixtures/Provider/NationalBankOfRomania/nbrfxrates.xml');

        $body = $this->getMock('Psr\Http\Message\StreamableInterface');
        $body
            ->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue($content));

        $response = $this->getMock('\Ivory\HttpAdapter\Message\ResponseInterface');
        $response
            ->expects($this->once())
            ->method('getBody')
            ->will($this->returnValue($body));

        $adapter = $this->getMock('Ivory\HttpAdapter\HttpAdapterInterface');

        $adapter
            ->expects($this->once())
            ->method('get')
            ->with($url)
            ->will($this->returnValue($response));

        $provider = new NationalBankOfRomaniaProvider($adapter);
        $provider->fetchRate(new CurrencyPair('RON', 'XXX'));
    }

    /**
     * @test
     */
    public function it_fetches_a_rate()
    {
        $url = 'http://www.bnr.ro/nbrfxrates.xml';
        $content = file_get_contents(__DIR__ . '/../../Fixtures/Provider/NationalBankOfRomania/nbrfxrates.xml');

        $body = $this->getMock('Psr\Http\Message\StreamableInterface');
        $body
            ->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue($content));

        $response = $this->getMock('\Ivory\HttpAdapter\Message\ResponseInterface');
        $response
            ->expects($this->once())
            ->method('getBody')
            ->will($this->returnValue($body));

        $adapter = $this->getMock('Ivory\HttpAdapter\HttpAdapterInterface');

        $adapter
            ->expects($this->once())
            ->method('get')
            ->with($url)
            ->will($this->returnValue($response));

        $provider = new NationalBankOfRomaniaProvider($adapter);
        $rate = $provider->fetchRate(new CurrencyPair('RON', 'EUR'));

        $this->assertSame('4.4856', $rate->getValue());
        $this->assertEquals(new \DateTime('2015-01-12'), $rate->getDate());
    }

    /**
     * @test
     */
    public function it_fetches_a_multiplier_rate()
    {
        $url = 'http://www.bnr.ro/nbrfxrates.xml';
        $content = file_get_contents(__DIR__ . '/../../Fixtures/Provider/NationalBankOfRomania/nbrfxrates.xml');

        $body = $this->getMock('Psr\Http\Message\StreamableInterface');
        $body
            ->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue($content));

        $response = $this->getMock('\Ivory\HttpAdapter\Message\ResponseInterface');
        $response
            ->expects($this->once())
            ->method('getBody')
            ->will($this->returnValue($body));

        $adapter = $this->getMock('Ivory\HttpAdapter\HttpAdapterInterface');

        $adapter
            ->expects($this->once())
            ->method('get')
            ->with($url)
            ->will($this->returnValue($response));

        $provider = new NationalBankOfRomaniaProvider($adapter);
        $rate = $provider->fetchRate(new CurrencyPair('RON', 'HUF'));

        $this->assertSame('0.014092', $rate->getValue());
        $this->assertEquals(new \DateTime('2015-01-12'), $rate->getDate());
    }
}

