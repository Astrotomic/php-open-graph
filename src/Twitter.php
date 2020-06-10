<?php
namespace Astrotomic\OpenGraph;

use Astrotomic\OpenGraph\Types\Twitter\Player;
use Astrotomic\OpenGraph\Types\Twitter\Summary;
use Astrotomic\OpenGraph\Types\Twitter\SummaryLargeImage;

class Twitter{

	public static function summary(?string $title = null): Summary{
		return Summary::make($title);
	}

	public static function summaryLargeImage(?string $title = null): SummaryLargeImage{
		return SummaryLargeImage::make($title);
	}

	public static function player(?string $title = null): Player{
		return Player::make($title);
	}

}