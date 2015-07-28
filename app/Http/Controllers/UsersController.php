<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class UsersController extends Controller
{
    /**
     * @var User $user
     */
    protected $user;

    /**
     * @param User $user
     */
    function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->user->with('camp')->get();
    }

    /**
     * Display the registration confirmation page
     *
     * @return Response
     */
    public function confirmation()
    {
        return view('users.confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->user->with('camp')->findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $input = $request->all();

        if(empty($input['password']) && empty($input['password_confirmation']))
        {
            $input = array_except($input, ['password', 'password_confirmation']);
        }
        
        $user->camp()->update($input['camp']);

        $user->update($input);

        return redirect()->back()->withSuccess(Lang::get('content.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->user->findOrFail($id)->delete();

        return redirect()->to('/')->withSuccess(Lang::get('content.deleted'));
    }
}
