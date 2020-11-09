<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//event model 
use App\Models\event;
//Calendar class
use LaravelFullCalendar\Facades\Calendar;


class EventController extends Controller
{
    //Output Calendar View---------------------------------------
    public function index(){
        $events=event::all();
        $event=[];
        foreach($events as $row){
           $enddate=$row->end_date."24:00:00";
           $event[]=\Calendar::event(
               $row->title,
               false,
               new \DateTime($row->start_date),
               new \DateTime($row->end_date),
               $row->id,
               [
                   'color'=>$row->color,
               ]
               
           );

        }
        $calendar=\Calendar::addEvents($event);
        return view('eventpage',compact('events','calendar'));
     }
     //------------------------------------------------------------
     
     //output Add Event to Calendar view---------------------------
     public function display(){
         return view('addevent');
     }
     //-------------------------------------------------------------
     
     
     //Add Event to Calendar view Add Event button Store procedure---
     public function store(Request $request){
       $this->validate($request,[
           'title'=>'required',
           'color'=>'required',
           'start_date'=>'required',
           'end_date'=>'required',
       ]);
       $events=new event;
       $events->title = $request->input('title');
       $events->color = $request->input('color');
       $events->start_date = $request->input('start_date');
       $events->end_date = $request->input('end_date');

       $events->save();
       return redirect('events')->with('success','Events Added');
       
     }
     //-------------------------------------------------------------------
     
     
     //output display blade-Table view-------------------------------------
     public function show(){
         $events = event::all();
         return view('display')->with('events',$events);

     }
     //---------------------------------------------------------------------
     
     //output editform view-Update your Data view---------------------------------
     public function edit($id){
           $events= event::find($id);
           return view('editform',compact('events','id'));
          
     }
     //--------------------------------------------------------------------
     
     
     //output Update Event Data form updtade pocedure--------------------------
     public function update(Request $request, $id){
        $this->validate($request,[
            'title'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);
        $events=event::find($id);

        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
 
        $events->save();
        return redirect('events')->with('success','Event Updated');

     }
      //------------------------------------------------------------------------

     
     //output display blade-Table view Delete Procedure-----------------------
     public function destroy($id){
        $events= event::find($id);
        $events->delete();
         
        return redirect('events')->with('success','Event Deleted');

        }

      //---------------------------------------------------------------------

}
