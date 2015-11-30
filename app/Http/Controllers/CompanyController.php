<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Company;
use App\User;

use Auth;
use Input;
use Redirect;
use Log;
use Session;

class CompanyController extends Controller
{

    protected $rules = [        
            'title'         => ['required', 'min:3'],
            'email'         => ['required'],
            'mobile_number' => ['required'],
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $companies = User::with('company')->find($user->id)->company;        
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules); 
        $input = Input::all();
        $input['user_id'] = Auth::User()->id;
        Company::create( $input );
 
        return Redirect::route('company.index')->with('Company created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $input = array_except(Input::all(), '_method');
        $company->update($input);

        Session::flash('flash_message', 'Company updated successfully!');
 
        return Redirect::route('company.index')->with('message', 'Company updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        Session::flash('flash_message', 'Company deleted successfully!');

        return Redirect::route('company.index')->with('message', 'Company deleted.');
    }
}
