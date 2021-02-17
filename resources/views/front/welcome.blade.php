<x-layout title="Welcome" description="My description" class="p-4">
    <x-searchable-input name="country">
        @php($countries = ['France', 'Germany', 'Russia'])
        <x-searchable-input-dataset :data="$countries" />
        @foreach($countries as $country)
            <x-searchable-input-result :name="$country">{{ $country }}</x-searchable-input-result>
        @endforeach
    </x-searchable-input>
</x-layout>
{{-- 
When two years old, she was sent in france to learn the language and how to behave at court
Returns to england when shes twenty
Catches the attention of Henry the 8
He wants a baby and his wife couldn't do it
He chooses her because of presumed good fertility and personality 
But she needs security :her sister got thrown away after he tried getting a baby
He offers the "prestigious" title of his one and only mistress.
--}}