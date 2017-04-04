<?php

namespace App\Http\Controllers;

use App\skating_credentials;
use Illuminate\Http\Request;

class CredentialController extends Controller
{
    //
    public function index()
    {//abbreviated list of all credentials. Does not include a individual skills
        return skating_credentials::with('program','skatingLevel','grantingOrg')->get();
    }
    //
    //
    public function getCredentialByIDWithSkills(skating_credentials $cred)
    {
        return $cred::with('skills','program','skatingLevel','grantingOrg')->get();
    }
}
