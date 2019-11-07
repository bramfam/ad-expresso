<template>
    <div>
       <ul class="nav nav-tabs mt-4">    
        <li class="nav-item">
            <a class="nav-link" :class="is_New_Campaign_Link_Toggled ? 'active' : '' " href="/campaign/create">Add New Campaign
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/campaign">My Campaigns
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" :href="myTags">My Tags</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>   
</div>
</template>

<script>    
import CampaignSteps from './CampaignSteps.vue';
import NewCampaign from './Campaign/NewCampaign.vue';
export default {
    component : { CampaignSteps },
    data(){
       return {
        is_New_Campaign_Link_Toggled : false,
        current_route : route().current().template,
        new_campaign_route : route().current('campaign.create').template
    } 
},
watch : {  


},
mounted() {
    console.log('Component mounted.');
},
computed : {
        myTags(){
            return route('campaign.user.tags',3);
        },
        create_campaign_route(){
            // return route()/
        },
        is_new_campaign_link_toggled(){
          return this.current_route === this.new_campaign_route ? true : false ; 
      }
  }
};
</script>
