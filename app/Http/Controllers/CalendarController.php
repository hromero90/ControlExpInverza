<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

use function Laravel\Prompts\confirm;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Events en la tabla donde están guardados los registros
        $exp_pendiente = array();
        $events = Events::all();
        foreach($events as $event){
            $color = null;
            if($event->title == 'Prueba')
            {
                //Color rojo para el titulo
                $color = '#FF0000';
            }
            $exp_pendiente[] = [
                'id'    => $event->id,
                'title' => $event->title,
                'start' =>$event->start_date,
                'end' =>$event->end_date,
                'color' => $color,
            ];
        }
        //Retorna el arreglo mediante el Foreach
        // return $exp_pendiente;
        return view('calendar.index', ['exp_pendiente'=> $exp_pendiente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required|string',

        ]);
        
        $event = Events::create([
            'title'=> $request->title,
            'start_date'=> $request->start_date,
            'end_date'=> $request->end_date,
        ]);

        return response()-> json($event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $event = Events::find($id);

        if (!$event) {
            return response()->json([
                'error'=> 'No puede mover el evento para otra fecha'
            ], 404);
        }
        $event->update([
            'start_date' => $request->start_date,
            'end_date'=> $request->end_date
        ]);
        return response()->json('Fecha actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            // dd($id);
            $event = Events::find($id);
            if (!$event) 
            {
                return response()->json([
                'error'=> 'No puede eliminar el evento'], 404);
            }
                $event->delete();
                return $id;
    }
}
