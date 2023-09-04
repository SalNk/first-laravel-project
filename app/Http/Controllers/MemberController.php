<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        // dd($members);
        return view('members.list', [
            'members' => $members
        ]);
    }

    public function show($id)
    {
        $member = Member::findorFail($id);
        // dd($member);

        return view('members.detail', [
            'member' => $member,
        ]);
    }

    public function store(Request $request)
    {

        // $member = new Member();

        // $member->name = $request->name;
        // $member->email = $request->email;
        // $member->title = $request->title;
        // $member->phone_number = $request->phone_number;
        // $member->save();


        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'phone_number' => $request->phone_number
        ]);

        dd('C\'est bon');
    }

    public function create()
    {
        return view('members.form');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        // dd($member);

        return view('members.edit', [
            'member' => $member
        ]);
    }

    public function update($id, Request $request)
    {
        $member = Member::find($id);

        // dd($member->name);
        // dd($request->name);

        $member->update([
            'name' => $request->name,
            //dans la $request->name se trouve la valeur qui a été saisi par le user
            'email' => $request->email,
            'title' => $request->title,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);

        $member->save();

        return redirect('/');
    }

    public function delete($id, Request $request)
    {
        $member = Member::find($id);

        $member->delete();

        return redirect('/');
    }

    public function blog()
    {
        $members = Member::all();

        return view('members.blog', [
            'members' => $members
        ]);
    }

    public function showPost($id)
    {
        $member = Member::findOrFail($id);

        return view('members.post', [
            'member' => $member
        ]);
    }
}