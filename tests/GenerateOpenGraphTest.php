<?php

namespace Spatie\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use Spatie\OpenGraph\Types\OpenGraphWebsite;
use Spatie\OpenGraph\Types\OpenGraphBook;
use Spatie\OpenGraph\StructuredProperties\OpenGraphImage;
use Spatie\Snapshots\MatchesSnapshots;

class GenerateOpenGraphTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_can_generate_basic_required_metadata_tags()
    {
        $metaTags = OpenGraphWebsite::create('Title')
            ->url('http://www.example.com')
            ->addImage('http://www.example.com/image.jpg')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_get_the_object_url_from_the_request()
    {
        $_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
        $_SERVER['HTTP_HOST'] = 'www.example.com';
        $_SERVER['REQUEST_URI'] = '/';

        $metaTags = OpenGraphWebsite::create('Title')
            ->addImage('http://www.example.com/image.jpg')
            ->getTagsArray();

        $this->assertEquals($metaTags['og:url'], 'http://www.example.com/');
    }

    /** @test */
    public function it_can_generate_optional_metadata()
    {
        $metaTags = OpenGraphWebsite::create('Title')
            ->url('http://www.example.com')
            ->addImage('http://www.example.com/image.jpg')
            ->description('This is the page description')
            ->siteName('Test Name')
            ->locale('en_US')
            ->addAlternateLocale('nl_BE')
            ->addAlternateLocale('fr_FR')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_generate_metadata_for_multiple_images()
    {
        $metaTags = OpenGraphWebsite::create('Title')
            ->url('http://www.example.com')
            ->addImage('http://www.example.com/image.jpg')
            ->addImage('http://www.example.com/image2.jpg')
            ->addImage(OpenGraphImage::create('http://www.example.com/image3.jpg')
                ->secure_url('https://www.example.com/image3.jpg')
                ->type('image/jpeg')
                ->height(800)
                ->width(600)
            )
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }

    /** @test */
    public function it_can_generate_metadata_for_a_book()
    {
        $metaTags = OpenGraphBook::create('Title')
            ->url('http://www.example.com')
            ->addImage('http://www.example.com/image.jpg')
            ->author('Haruki Murakami')
            ->isbn('978-3-16-148410-0')
            ->releaseDate('date')
            ->addTag('testing-tag')
            ->addTag('testing-tag-2')
            ->getMetaTags();

        $this->assertMatchesSnapshot($metaTags);
    }
}
