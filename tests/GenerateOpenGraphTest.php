<?php

namespace Astrotomic\OpenGraph\Test;

use Astrotomic\OpenGraph\StructuredProperties\Image;
use Astrotomic\OpenGraph\Types\Book;
use Astrotomic\OpenGraph\Types\Website;
use DateTime;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class GenerateOpenGraphTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_can_generate_basic_required_metadata_tags(): void
    {
        $og = Website::make('Title')
            ->url('http://www.example.com')
            ->image('http://www.example.com/image.jpg');

        $this->assertMatchesHtmlSnapshot((string)$og);
    }

    /** @test */
    public function it_can_generate_optional_metadata(): void
    {
        $og = Website::make('Title')
            ->url('http://www.example.com')
            ->image('http://www.example.com/image.jpg')
            ->description('This is the page description')
            ->siteName('Test Name')
            ->locale('en_US')
            ->alternateLocale('nl_BE')
            ->alternateLocale('fr_FR');

        $this->assertMatchesHtmlSnapshot((string)$og);
    }

    /** @test */
    public function it_can_generate_metadata_for_multiple_images()
    {
        $og = Website::make('Title')
            ->url('http://www.example.com')
            ->image('http://www.example.com/image.jpg')
            ->image(
                Image::make('http://www.example.com/image2.jpg')
                    ->secureUrl('https://www.example.com/image3.jpg')
                    ->mimeType('image/jpeg')
                    ->height(800)
                    ->width(600)
            )
            ->image('http://www.example.com/image3.jpg');

        $this->assertMatchesHtmlSnapshot((string)$og);
    }

    /** @test */
    public function it_can_generate_metadata_for_a_book()
    {
        $og = Book::make('Title')
            ->url('http://www.example.com')
            ->image('http://www.example.com/image.jpg')
            ->author('Haruki Murakami')
            ->isbn('978-3-16-148410-0')
            ->releasedAt(new DateTime('2020-06-05 23:00'))
            ->tag('testing-tag')
            ->tag('testing-tag-2');

        $this->assertMatchesHtmlSnapshot((string)$og);
    }
}
