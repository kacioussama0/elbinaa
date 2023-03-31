<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::latest()->get();

        return view('admin.messages.index',compact('messages'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required',
        ]);

        Message::create($request->all());

        return response()->json(['message' => 'تم إرسال الرسالة بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        if($message->delete()) {
            return  redirect()->to('messages')->with(['success' => 'تم الحذف بنجاح']);
        }
    }
}
