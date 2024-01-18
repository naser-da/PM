<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-center py-12">
        <div class="w-1/2 sm:px-6 lg:px-8">
                <x-bladewind::statistic
                    icon_position="right"
                    number={{$projects}}
                    label="Total Projects">

                    <x-slot name="icon">
                        <svg class="h-16 w-16 p-2 text-white rounded-full bg-orange-500">
                        ...
                        </svg>
                    </x-slot>

                </x-bladewind::statistic>
        </div>
        <div class="w-1/2 sm:px-6 lg:px-8">
                <x-bladewind::statistic
                    icon_position="right"
                    number={{$clients}}
                    label="Total Clients">

                    <x-slot name="icon">
                        <svg class="h-16 w-16 p-2 text-white rounded-full bg-blue-500">
                        ...
                        </svg>
                    </x-slot>

                </x-bladewind::statistic>
            
        </div>

    </div>

</x-app-layout>
