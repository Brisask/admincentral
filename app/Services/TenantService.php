<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TenantService
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.apibrisas.url', 'http://localhost:8001');
    }

    /**
     * Get all tenants from apibrisas API
     */
    public function getAllTenants()
    {
        try {
            $response = Http::timeout(30)->get("{$this->apiBaseUrl}/api/tenants");

            if ($response->successful()) {
                $responseData = $response->json();

                // ApiBrisas API returns paginated data in format: {success: true, data: {data: [tenants...]}}
                if (isset($responseData['success']) && $responseData['success']) {
                    return $responseData['data']['data'] ?? [];
                }

                // Fallback for different response format
                return $responseData['data'] ?? [];
            }

            Log::error('Failed to fetch tenants', [
                'status' => $response->status(),
                'response' => $response->body()
            ]);

            return [];
        } catch (\Exception $e) {
            Log::error('Exception fetching tenants', ['error' => $e->getMessage()]);
            return [];
        }
    }

    /**
     * Create a new tenant via apibrisas API
     */
    public function createTenant(array $data)
    {
        try {
            $payload = [
                'name' => $data['name'],
                'email' => $data['email'],
                'domain' => $data['domain'],
                'description' => $data['description'] ?? ''
            ];

            $response = Http::timeout(30)
                ->post("{$this->apiBaseUrl}/api/tenants", $payload);

            if ($response->successful()) {
                $tenant = $response->json();
                return [
                    'success' => true,
                    'tenant' => $tenant,
                    'url' => "http://{$data['domain']}.localhost:8001",
                    'message' => 'Tenant created successfully'
                ];
            }

            $errorMessage = $response->json('message') ?? 'Unknown error';
            Log::error('Failed to create tenant', [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload
            ]);

            return [
                'success' => false,
                'message' => $errorMessage
            ];

        } catch (\Exception $e) {
            Log::error('Exception creating tenant', [
                'error' => $e->getMessage(),
                'payload' => $data ?? []
            ]);

            return [
                'success' => false,
                'message' => 'Connection error: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Get a specific tenant by ID
     */
    public function getTenant(string $id)
    {
        try {
            $response = Http::timeout(30)->get("{$this->apiBaseUrl}/api/tenants/{$id}");

            if ($response->successful()) {
                return $response->json();
            }

            return null;
        } catch (\Exception $e) {
            Log::error('Exception fetching tenant', [
                'id' => $id,
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }
}