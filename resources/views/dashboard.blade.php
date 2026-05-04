<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Central Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 overflow-hidden shadow-xl sm:rounded-lg mb-8">
                <div class="p-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-bold">Welcome back, {{ auth()->user()->name }}!</h1>
                            <p class="text-blue-100 mt-2">Manage your ApiBrisas ecosystem from here</p>
                        </div>
                        <div class="hidden md:block">
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                                <div class="text-sm text-blue-100">Active Tenants</div>
                                <div class="text-2xl font-bold">{{ $tenantCount ?? '0' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Tenant Management Card -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-500 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Tenant Management</h3>
                                <p class="text-sm text-gray-500">Create and manage tenants</p>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <a href="{{ route('tenants.index') }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
                                View All
                            </a>
                            <a href="{{ route('tenants.create') }}"
                               class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
                                Create New
                            </a>
                        </div>
                    </div>
                </div>

                <!-- System Status Card -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-500 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">System Status</h3>
                                <p class="text-sm text-gray-500">All systems operational</p>
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">AdminCentral</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Online</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">ApiBrisas API</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Connected</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">VitalAccess</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Card -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-500 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Quick Actions</h3>
                                <p class="text-sm text-gray-500">Common tasks</p>
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="{{ route('tenants.create') }}"
                               class="block text-purple-600 hover:text-purple-800 text-sm font-medium">
                                → Create New Tenant
                            </a>
                            <a href="{{ route('tenants.index') }}"
                               class="block text-purple-600 hover:text-purple-800 text-sm font-medium">
                                → View All Tenants
                            </a>
                            <a href="http://localhost:8001"
                               target="_blank"
                               class="block text-purple-600 hover:text-purple-800 text-sm font-medium">
                                → Open ApiBrisas ↗
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">About Admin Central</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Tenant Management</h4>
                            <p class="text-sm text-gray-600 mb-4">
                                Create and manage isolated environments for different organizations using ApiBrisas
                                multi-tenant architecture. Each tenant gets its own database and isolated environment.
                            </p>
                            <ul class="text-xs text-gray-500 space-y-1">
                                <li>• Isolated databases per tenant</li>
                                <li>• Custom subdomain access</li>
                                <li>• Independent configurations</li>
                                <li>• Scalable architecture</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 mb-2">VitalAccess Integration</h4>
                            <p class="text-sm text-gray-600 mb-4">
                                Role-based access control system with permissions, modules, and user management
                                capabilities. Secure and granular permission management.
                            </p>
                            <ul class="text-xs text-gray-500 space-y-1">
                                <li>• Role-based permissions</li>
                                <li>• Module-level access control</li>
                                <li>• User management</li>
                                <li>• Business unit scoping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
