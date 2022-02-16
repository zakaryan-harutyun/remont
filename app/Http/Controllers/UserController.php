<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function chat(Request $request){

       $chat = false;
       $person = false;
       $conversation_id = false;

       $conversations = Conversation::where(function($query){
           $query->where('from_id', Auth::id());
           $query->orWhere('to_id', Auth::id());
       })->get();

       if($request->id){

           $chat = Conversation::where(function($query){
               $query->where('from_id', Auth::id());
               $query->orWhere('to_id', Auth::id());
           })->where('id', $request->id)->first();


           if($chat && $chat->messages){
               if($chat->messages()->count() > 0 ){
                   if($chat->messages->last()->seen == 0 && $chat->messages->last()->to_id == Auth::id()){
                       $chat->messages()->update([
                           'seen' => 1
                       ]);
                   }
               }
           }

           $conversation_id = $request->id;
           if($chat){
               $person = $chat->from_id == Auth::id() ? $chat->to_id : $chat->from_id ;
               $person = User::find($person);
           }else{
               $person = [];
           }
       }

       return view('messages',compact('conversations','chat','person','conversation_id'));
   }

    public function addConversation(Request $request, $id)
    {

        $conversation_1 = Conversation::where(['from_id' => Auth::id(), 'to_id' => (int) $id])->first();
        $conversation_2 = Conversation::where(['from_id' => (int) $id, 'to_id' => Auth::id()])->first();

        $check_conversation = $conversation_1 ? $conversation_1 : $conversation_2;

        if($check_conversation){
            $conversation = $check_conversation;
        }else{
            $conversation = Conversation::create([
                'from_id' => Auth::id(),
                'to_id' => $request->id,
            ]);
        }

        return redirect()->route('chat', ['id' => $conversation->id]);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|min:1',
            'conversation_id' => 'required'
        ]);

        $blocked = false;
        $message = "";
        $conversation = Conversation::find($request->conversation_id);
        $to_id = $conversation->from_id == Auth::id() ? $conversation->to_id : $conversation->from_id;


        $message =  Message::create([
            'conversation_id' => $conversation->id,
            'message' => $request->message,
            'from_id' => Auth::id(),
            'to_id' =>$to_id
        ]);




        return response()->json([
            'html' => view('partials.message', compact('message','blocked'))->render(),
        ]);
    }


}
