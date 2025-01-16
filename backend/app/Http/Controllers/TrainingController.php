<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrainingRequest;
use App\Http\Resources\TrainingResource;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index(){
        return TrainingResource::collection(Training::with('students')->get());
    }

    public function show(int $id){
        return new TrainingResource(Training::with('students')->findOrFail($id));
    }

    public function store(TrainingRequest $request){
        $data = $request->validated();
        $created = Training::create($data);
        return new TrainingResource($created);
    } 

    public function update(int $id, TrainingRequest $request){
        $data = $request->validated();
        Training::findOrFail($id)->update($data);
        return new TrainingResource(Training::with('students')->findOrFail($id));
    }

    public function destroy($id){
        $toDelete = Training::findOrFail($id);
        $toDelete->delete();
        return response()->noContent();
    }
}
