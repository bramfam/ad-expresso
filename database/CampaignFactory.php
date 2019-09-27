<?php
use App\Campaign;
class CampaignFactory
{
	public static function createPublished($overrides = [])
	{
		return factory(Campaign::class)->create($overrides)->publish();
	}
}