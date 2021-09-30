<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::all();
        
        return response()->json($schedule, 200);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = Schedule::create($request->all());

        return response()->json($schedule, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);

        if($schedule === null){
            return response()->json('Recurso não encontrado!', 200);
        }

        return response()->json($schedule, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        if($schedule === null){
            return response()->json(['erro' => 'O recurso solicitado não existe!']);
        }

        $schedule->fill($request->all());
        $schedule->save();
        return response()->json($schedule, 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);

        if($schedule === null){
            return response()->json(['erro' => 'O recurso solicitado não existe!']);
        }

        $schedule->delete();
        return response()->json('Agendamento cancelado!', 200);
    }
}
