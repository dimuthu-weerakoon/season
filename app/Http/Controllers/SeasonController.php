<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $season = Season::where('user_id',$user->id)->get();
        return view('season.status')->with('season',$season)->with('user',$user->season);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        //'category' => 'required',
        'nic' => 'required|max:12|unique:seasons',
        'student_reg_no' => 'required|string|min:2|max:255|unique:seasons',
        'name' => 'required|max:255',
        'gender' => 'required',
        'age' => 'required|numeric|min:6|max:40',
        'date_of_birth'=> 'required|date',
        'address'=>'required|string|min:2|max:255',
        'contact_no'=>'required|numeric|digits_between:9,12',
        'province'=>'required',
        'district'=>'required',
        'postal_code'=>	'required|numeric',
        'depot'=>'required|string',
        'institute'=>'required|string|min:3|max:100',
        'route_no'=>'required|string|min:1|max:10',
        'starting_point'=>'required|string|min:3|max:22',
        'interchanging_point'=>'nullable|min:3|max:22',
        'destination_point'=> 'required|string|min:3|max:22',
        'ticket_fee'=> 'required|numeric|regex:/^\d*(\.\d{2})?$/',
        //'permission_letter'=>'required|mimes:png,jpg,pdf',
        ]);

        $season = new Season();
        $season->category = $request->input('category');
        $season->nic = $request->input('nic');
        $season->student_reg_no=$request->input('student_reg_no');
        $season->name=$request->input('name');
        $season->gender=$request->input('gender');
        $season->age=$request->input('age');
        $season->date_of_birth=$request->input('date_of_birth');
        $season->address=$request->input('address');
        $season->contact_no=$request->input('contact_no');
        $season->province=$request->input('province');
        $season->district=$request->input('district');
        $season->postal_code=$request->input('postal_code');
        $season->depot=$request->input('depot');
        $season->institute=$request->input('institute');
        $season->route_no=$request->input('route_no');
        $season->starting_point=$request->input('starting_point');
        $season->interchanging_point=$request->input('interchanging_point');
        $season->destination_point=$request->input('destination_point');
        $season->ticket_fee=$request->input('ticket_fee');
        $season->user_id=auth()->id();
        $season->save();

        return redirect()->route('season.index')->with('season',$season)->with('success','Season Created..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $season = Season::where('user_id',$user->id)->get();
        return view('dashboard.dashboard')->with('season',$season)->with('user',$user->season);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function edit(Season $season)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Season $season)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(Season $season)
    {
        //
    }
}
