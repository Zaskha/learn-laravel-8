@extends('layouts.app', ['title' => 'Home Page'])

@section('content')

<h1>Home</h1>

{{-- cara 1 --}}
    {{-- @component('components.alert')
        @slot('title')
            Header Component with <strong>Strong</strong> Tag.
        @endslot
        Ini adalah Children
        @slot('footer')
            Footer
        @endslot
    @endcomponent --}}
{{-- cara 1 end --}}

{{-- cara 2 --}}
    <x-alert>

        {{-- Header Slot --}}
        <x-slot name="title">
            Header Component with <strong>Strong</strong> Tag.
        </x-slot>
        
        {{-- Children Slot --}}
        Ini adalah Children
        
        {{-- Footer Slot --}}
        @slot('footer')
        Footer
        @endslot

    </x-alert>
{{-- cara 2 end --}}

<p>
    Lorem, ipsum dolor sit <strong style="color: red">amet</strong> consectetur adipisicing elit. Delectus laboriosam facere natus quam exercitationem expedita id, tempora necessitatibus voluptatum quis optio recusandae aliquid dolor suscipit non similique fugiat iure autem.
</p>
    
@endsection