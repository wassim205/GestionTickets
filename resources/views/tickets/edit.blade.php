<x-app-layout>
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-gray-900 dark:text-white leading-tight">
                Assigner un Agent au Ticket <span class="text-blue-500">#{{ $ticket->id }}</span>
            </h2>
        </div>
    </header>
 
    <div class="p-6">
        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-lg text-gray-700 dark:text-gray-300 font-semibold mb-2" for="agent_id">
                    Sélectionner un Agent
                </label>
                <select name="agent_id" id="agent_id" class="w-full p-2 border rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    @foreach($agents as $agent)
                        <option value="{{ $agent->id }}" class="text-black dark:text-white" {{ $ticket->agent_id == $agent->id ? 'selected' : '' }}>
                            {{ $agent->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow-md">
                    Assigner l'Agent
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
