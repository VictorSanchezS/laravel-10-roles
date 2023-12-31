<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Models\Provider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
class ProviderController extends Controller
{
    /**
     * Instantiate a new ProviderController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-provider|edit-provider|delete-provider', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-provider', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-provider', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-provider', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('providers.index', [
            'providers' => Provider::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProviderRequest $request): RedirectResponse
    {
        Provider::create($request->validated());

        return redirect()->route('providers.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Provider $provider): View
    {
        return view('providers.show', [
            'provider' => $provider
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider): View
    {
        return view('providers.edit', [
            'provider' => $provider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProviderRequest $request, Provider $provider): RedirectResponse
    {
        $provider->update($request->validated());

        session()->flash('update', 'ok');

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider): RedirectResponse
    {
        $provider->delete();
        return redirect()->route('providers.index')
            ->with('delete', 'ok');
    }

}
