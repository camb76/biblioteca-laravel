<div class="lg:flex-1 overflow-x-auto">
    <div class="flex flex-col lg:flex-row h-screen">
        <!-- Sidebar -->
        <div class="lg:w-1/5 bg-black/70">
            <div class="p-6">
                <h2 class="text-white text-lg font-semibold">Sidebar</h2>
                <ul class="mt-6">
                    <li>
                        <a href="#" class="block text-gray-300 hover:bg-gray-700 px-4 py-2 rounded">Inicio</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-300 hover:bg-gray-700 px-4 py-2 rounded">Acerca de</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-300 hover:bg-gray-700 px-4 py-2 rounded">Servicios</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-300 hover:bg-gray-700 px-4 py-2 rounded">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-start p-4 mb-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('persons.create') }}">create person</a>
                </div>
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CARACTERISTICAS</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                    
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($persons as $person)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $person->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $person->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $person->age }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{  json_encode($person->caracteristicas) }}</td>
                                <td class="border px-6 py-4 text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('persons.edit', $person->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-2 rounded">Editar</a>
                                        <button class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="confirmDelete('{{ $person->id }}')">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>  
        </div>
        </div>
    
