<?php

namespace App\Http\Controllers;

use App\Models\CallVisit;
use App\Models\ms_customer;

use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\CallVisitStoreRequest;
use App\Http\Requests\CallVisitUpdateRequest;

class CallVisit_ct extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $callvisits = CallVisit::latest()->paginate(5);
        // return view('pse.cv_list', compact('callvisits'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
	
        $callvisits=CallVisit::all();
        // return view('pse.cv_list', compact('callvisits'));
        return view('callvisits.index', compact('callvisits'));
    }

    public function autocomplete(Request $request) 
    { $data = ms_customer::select("nama_toko")
     ->where("nama_toko","LIKE","%{$request->get('query')}%") 
     ->get(); return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('cv_new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visitdate' => 'required',
            'topic' => 'required',
            'nextvisit' => 'required',
            'nexttopic' => 'required',
            'customer' => 'required',
            'pic' => 'required|string|max:25',
            'qty' => 'required',
            'phone' => 'required|integer',
            'location' => 'required',
            'type' => 'required',
            'remark' => 'nullable'
        ]);

        CallVisit::create($request->all());

        return redirect()->route('callvisits.index')
            ->with('success', 'Visit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CallVisit $callvisit): View
    {
        return view('pse.cv_list', compact('callvisits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallVisit $callvisit)
    {
        $callvisit = CallVisit::findOrFail($callvisit->id);

        return view('pse.cv_edit', compact('callvisit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'visitdate' => 'required', 
            'topic' => 'nullable|string', 
            'nextvisit' => 'nullable|string', 
            'nexttopic' => 'nullable|string', 
            'customer' => 'nullable|string', 
            'pic' => 'nullable|string', 
            'qty' => 'nullable|integer', 
            'phone' => 'nullable|integer', 
            'location' => 'nullable|string', 
            'type' => 'nullable|string', 
            'remark' => 'nullable|string',
        ]);

        $callvisit = CallVisit::findOrFail($id);
        $callvisit->update($request->all());

        return redirect()->route('callvisits.index')
            ->with('success', 'Visit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $callvisit = CallVisit::findOrFail($id);
        $callvisit->delete();
        return redirect()->route('callvisits.index')
            ->with('success', 'Visit deleted successfully');
    }
}
