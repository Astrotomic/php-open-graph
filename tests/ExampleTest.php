<?php

namespace Spatie\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use Spatie\OpenGraph\OpenGraph;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {

        OpenGraph::videoMovie('Title', 'www.url.com', 'image.url/here.jpg')
            ->addVideo(function(OpenGraphVideo $video) {
                $video->addActor('Michael Cera');
                $video->addActor('Keanu Reeves');
                $video->durationInMinutes(345);
            })
            ->locale('en_US')
            ->metaTags();

        $this->assertTrue(true);
    }
}
