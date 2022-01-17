<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $shows=DB::table('members')
            ->where('members.user_id','=',auth()->user()->id)
            ->join('users','members.user_id','=','users.id')
            ->select('users.id','users.name','users.email','members.identity','members.phone','members.address')
            ->get();
        return view('member.show',['shows'=>$shows]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $member=Member::find($member);
        $members=DB::table('members')
            ->where('members.user_id','=',auth()->user()->id)
            ->join('users','members.user_id','=','users.id')
            ->select('users.id','users.name','users.email','members.identity','members.phone','members.address')
            ->get();

        return view('member.edit',['members'=>$members]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {

            $member=Member::find($member);
            $ust=Auth::user()->name;
            $this->validate($request,	[
                'name'	=>	'required|min:3|max:255',
                'phone'=>'required|max:20',
                'address'=>'required|max:30',
            ]);
            //$member->update($request->all());
            $member->update($request->only(['phone', 'address']));
            //$member->phone=$request['phone'];
           //$member->address=$request['address'];
            //$member->save();
            //$ust->name=$request['name'];
            $ust->update($request->only(['name']));

            return redirect()->route('member.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
