<!doctype html>
<!--suppress ALL -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <x-style link="css/app.css"/>
    <x-pushed-styles/>
</head>
<body>
<x-container lg="sm" class="my-4">
    <x-title content="Content" level="h2"/>
    <x-paragraph
        content="Here is a bit of a paragraph with some words saying some things, i'm sure you get the **point**. And *Ho!*, it also supports **markdown**..."
        markdown/>

    <x-title content="Basic titles" level="h3" class="mt-4"/>
    <x-title content="An API for your design system." level="h1" class="mt-2"/>
    <x-title content="An API for your design system." class="mt-2" level="h2"/>
    <x-title content="An API for your design system." class="mt-2" level="h3"/>
    <x-title content="An API for your design system." class="mt-2" level="h4"/>
    <x-title content="An API for your design system." class="mt-2" level="h5"/>
    <x-title content="An API for your design system." class="mt-2" level="h6"/>

    <x-title content="Colored titles" level="h3" class="mt-4"/>
    <x-title content="An API for your design system." level="h1" class="mt-2" color="blue"/>
    <x-title content="An API for your design system." level="h2" class="mt-2" color="blue"/>
    <x-title content="An API for your design system." level="h3" class="mt-2" color="blue"/>
    <x-title content="An API for your design system." level="h4" class="mt-2" color="blue"/>
    <x-title content="An API for your design system." level="h5" class="mt-2" color="blue"/>
    <x-title content="An API for your design system." level="h6" class="mt-2" color="blue"/>

    <x-title content="Overline" level="h3" class="mt-4"/>
    <x-overline content="Constraint-based" class="mt-2"/>
    <x-title content="An API for your design system." level="h2" class="mt-2"/>

    <div class="mt-4">
        <x-overline content="Constraint-based" class="mt-2" color="blue"/>
        <x-title content="An API for your design system." level="h2" class="mt-2"/>
    </div>

    <x-title content="Alerts" level="h2" class="mt-6"/>
    <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="error"/>
    <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="warning"/>
    <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="success"/>
    <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="info"/>

    <x-title content="Closeable" level="h3" class="mt-4"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="error"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="warning"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="success"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="info"/>


    <x-title content="With a description" level="h3" class="mt-4"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
             description="We detected you are a robot because of the way you click so fast and your overall behavior."
             type="error"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
             description="We detected you are a robot because of the way you click so fast and your overall behavior."
             type="warning"/>

    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
             description="We detected you are a robot because of the way you click so fast and your overall behavior."
             type="success"/>

    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
             description="We detected you are a robot because of the way you click so fast and your overall behavior."
             type="info"/>

    <x-title content="Custom icons" level="h3" class="mt-4"/>
    <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
             icon="cake"
             description="We detected you are a robot because of the way you click so fast and your overall behavior."
             type="success"/>

    <x-title content="Badges" level="h2" class="mt-6"/>
    <div class="flex space-x-4 mt-4">
        <x-badge content="Sold" color="green"/>
        <x-badge content="Sold" color="red"/>
        <x-badge content="Sold" color="yellow"/>
        <x-badge content="Sold" color="blue"/>
    </div>
    <x-title content="With a dot" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-badge dotted content="Sold" color="green"/>
        <x-badge dotted content="Sold" color="red"/>
        <x-badge dotted content="Sold" color="yellow"/>
        <x-badge dotted content="Sold" color="blue"/>
    </div>
    <x-title content="As a link" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-badge href="#" dotted content="Sold" color="green"/>
        <x-badge href="#" dotted content="Sold" color="red"/>
        <x-badge href="#" dotted content="Sold" color="yellow"/>
        <x-badge href="#" dotted content="Sold" color="blue"/>
    </div>
    <x-title content="Disabled" level="h3" class="mt-4"/>

    <div class="flex space-x-4 mt-4">
        <x-badge disabled href="#" dotted content="Green" color="green"/>
        <x-badge disabled href="#" dotted content="Red" color="red"/>
        <x-badge disabled href="#" dotted content="Yellow" color="yellow"/>
        <x-badge disabled href="#" dotted content="Blue" color="blue"/>
    </div>

    <x-title content="Buttons" level="h2" class="mt-6"/>
    <div class="flex space-x-4 mt-4">
        <x-button color="gray" content="Withdraw"/>
        <x-button color="red" content="Withdraw"/>
        <x-button color="yellow" content="Withdraw"/>
        <x-button color="green" content="Withdraw"/>
        <x-button color="blue" content="Withdraw"/>
        <x-button color="pink" content="Withdraw"/>
    </div>
    <x-title content="With an icon" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button icon="inbox-in" color="gray" content="Withdraw"/>
        <x-button icon="inbox-in" color="red" content="Withdraw"/>
        <x-button icon="inbox-in" color="yellow" content="Withdraw"/>
        <x-button icon="inbox-in" color="green" content="Withdraw"/>
        <x-button icon="inbox-in" color="blue" content="Withdraw"/>
        <x-button icon="inbox-in" color="pink" content="Withdraw"/>
    </div>

    <x-title content="With an icon on the right side" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button icon="inbox-in" color="gray" icon-side="right" content="Withdraw"/>
        <x-button icon="inbox-in" color="red" icon-side="right" content="Withdraw"/>
        <x-button icon="inbox-in" color="yellow" icon-side="right" content="Withdraw"/>
        <x-button icon="inbox-in" color="green" icon-side="right" content="Withdraw"/>
        <x-button icon="inbox-in" color="blue" icon-side="right" content="Withdraw"/>
        <x-button icon="inbox-in" color="pink" icon-side="right" content="Withdraw"/>
    </div>

    <x-title content="With an icon of different set" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button icon="bell" set="fontawesome" color="gray" content="Withdraw"/>
        <x-button icon="bell" set="fontawesome" color="red" content="Withdraw"/>
        <x-button icon="bell" set="fontawesome" color="yellow" content="Withdraw"/>
        <x-button icon="bell" set="fontawesome" color="green" content="Withdraw"/>
        <x-button icon="bell" set="fontawesome" color="blue" content="Withdraw"/>
        <x-button icon="bell" set="fontawesome" color="pink" content="Withdraw"/>
    </div>

    <x-title content="Disabled" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button icon="inbox-in" disabled color="gray" content="Withdraw"/>
        <x-button icon="inbox-in" disabled color="red" content="Withdraw"/>
        <x-button icon="inbox-in" disabled color="yellow" content="Withdraw"/>
        <x-button icon="inbox-in" disabled color="green" content="Withdraw"/>
        <x-button icon="inbox-in" disabled color="blue" content="Withdraw"/>
        <x-button icon="inbox-in" disabled color="pink" content="Withdraw"/>
    </div>

    <x-title content="Icon only" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-buttons.icon icon="inbox-in" color="gray"/>
        <x-buttons.icon icon="inbox-in" color="red"/>
        <x-buttons.icon icon="inbox-in" color="yellow"/>
        <x-buttons.icon icon="inbox-in" color="green"/>
        <x-buttons.icon icon="inbox-in" color="blue"/>
        <x-buttons.icon icon="inbox-in" color="pink"/>
    </div>

    <x-title content="Secondary" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="gray"/>
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="red"/>
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="yellow"/>
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="green"/>
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="blue"/>
        <x-buttons.secondary icon="inbox-in" content="Withdraw" color="pink"/>
    </div>

    <x-title content="Text" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-buttons.text icon="inbox-in" content="Withdraw" color="gray"/>
        <x-buttons.text icon="inbox-in" content="Withdraw" color="red" coloredIcon/>
        <x-buttons.text icon="inbox-in" content="Withdraw" color="yellow" coloredIcon/>
        <x-buttons.text icon="inbox-in" content="Withdraw" color="green" coloredIcon/>
        <x-buttons.text icon="inbox-in" content="Withdraw" color="blue" coloredIcon/>
        <x-buttons.text icon="inbox-in" content="Withdraw" color="pink" coloredIcon/>
    </div>

    <x-title content="Avatar" level="h2" class="mt-6"/>
    <div class="flex space-x-4 mt-4">
        <x-avatar search="felixdorn" provider="github"/>
        <x-avatar
            src="https://avatars.githubusercontent.com/u/55788595?s=460&u=49a9b844970961a8717c603eb5988de07a993d0a&v=4"/>
        <x-avatar search="felixdorn" provider="github" status="online"/>
        <x-avatar search="felixdorn" provider="github" status="idle"/>
        <x-avatar search="felixdorn" provider="github" status="dnd"/>
        <x-avatar search="felixdorn" provider="github" status="absent"/>
    </div>

    <x-title content="Links" level="h2" class="mt-6"/>

    <div class="flex space-x-4 mt-4">
        <x-link content="Read more" color="gray"/>
        <x-link content="Read more" color="red"/>
        <x-link content="Read more" color="yellow"/>
        <x-link content="Read more" color="gtreen"/>
        <x-link content="Read more" color="blue"/>
        <x-link content="Read more" color="pink"/>
        <x-link content="Read more" icon="arrow-right" icon-side="right"/>
    </div>

    <x-title content="Inputs" level="h2" class="mt-6"/>

    <x-input name="phone" placeholder="0312345678"/>
    <x-password name="password" placeholder="{!! str_repeat('&bull;', 12) !!}"/>

    <x-title content="Selects" level="h3" class="mt-4"/>
    <x-select values="10, 25, 50 ,100" name="complexity" label="Simple select"/>
    <x-select values="10, 25, 50 ,100" keys="1,2,3,4" multiple name="complexity"
              label="Simple select accepting multiple values"/>
    <x-select values="10, 25, 50 ,100" keys="1,2,3,4" multiple name="complexity" searchable
              label="Searchable select accepting multiple values"/>

    <x-title content="Checkboxes" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-2">
        <x-checkbox name="remember_me" label="Unchecked" first/>
        <x-checkbox name="remember_me" label="Remember me" color="gray" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="red" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="yellow" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="green" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="blue" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="pink" checked first/>
    </div>

</x-container>

@livewireScripts
<x-script link="js/app.js"/>
<x-pushed-scripts/>
</body>

</html>
