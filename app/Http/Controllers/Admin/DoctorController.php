<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Doctor;
use App\Models\Specialization;

class DoctorController extends Controller
{
    public function index()
    {
        $data['result'] = Doctor::paginate(100);
        return view('admin.doctors.index', $data);
    }

    public function create()
    {
        $data['specializations'] = Specialization::all();
        return view('admin.doctors.create', $data);
    }

    public function show(Doctor $doctor)
    {
        $data['result'] = $doctor;
        $data['specializations'] = Specialization::all();
        return view('admin.doctors.show', $data);
    }

    public function edit(Doctor $doctor)
    {
        $data['result'] = $doctor;
        $data['specializations'] = Specialization::all();
        return view('admin.doctors.edit', $data);
    }

    public function string_filter($string){
        $string = str_replace('--', '-', preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', str_replace("- ","-", str_replace(" -","-", str_replace("&","and", preg_replace("!\s+!"," ",strtolower($string))))))));
        return $string;
    }

    public function store(Request $request)
    {
        return $this->handleDoctorRequest($request, new Doctor(), true);
    }

    public function update(Request $request, Doctor $doctor)
    {

        return $this->handleDoctorRequest($request, $doctor, false);

    }

    private function handleDoctorRequest(Request $request, Doctor $doctor, bool $isNew)
    {

        $dataID = $request->input('dataID');

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:doctors,name,'. $dataID,
                'specializations' => $isNew ? 'nullable|array' : 'required|array|min:1',
                'specializations.*' => $isNew ? 'nullable|bail|exists:specializations,id' : 'required|exists:specializations,id',
                'is_active' => 'required|boolean',
            ]);

            // Directly handle the save/update logic here
            if ($isNew) {
                $doctor = Doctor::create($validated);
            } else {
                $doctor->update($validated);
            }

            if(!empty($request->specializations)){
                $doctor->specializations()->sync($request->specializations ?? []);
            }

            session()->flash('success', $isNew ? 'Category created successfully!' : 'Category updated successfully!');

            return response()->json([
                'status' => 'success',
                'message' => $isNew ? 'Category created successfully!' : 'Category updated successfully!',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'error_type' => 'form',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'error_type' => 'server',
                'message' => 'Something went wrong. Please try again later.',
                'console_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors.index')->with('success', 'Category deleted!');
    }

    public function bulkDelete(Request $request)
    {
        // $dataIDs = $request->input('dataID');

        Doctor::destroy($request->dataID);

        return response()->json(['success' => true, 'message' => 'Record Deleted']);
    }
}
