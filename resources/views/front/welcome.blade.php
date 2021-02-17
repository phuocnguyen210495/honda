<x-layout title="Welcome" description="My description" class="p-4">
    <x-dropdown.container>
        <x-slot name="trigger">
            <x-dropdown.trigger icon="dots-vertical" icon-side="right"/>
        </x-slot>

        <x-dropdown.link content="Edit" icon="pencil-alt"/>
        <x-dropdown.link content="Duplicate" icon="duplicate"/>
        <x-dropdown.divider/>

        <x-dropdown.link content="Archive" icon="archive"/>
        <x-dropdown.link content="Move" icon="arrow-circle-right"/>
        <x-dropdown.divider/>

        <x-dropdown.link content="Share" icon="user-add"/>
        <x-dropdown.link content="Add to favorites" icon="heart"/>
        <x-dropdown.divider/>

        <x-dropdown.link content="Delete" icon="trash"/>
    </x-dropdown.container>
</x-layout>
