<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

// middleware(['view-auth-setup']);
name('auth.waitlist');

new class extends Component {};

?>

<x-auth::layouts.setup>

    @volt('auth.waitlist')
        <section class="px-4 py-14 mx-auto max-w-screen-lg">
            <div class="mb-10">
                <h2 class="mb-2 text-2xl font-bold text-left">Waitlist</h2>
                <p class="text-sm text-left text-gray-600">Welcome to your applications waitlist</p>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-auth::setup.welcome-card link="auth/waitlist/" icon="appearance" title="Change The Appearance"
                    description="Change the appearance of your auth screens, add a logo, modify the color, and more."></x-auth::setup.welcome-card>
                <x-auth::setup.welcome-card link="auth/setup/providers" icon="social-providers"
                    title="Add/Edit Social Providers"
                    description="Select the social networks that users can use for authentication."></x-auth::setup.welcome-card>
            </div>
            <div
                class="flex items-center px-7 py-5 mt-6 space-x-5 w-full h-auto bg-white rounded-md border duration-300 ease-out border-zinc-200">
                <div class="w-full">

                    <table class="min-w-full divide-y divide-zinc-200">
                        <thead class="bg-zinc-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">
                                    S.No</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">
                                    Email</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-zinc-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500">example@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500">
                                    <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="relative px-5 py-4 mt-6 w-full text-gray-900 bg-gray-100 rounded-md border border-gray-200 dark:bg-zinc-700 dark:text-gray-300 dark:border-gray-700">
                <div class="text-sm opacity-80">To learn more about this authentication package, be sure to <a
                        href="https://auth.devdojo.com/docs" target="_blank" class="underline">visit the documentation</a>
                    or <a href="https://github.com/thedevdojo/auth" target="_blank" class="underline">view the project on
                        Github</a>.</div>
            </div>
        </section>
    @endvolt

</x-auth::layouts.setup>
