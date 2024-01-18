<x-app-layout>
    <x-slot name="header">
        
        <div class="float-right">
            <x-bladewind::button 
                radius="none" 
                size="small"
                onclick="showModal('create-project')"
                    >
                New Client
            </x-bladewind::button>
        </div>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
            
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-bladewind.table
                        searchable="true"
                        exclude_columns="id,created_at, updated_at, phone"
                        divider="thin"
                        :action_icons="$action_icons"
                        :data="$clients" />
                </div>
            </div>
        </div>
    </div>

    {{-- <x-bladewind.modal
    name="create-project"
    show_action_buttons="false"
    >
    <form method="POST" class="signup-form" action="{{route('clients.add')}}">
        @csrf
        <x-bladewind.card title="Add New Project" class="">
            <x-bladewind.input required="true" label="Project's Title" name="title"  />
            <x-bladewind.input required="true" label="Total Pts." name="volume"  />
            <x-bladewind.input required="true" label="Word Count" name="word_count"  />
            <x-bladewind.datepicker name="deadline" label="Deadline" class="bg-slate-950"/>
            <x-bladewind.dropdown
                required="true"
                name="type_id"
                label_key="name"
                value_key="id"
                placeholder="Pick The Project Type"
                :data="$types" />
            <x-bladewind.dropdown
                required="true"
                name="client_id"
                label_key="name"
                value_key="id"
                placeholder="Client name"
                :data="$clients" />

        </x-bladewind.card>

        <div class="float-right">
            <x-bladewind.button radius="none" can_submit="true">
                Add
            </x-bladewind.button>
        </div>
    </form>
    </x-bladewind.modal> --}}
</x-app-layout>
