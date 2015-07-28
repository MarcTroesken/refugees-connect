<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\SearchRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    protected $user;

    /**
     * @param User $user
     */
    function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Search for a specific person in storage
     *
     * @param  $string
     * @return Json
     */
    public function search(SearchRequest $request)
    {
        $users = $this->user->with('camp')
                          ->where('first_name', 'LIKE', '%' . $request->get('string') . '%')
                          ->orWhere('last_name', 'LIKE', '%' . $request->get('string') . '%')
                          ->get();

        return view('search.result', compact('users'));
    }
}
