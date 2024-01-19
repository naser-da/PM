<x-app-layout>

    <x-slot name="header">

        <div class="float-right">
            <x-bladewind::button 
                radius="none" 
                size="small"
                onclick=""
                    >
                Add Tasks
            </x-bladewind::button>
        </div>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $project->title }}
        </h2>
    </x-slot>

    <div class="flex-row justify-center py-12 md:flex">
        <div class="w-1/4 sm:px-6 lg:px-8">
            <x-bladewind.card
                class="shadow-xl bg-gray-800"
                title="Project"
            >
                <h2 class="text-white font-bold">
                    {{$project->title}}
                </h2>

                <ul class="text-white my-5">
                    <li>
                        <span class="font-bold">Client:</span> Jhone Doe (Organization) 
                    </li>
                    <li>
                        <span class="font-bold">Volume:</span> 40 pts. 
                    </li>
                    <li>
                        <span class="font-bold">Type:</span> Translation 
                    </li>
                    <li>
                        <span class="font-bold">Deadline:</span> 2024-02-31 
                    </li>
                </ul>

                    
            </x-bladewind.card>
            <x-bladewind.card
                class="shadow-xl bg-gray-800 py-5 my-6"
                title="Contributors"
            >

                <x-bladewind.avatar
                    image="{{asset('imgs/avatar.jpeg')}}"
                    size="small"
                    show_ring="false"
                    stacked="true" />

                <x-bladewind.avatar
                    image="{{asset('imgs/avatar.jpeg')}}"
                    size="small"
                    show_ring="false"
                    stacked="true" />

                <x-bladewind.avatar
                    image="{{asset('imgs/avatar.jpeg')}}"
                    size="small"
                    show_ring="false"
                    stacked="true" />

                    
            </x-bladewind.card>
        </div>
        <div class="w-3/4 sm:px-6 lg:px-8">
            <x-bladewind.card
                class="shadow-xl bg-gray-800"
                title="Tasks"
            >
            <x-bladewind.tab-group name="free-pics">

                <x-slot name="headings">
                    <x-bladewind.tab-heading
                        active="true" name="all" label="All Tasks" />
            
                    <x-bladewind.tab-heading
                        name="todo" label="Todo" />
            
                    <x-bladewind.tab-heading
                        name="doing" label="Doing" />
            
                    <x-bladewind.tab-heading
                        name="auditing" label="Auditing" />

                    <x-bladewind.tab-heading
                    name="done" label="Done" />

                    <x-bladewind.tab-heading
                    name="cancelled" label="Cancelled" />
                </x-slot>
            
                <x-bladewind.tab-body>
            
                    <x-bladewind.tab-content name="all" active="true">

                        <x-bladewind::table hover_effect="false" divider="thin" compact="true">
                            <x-slot name="header">
                                <th>Name</th>
                                <th>Pts.</th>
                                <th>Status</th>
                                <th>Deadline</th>
                            </x-slot>     
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Auditing" shade="dark" color="yellow" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Done" shade="dark" color="green" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Cancelled" shade="dark" color="red" />
                                </td>
                                <td>2024-02-25</td>
                                </td>
                            </tr>
                        </x-bladewind::table>

                    </x-bladewind.tab-content>
            
                    <x-bladewind.tab-content name="todo">
                        <x-bladewind::table hover_effect="false" divider="thin" compact="true">
                            <x-slot name="header">
                                <th>Name</th>
                                <th>Pts.</th>
                                <th>Status</th>
                                <th>Deadline</th>
                            </x-slot>     
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Todo" shade="dark" color="gray" />
                                </td>
                                <td>2024-02-25</td>
                                </td>
                            </tr>
                        </x-bladewind::table>
                    </x-bladewind.tab-content>
            
                    <x-bladewind.tab-content name="doing">
                        <x-bladewind::table hover_effect="false" divider="thin" compact="true">
                            <x-slot name="header">
                                <th>Name</th>
                                <th>Pts.</th>
                                <th>Status</th>
                                <th>Deadline</th>
                            </x-slot>     
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />
                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />                                </td>
                                <td>2024-02-25</td>
                            </tr>
                            <tr>
                                <td>Jhone Doe</td>
                                <td>4.3</td>
                                <td>
                                    <x-bladewind.tag label="Doing" shade="dark" color="blue" />                                </td>
                                <td>2024-02-25</td>
                                </td>
                            </tr>
                        </x-bladewind::table>
                    </x-bladewind.tab-content>
            
                    <x-bladewind.tab-content name="auditing">

                    </x-bladewind.tab-content>

                    <x-bladewind.tab-content name="done">

                    </x-bladewind.tab-content>

                    <x-bladewind.tab-content name="cancelled">

                    </x-bladewind.tab-content>
            
                </x-bladewind.tab-body>
            
            </x-bladewind.tab-group>

            </x-bladewind.card>
        </div>

    </div>

</x-app-layout>