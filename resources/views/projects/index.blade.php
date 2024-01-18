<x-app-layout>
    <x-slot name="header">
        
        <div class="float-right">
            <x-bladewind::button 
                radius="none" 
                size="small"
                onclick="showModal('create-project')"
                    >
                New Project
            </x-bladewind::button>
        </div>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
            
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-bladewind.table
                        searchable="true"
                        exclude_columns="created_at, updated_at"
                        divider="thin"
                        :action_icons="$action_icons"
                        :data="$projects" />
                </div>
            </div>
        </div>
    </div>

    <x-bladewind.modal
    name="create-project"
    show_action_buttons="false"
    >
    <form method="POST" class="signup-form" action="{{route('projects.add')}}">
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
                searchable="true"
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
    </x-bladewind.modal>

    <x-bladewind::modal name="delete-project" type="error" title="Confirm Project Deletion" ok_button_action="destroyProject()">
        Are you really sure you want to delete <b class="title"></b>?
        This action cannot be reversed.
    </x-bladewind::modal>

    <script>

        deleteProject = (id, title) => {
            showModal('delete-project');
            domEl('.bw-delete-project .title').innerText = `${title}`;
            domEl('.bw-delete-project').setAttribute('data-project-id', id);
        }
        
        destroyProject = () => {
            const id = domEl('.bw-delete-project').getAttribute('data-project-id');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;
            
            axios.post(`{{ route('projects.delete', ['id' => ':id']) }}`.replace(':id', id))
            .then(response => {
                alert(`Project with ID ${id} deleted successfully`);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</x-app-layout>
