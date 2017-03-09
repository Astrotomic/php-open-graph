<?php

namespace Spatie\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use Spatie\OpenGraph\Types\OpenGraphWebsite;
use Spatie\OpenGraph\Types\OpenGraphBook;
use Spatie\OpenGraph\OpenGraphImage;
use Spatie\Snapshots\MatchesSnapshots;

class GenerateOpenGraphTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_can_generate_basic_metadata()
    {
        $metaTags = OpenGraphWebsite::create('Title', 'http://www.example.com', 'http://example.com/image.jpg')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_generate_optional_metadata()
    {
        $metaTags = OpenGraphWebsite::create('Title', 'http://www.example.com', 'http://example.com/image.jpg')
            ->description('This is the page description')
            ->siteName('Test Name')
            ->locale('en_US')
            ->alternateLocale('nl_BE')
            ->alternateLocale('fr_FR')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_generate_metadata_for_multiple_images()
    {
        $metaTags = OpenGraphWebsite::create('Title', 'http://www.example.com', 'http://example.com/image.jpg')
            ->image(OpenGraphImage::create('http://example.com/image2.jpg', 'https://example.com/image2.jpg'))
            ->image(OpenGraphImage::create('http://example.com/image3.jpg', 'https://example.com/image3.jpg', 'image/jpeg', 800, 600))
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_generate_metadata_for_a_book()
    {
        $metaTags = OpenGraphBook::create('Title', 'http://www.example.com', 'http://example.com/image.jpg')
            ->author('Haruki Murakami')
            ->isbn('978-3-16-148410-0')
            ->releaseDate('date')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }
}
