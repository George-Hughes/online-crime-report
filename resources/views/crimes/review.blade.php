<x-admin-layout>
    {{-- Other data for js --}}
    <input id="ID" type="text" value="{{ $crime->id }}" hidden>
    <input id="LAT" type="text" value="{{ $crime->lat }}" hidden>
    <input id="LNG" type="text" value="{{ $crime->lng }}" hidden>
    <input id="C-TYPE" type="text" value="{{ $crime->name }}" hidden>
    <input id="REGION" type="text" value="{{ $crime->region }}" hidden>
    {{-- Other data for js --}}

    
    <x-current-map />
</x-admin-layout>