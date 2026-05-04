<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Tenant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <!-- Error Messages -->
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Creation Form -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Tenant Information</h3>
                    <p class="text-sm text-gray-600 mt-1">Create a new tenant for the ApiBrisas system</p>
                </div>

                <form action="{{ route('tenants.store') }}" method="POST" class="p-6 space-y-6">
                    @csrf

                    <!-- Tenant Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Tenant Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               id="name"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                               placeholder="e.g., My Company Inc.">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">The display name for this tenant</p>
                    </div>

                    <!-- Admin Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Admin Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                               placeholder="admin@company.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">Primary contact email for this tenant</p>
                    </div>

                    <!-- Domain -->
                    <div>
                        <label for="domain" class="block text-sm font-medium text-gray-700 mb-2">
                            Subdomain <span class="text-red-500">*</span>
                        </label>
                        <div class="flex">
                            <input type="text"
                                   id="domain"
                                   name="domain"
                                   value="{{ old('domain') }}"
                                   required
                                   pattern="[a-z0-9-]+"
                                   class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('domain') border-red-500 @enderror"
                                   placeholder="company">
                            <span class="inline-flex items-center px-3 py-2 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">
                                .localhost:8001
                            </span>
                        </div>
                        @error('domain')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">Only lowercase letters, numbers, and hyphens. Will be accessible at: <span class="font-mono">[domain].localhost:8001</span></p>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description
                        </label>
                        <textarea id="description"
                                  name="description"
                                  rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                                  placeholder="Optional description of this tenant...">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">Optional description for internal reference</p>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                        <a href="{{ route('tenants.index') }}"
                           class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium transition duration-200">
                            Cancel
                        </a>
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition duration-200 focus:ring-4 focus:ring-blue-300">
                            Create Tenant
                        </button>
                    </div>
                </form>
            </div>

            <!-- Help Section -->
            <div class="bg-blue-50 rounded-lg p-6 mt-6">
                <h3 class="text-sm font-medium text-blue-900 mb-2">What happens when I create a tenant?</h3>
                <ul class="text-xs text-blue-800 space-y-1">
                    <li>• A new isolated environment will be created in ApiBrisas</li>
                    <li>• The tenant will be accessible via the specified subdomain</li>
                    <li>• Database and file storage will be isolated per tenant</li>
                    <li>• You'll receive a confirmation with the access URL</li>
                </ul>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Auto-format domain input
        document.getElementById('domain').addEventListener('input', function(e) {
            this.value = this.value.toLowerCase().replace(/[^a-z0-9-]/g, '');
        });

        // Preview URL
        document.getElementById('domain').addEventListener('input', function(e) {
            const preview = document.querySelector('.font-mono');
            if (preview && this.value) {
                preview.textContent = this.value + '.localhost:8001';
            }
        });
    </script>
    @endpush
</x-app-layout>