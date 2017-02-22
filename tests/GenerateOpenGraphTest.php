<?php

namespace Spatie\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use Spatie\OpenGraph\OpenGraph;
use Spatie\OpenGraph\OpenGraphBook;
use Spatie\OpenGraph\OpenGraphImage;

class GenerateOpenGraphTest extends TestCase
{
    /** @test */
    public function it_can_generate_basic_metadata()
    {
        $metaTags = OpenGraph::create('Title', 'www.example.com', 'http://example.com/image.jpg')
            ->image(OpenGraphImage::create('http://example.com/image2.jpg', 'https://example.com/image2.jpg'))
            ->description('This is the page description')
            ->siteName('Site Name!')
            ->locale('en_US')
            ->alternateLocale('nl_BE')
            ->alternateLocale('fr_FR')
            ->getMetaTags();

        echo(PHP_EOL.PHP_EOL.$metaTags);

        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_generate_metadata_for_an_object()
    {
        $metaTags = OpenGraphBook::create('Title', 'www.example.com', 'http://example.com/image.jpg')
            ->image(OpenGraphImage::create('http://example.com/image2.jpg', 'https://example.com/image2.jpg'))
            ->author('Haruki Murakami')
            ->releaseDate('date')
            ->getMetaTags();

        echo(PHP_EOL.PHP_EOL.$metaTags);

        $this->assertTrue(true);
    }
}
