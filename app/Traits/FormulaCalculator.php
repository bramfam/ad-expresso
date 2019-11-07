<?php 
namespace App\Traits ; 

trait FormulaCalculator {  
	
	/*
	If a campaign cost an advertiser $100 and they received 32 clicks, the CPC would be $3.125 (100/32 = #.125) If you are a publisher levering a demand source to earn revenue and your inventory has a CPC of $3.25, you are in the high end of the spectrum. Some CPC’s on certain advertisements can range anywhere from $.01 – $4.00 on average. It is import to understand this metric to see if a programmatic ad campaign is performing.
	*/
	public function costs_per_click($clicks, $total_cost)
	{
		return $total_cost / $clicks ; 
	}




	/*
	CTR stands for Click Through Rate and is a measure of how effective a create is based upon how many people have clicked. Average to high click through rates are usually around .50 but can go much higher if the ad placement is prime and creative is very relevant to the user.
	If a campaign ran 50,000 impressions and generates 4765 clicks, the CTR would be .09. Publishers should be very aware of what their CTR is on each placement to determine if optimizations should be made to increase the CTR and generate more revenue. Minor tweaks to ad placement can go a long way.
	*/
	function click_through_rate(){
		$ctr = $clicks / $impressions ;
	}



	public function impressions()
	{
		$costs = request()->get('costs');
		collect($costs)->each(function($u){
			dd($u);
		});
	}


	/**
	click_through_rate = costs .. 
	*/
	function clickthrough_rate()
	{
		$costs = request()->get('costs');
		collect($costs)->each(function($u){
			dd($u);
		});
	}
}