<x-app-layout>
    <x-slot name="header">
        
        <div class="float-right">
            <x-bladewind::button 
                radius="none" 
                size="small"
                onclick="showModal('create-client')"
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
                        exclude_columns="id,created_at, updated_at, phone, birthday, notes"
                        divider="thin"
                        :action_icons="$action_icons"
                        :data="$clients" />
                </div>
            </div>
        </div>
    </div>

    <x-bladewind.modal
    name="create-client"
    show_action_buttons="false"
    >


    <form method="POST" class="signup-form" action="{{route('clients.add')}}">
        @csrf
        <x-bladewind.card title="Add New Client" class="">
            <x-bladewind.input required="true" label="Name" name="name"  />
            <x-bladewind.input required="true" label="Organization" name="organization"  />
            <x-bladewind.input label="Email" name="email"  />
            <x-bladewind.input label="Phone Number" name="phone" />
            <x-bladewind.datepicker name="birthday" label="Birthday" class="bg-slate-950"/>
            <x-bladewind.textarea label="Notes" name="notes"  />

        </x-bladewind.card>

        <div class="float-right">
            <x-bladewind.button radius="none" can_submit="true">
                Add
            </x-bladewind.button>
        </div>
    </form>
    </x-bladewind.modal>

    <x-bladewind::modal name="delete-client" type="error" title="Confirm Client Deletion" ok_button_action="destroyClient()">
        Are you really sure you want to delete <b class="title"></b>?
        This action cannot be reversed.
    </x-bladewind::modal>

    <script>

        deleteClient = (id, name) => {
            showModal('delete-client');
            domEl('.bw-delete-client .title').innerText = `${name}`;
            domEl('.bw-delete-client').setAttribute('data-client-id', id);
        }
        
        destroyClient = () => {
            const id = domEl('.bw-delete-client').getAttribute('data-client-id');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;
            
            axios.post(`{{ route('clients.delete', ['id' => ':id']) }}`.replace(':id', id))
            .then(response => {
                window.location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</x-app-layout>
