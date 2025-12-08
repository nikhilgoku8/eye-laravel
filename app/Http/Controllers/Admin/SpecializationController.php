<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Specialization;
use App\Models\Doctor;

class SpecializationController extends Controller
{
    public function index()
    {
        $data['result'] = Specialization::orderBy('title')->paginate(100);
        return view('admin.specializations.index', $data);
    }

    public function create()
    {
        $data['doctors'] = Doctor::all();
        return view('admin.specializations.create', $data);
    }

    public function show(Specialization $specialization)
    {
        $data['result'] = $specialization;
        $data['doctors'] = Doctor::all();
        return view('admin.specializations.show', $data);
    }

    public function edit(Specialization $specialization)
    {
        $data['result'] = $specialization;
        $data['doctors'] = Doctor::all();
        return view('admin.specializations.edit', $data);
    }

    public function string_filter($string){
        $string = str_replace('--', '-', preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', str_replace("- ","-", str_replace(" -","-", str_replace("&","and", preg_replace("!\s+!"," ",strtolower($string))))))));
        return $string;
    }

    public function store(Request $request)
    {
        return $this->handleSpecializationRequest($request, new Specialization(), true);
    }

    public function update(Request $request, Specialization $specialization)
    {

        return $this->handleSpecializationRequest($request, $specialization, false);

    }

    private function handleSpecializationRequest(Request $request, Specialization $specialization, bool $isNew)
    {

        $dataID = $request->input('dataID');

        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255|unique:specializations,title,'. $dataID,
                'doctors' => $isNew ? 'nullable|array' : 'required|array|min:1',
                'doctors.*' => $isNew ? 'nullable|bail|exists:doctors,id' : 'required|exists:doctors,id',
            ]);

            $validated['slug'] = $this->string_filter($validated['title']);

            // Directly handle the save/update logic here
            if ($isNew) {
                $specialization = Specialization::create($validated);
            } else {
                $specialization->update($validated);
            }

            if(!empty($request->doctors)){
                $specialization->doctors()->sync($request->doctors ?? []);
            }

            session()->flash('success', $isNew ? 'Specialization created successfully!' : 'Specialization updated successfully!');

            return response()->json([
                'status' => 'success',
                'message' => $isNew ? 'Specialization created successfully!' : 'Specialization updated successfully!',
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

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();
        return redirect()->route('admin.specializations.index')->with('success', 'Specialization deleted!');
    }

    public function bulkDelete(Request $request)
    {
        // $dataIDs = $request->input('dataID');

        Specialization::destroy($request->dataID);

        return response()->json(['success' => true, 'message' => 'Record Deleted']);
    }
}
