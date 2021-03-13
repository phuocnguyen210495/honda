<x-layout title="Welcome" description="My description" class="">
    <x-navigation :items="app('navigation')
        ->add('Home')"
    />

    <div class="max-w-7xl mx-auto">
        <x-input
            name="email"
            label="E-mail"
            placeholder="john@cool.com"
            icon="mail"
            required
        />

        <x-select name="country" :values="[
            'FR' => 'France'
        ]" icon="cake"/>

        <x-password icon="key" name="password"/>

        <x-searchable-input name="month" :values="['January', 'February', 'March', 'April']"/>

        <x-quantity name="quantity" required/>

        <x-checkbox name="remember_me" label="Remember me"/>

        <x-toggle name="activate" class="mt-4"/>
<div class="flex items-start">
    <x-button content="Submit" />
    <x-button.icon icon="cake" />
    <x-button.text content="Delete" />
</div>
    </div>
</x-layout>
