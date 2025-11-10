<x-app-layout>
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-foreground">Profile Settings</h1>
                <p class="text-muted-foreground mt-2">Manage your account information and security settings</p>
            </div>

            <div class="space-y-6">
                <!-- Profile Information -->
                <div class="bg-card rounded-lg shadow-premium border border-border p-6 sm:p-8 animate-fade-in">
                    <div class="max-w-xl">
                        <livewire:profile.update-profile-information-form />
                    </div>
                </div>

                <!-- Update Password -->
                <div class="bg-card rounded-lg shadow-premium border border-border p-6 sm:p-8 animate-fade-in">
                    <div class="max-w-xl">
                        <livewire:profile.update-password-form />
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="bg-card rounded-lg shadow-premium border border-border p-6 sm:p-8 animate-fade-in">
                    <div class="max-w-xl">
                        <livewire:profile.delete-user-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
