<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return StudentResource::collection(Student::with('training')->get());
    }

    public function show(string $id){
        return new StudentResource(Student::with('training')->where('neptun_code', $id)->firstOrFail());
    }

    public function store(StudentRequest $request){
        $data = $request->validated();
        $data['neptun_code'] = $this->generateNeptunCode();
        return new StudentResource(Student::create($data));
    } 

    public function update(string $id, StudentRequest $request){
        $data = $request->validated();
        $data['neptun_code'] = $id;
        $toUpdate = Student::where('neptun_code', $id)->firstOrFail();
        $toUpdate->update($data);
        return new StudentResource(Student::with('training')->where('neptun_code', $id)->firstOrFail());
    }

    public function destroy(string $id){
        $toDelete = Student::where('neptun_code', $id)->firstOrFail();
        $toDelete->delete();
        return response()->noContent();
    }

    private function generateNeptunCode(): string{
        do {
            $neptunCode = strtoupper(fake()->bothify('******'));
        } while (Student::where('neptun_code', $neptunCode)->exists());

        return $neptunCode;
    }
}
