<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign ; 
use App\Traits\FormulaCalculator;  
class CampaignsController extends Controller
{
	use FormulaCalculator ;
}
