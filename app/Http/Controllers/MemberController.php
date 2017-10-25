<?php

namespace App\Http\Controllers;

use App\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Show current members
     */
    public function index()
    {
        $members = Member::where('ends_at', '>=', Carbon::now())->get();
        
        return view('members.current', ['members' => $members]);
    }
    
    /**
     * show all expired members
     * 
     */
    public function expired()
    {
        
    }
    
    /**
     * Form to create a new member 
     */
    public function create()
    {
        
    }
    
    /**
     * Save the new member data in the db
     * Redirect to members/{id}/show
     */
    public function store(Request $request)
    {
        
    }
    
    /**
     * Show a single member's data, along with subscription history 
     * 
     * @param integer $memberId
     */
    public function show($memberId)
    {
        
    }
}
