<?php

namespace App\Http\Controllers;

use App\Partner;
use App\City;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function addPartner()
    {
        $partner = new Partner();
        $partner->name = "Mustapha";
        $partner->city_id = 2;
        $partner->save();

        return "Partner has been created successfuly !";
    }


}
