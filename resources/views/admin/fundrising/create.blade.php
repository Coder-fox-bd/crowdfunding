<x-app-layout>
    
    @livewire('admin.fundrising.store')

    @push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    @endpush
</x-app-layout>