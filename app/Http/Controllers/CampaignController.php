<?php
namespace App\Http\Controllers;
use App\Campaign;
use Illuminate\Http\Request;
class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::of_current_user()->get();
        
        // dd($campaigns);
        return view('campaign.index',[
            'campaigns' => $campaigns
        ]);
    }

    protected function validateRequest(){
        return request()->validate(['campaign_id']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate a request if it's google / facebook.. 
      $campaign_type_id = request('campaign_type_id'); //FB OR GOOGLE
      
      $promotion_type_id = request('promotion_type');

    // if facebook is the campaign_type
      if ( $campaign_type_id == 'FB'){
        // we need a campaign
        $billing_account_id = request('billing_account_id') ;
        
        $req = $this->validate(request(), [
            'campaign_name' => 'required|min:3', 
            'billing_account_id' => 'required|integer', 
        ]);

    }
    else { 
        // ads design..


    }


        // request()->validate()
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    public function tags()
    {
        return view('campaign.tags');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }

    function move_campaign()
    {
    
        $str = Str::all() ; 


        for ($str = 0; $str < Str.length() ; $str++) {
            while (incase_length($this->user())) {
                    
            }
        }   


        foreach ($users as $user) {
                dump($user);
        }   

    }
}
