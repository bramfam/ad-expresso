# Issues so far

> Research on how to use OAuth & Stuff to login thru facebook.
> Make sure we can connect our account thru facebook
> We can do things like how can we post a marketing ad for a facebook profile.
> We can only create a campaign if there's a facebook account linkd.

# Port Number
- serving on port : 8900 << localhost

# User authentication's data
> Login fields : 
-	Email 
- Password

> Registration fields: 
- email 
- password 
- first name 
- last name
- company
- country

# Schema : 

1. countries
	- id
	- country_id

2. users
	- id
	- email 
	- password 
	- first name 
	- last name
	- company
	- country_id ( country the person lives)

3. companies
	- id
	- company_id 
	-


4. campaigns
	- creator_id
	- billing_account_id
	- campaign_name
	

4. tags
	- id
	- key
	- timestamps
	
5. campaign_tag
	- campaign_id(FK)
	- tag_id(FK)

6. 

---------------------------
APP's WORKFLOW / FLOW..  ( Not yet finished..)
---------------------------

Pages / Views :

 > Dashboard stats : 
  ~> Click Through
  ~> Cost per Click..
  ~> Clicks
  ~> Impressions
  ~> Spent
  ~> Conversions
  ~> Cost per 1K impression
	

---> Enable/Disable Auto Optimization

Automatic optimization is a set of optimization rules that includes a frequency cap, and examines all the ads within your campaign by CPA (cost per action). Based on CPA, automatic optimization pauses under-performing ads and allocates budget to the best ads within the campaign. You can always track the changes being made to your campaign in the campaign's Timeline tab.

The CPA is the ‘main goal’ you have set for your campaign. This can be set in the Ads Design step (2) of campaign creation. More details

Automatic optimization shouldn’t change your campaign budget, except in the rare case when your budget might be close to Facebook’s minimum acceptable budget, there could be a small increase over time. We always suggest to add a spend cap to your campaign!

If you manually pause or activate ads or adsets, you will have to redistribute your budget from the campaign dashboard, or your campaign may run with a different budget. More details

Automatic optimization and custom optimization rules can’t be applied to the same campaign.

Automatic optimization can be applied to campaigns using Campaign Budget Optimization. It will work on all factors except budget management to optimize the campaign.
___________________
Full Stats Button redirect|
____
Primary Stats

1 . -> First, User will have to add a campaign before he can see the dashboard

Prerequisites 
-> User will have to choose between facebook / google ads first through a toggle.
___________________

___________________


Create a campaign. 

-> Initially, what you're going to do is connect your facebook or google ads account before starting to create campaign.

