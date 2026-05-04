<?php

namespace App\Http\Controllers;

use App\Services\TenantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TenantController extends Controller
{
    protected $tenantService;

    public function __construct(TenantService $tenantService)
    {
        $this->tenantService = $tenantService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = $this->tenantService->getAllTenants();
        return view('tenants.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'domain' => 'required|string|max:255|regex:/^[a-z0-9-]+$/',
            'description' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $result = $this->tenantService->createTenant($request->all());

            if ($result['success']) {
                return redirect()->route('tenants.index')
                    ->with('success', 'Tenant created successfully! Access URL: ' . $result['url']);
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to create tenant: ' . $result['message'])
                    ->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error creating tenant: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
