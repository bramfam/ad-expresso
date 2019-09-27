<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Guest;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $guests = Guest::where('guest_camaign', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $guests = Guest::latest()->paginate($perPage);
        }

        return view('admin\guests.guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin\guests.guests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'guest_campaign' => 'required'
		]);

        $requestData = $request->all();
        
        Guest::create($requestData);

        return redirect('admin/guests')->with('flash_message', 'Guest added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $guest = Guest::findOrFail($id);

        return view('admin\guests.guests.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $guest = Guest::findOrFail($id);

        return view('admin\guests.guests.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'guest_camaign' => 'required'
		]);
        $requestData = $request->all();
        
        $guest = Guest::findOrFail($id);
        $guest->update($requestData);

        return redirect('admin/guests')->with('flash_message', 'Guest updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Guest::destroy($id);

        return redirect('admin/guests')->with('flash_message', 'Guest deleted!');
    }
}