---> Step 1 :  Create campaign 

 -	Campaign name ( Joe's Clothing )

 -  ad account  / billing account  (Joe Corporation) -> currently logged on facebook, like the currently registered facebook account's name like the Facebook's basic name.

 -  can have multiple tags such as ( holiday or clothing or textile )	
		~> Can see tags.
		~> 


 -  Promotion_type ( Website, Facebook Page , App, Place )  
 
 Usually, if it's a website then u can choose  between
 - External Website inside a newsfeed
		- Please Select A Page (Joe's Clothing)
		- Headlines(up to 3) examples are : 
						- Book todd as speaker
						- Hey ! can u check this out? Very lucky.
		- Ad Texts ( up to 3 )
		- Images ( Upload more )
		- Select from Gallery	

---> Step 2 : Ads Design
- Page : Joe's Clothing.  

- Headlines  : multiple headlines

-> Add multiple headlines

- Ad texts ( Mutiple ad texts)

-> Add multiple ad texts

- Images ( Multiple images or just a single image ) or Design an Ad

- URL (joe's-clothing.com/adspresso)
- Link Description . This is a link description
- Display Link :  Limited Time Offer
- Call to Action (watch video, Learn more)
- SELECT PLACEMENT ( DESKTOP FEED, MOBILE, RIGHT COLUMN(desktop))

- Ads Preview()
	- Optional ( Goal Tracking )
	[] Track this campaign with s

~> So if we add 3 headlines 3 ad texts and 3 images = 27 Variations

2. Tags	




# What is Adespresso(refer to evernote)

AdEspresso is a Facebook Ads tool that makes ad creation and optimization easier and faster compared to the Power Editor. Since it was founded in 2011, it has grown to become a Facebook advertising partner and a preferred marketing tool for brands all over the world. With the platform, users can create Facebook and Instagram Ads right through the interface, which syncs with your pre-existing Facebook Ad accounts. It can even import active campaigns:


When setting up campaigns, you can add tags to easily locate them with search later. All campaigns automatically give you the option to create split test variations as you proceed, so you don’t have to duplicate any work. In doing so, you can enter in multiple headlines, descriptions, and visual components for each campaign to split test:





Adespresso's features : 

-> 	Can see the Click through, Clicks, Cost per click, Impressions, Spent
->	Display Link

1. See a campaign / View a campaign.





# Artisan Option Commands : 

> Route : List

$ pa route:list options

Options:
      --columns[=COLUMNS]  Columns to include in the route table (multiple values allowed)

  -c, --compact            Only show method, URI and action columns
      --json               Output the route list as JSON
      --method[=METHOD]    Filter the routes by method
      --name[=NAME]        Filter the routes by name
      --path[=PATH]        Filter the routes by path
  -r, --reverse            Reverse the ordering of the routes
      --sort[=SORT]        The column (domain, method, uri, name, action, middleware) to sort by [default: "uri"]
  -h, --help               Display this help message
  -q, --quiet              Do not output any message
  -V, --version            Display this application version
      --ansi               Force ANSI output
      --no-ansi            Disable ANSI output
  -n, --no-interaction     Do not ask any interactive question
      --env[=ENV]          The environment the command should run under
  -v|vv|vvv, --verbose     Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug


> make:model < xxx  >

Arguments:
  name                  The name of the class

Options:
  -a, --all             Generate a migration, factory, and resource controller for the model
  -c, --controller      Create a new controller for the model
  -f, --factory         Create a new factory for the model
      --force           Create the class even if the model already exists
  -m, --migration       Create a new migration file for the model
  -p, --pivot           Indicates if the generated model should be a custom intermediate table model
  -r, --resource        Indicates if the generated controller should be a resource controller
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug


# Formulas Used for the whole project : 

Cost of Advertising: CPM, CPC and eCPM Demystified
The purpose of this post is to clarify the terms CPM and CPC and also show how to convert from one model to the other. 

CPM

CPM stands for Cost per 1000 Impressions (number of times the ad is shown) (M is Roman numeral for 1000). Generally display advertising (e.g. banners) is sold in CPM. If the ad is shown 1000 times the cost will be equal to 1 CPM price. For example, if a publisher charges $10 CPM, that means your ad will be shown 1000 times for $10. 

If your budget is say $10,000 then mean your ad will be shown 1,000,000 times ($10,000 *(1000/$10) ).

Total Impressions = (Total Cost or Budget) * (1000/CPM)

If you are trying to find out how much you will pay for a given number of impressions then you can use the following formula

Total Cost = (Total Impressions * CPM)/1000

If you notice in the above calculations, there are no mentions of how many people the ad will be shown to or how many clicks will be generated. CPM advertising is solely based on impressions. In theory if you don’t set a frequency cap (i.e. the maximum number of times one person will see your ad) then you could end up serving all the impression to one person only. (If you would like to know more about frequency cap then drop me a line and we can talk further).

CPC

CPC stands for Cost Per Click. Google Adwords made this model popular. Generally search and text advertising is sold by CPC model. In this kind of advertising model you just pay for number of clicks you get on your ads irrespective of number of impressions it takes to generate those clicks. For example, if the CPC is $1.00 and your ad is shown 12,000 times but gets no clicks then you pay nothing. If you get 10 clicks on your ad then you pay $1.00X10 = $10.00.

CPC = Total Cost/Total Clicks

Total Cost = CPC * Total Clicks

Comparing CPM to CPC and vice versa

The goal of advertising using one model versus the other is really dependent on what you are trying to achieve. If your objective is to generate Brand awareness then you might engage in display advertising which will most likely be sold in CPM model. While search ads on Google or text or display advertising on Google Ad Network are sold in CPC model.

Often you will end up comparing two models to figure out where and how to spend your money effectively. To do direct cost comparison you will need to convert CPM to CPC or CPC to CPM pricing.

CPM to CPC conversion

Below is a formula that you can use to calculate a CPC equivalent of a CPM model

CPC = ((Total Impression *CPM)/(1000 *Clicks)


Below is a spreadsheet to show you the same calculation. Let’s take an example of a campaign that costs you $10 CPM and generates 50 clicks in 50,000 impressions.




The above $10 CPM campaign is equivalent to a $5 CPC campaign. 

CPC to CPM conversion

Below is a formula that you can use to calculate a CPM equivalent of a CPC model

CPM = (CPC*clicks*1000)/Total Impressions

Let’s take an example of a campaign that costs $4 per click and generates 100 clicks, resulting in a total spend of $400. Let’s say it took 50,000 impressions to generate those 100 clicks.

eCPM

The CPM value you get when you convert CPC into CPM is also known as eCPM (effective CPM).

Note: eCPM is also shown in Adsense reports, in that case it is

Total Adsense Revenue /(Impressions/1000)

I have developed few calculators to calculate CPM and CPC, feel free to use them. 

--------------------------------------------------------------------------------------------------------------



### Iterations / Project parts 

For the v1 : Data Entry 

1. Create a campaign
2. 



## Tasks 

1. Identify the first milestone to finish : 
  - First milestone is : 
      -> Entering a campaign
      

### Packages that could be used : (package.json)



// "cross-env": "^5.1",
//     "jquery": "^3.2",
"lodash": "^4.17.13",
"popper.js": "^1.12",
"resolve-url-loader": "^2.3.1",
"sass": "^1.15.2",
"sass-loader": "^7.1.0",