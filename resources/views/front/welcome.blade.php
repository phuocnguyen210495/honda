<!doctype html>
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
<body class="bg-gray-100 font-medium">
<x-container lg="4xl" class="m-4">
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
    <x-title content="An API for your design system." level="h1" class="mt-2" color="{{ settings('color') }}"/>
    <x-title content="An API for your design system." level="h2" class="mt-2" color="{{ settings('color') }}"/>
    <x-title content="An API for your design system." level="h3" class="mt-2" color="{{ settings('color') }}"/>
    <x-title content="An API for your design system." level="h4" class="mt-2" color="{{ settings('color') }}"/>
    <x-title content="An API for your design system." level="h5" class="mt-2" color="{{ settings('color') }}"/>
    <x-title content="An API for your design system." level="h6" class="mt-2" color="{{ settings('color') }}"/>

    <x-title content="Overline" level="h3" class="mt-4"/>
    <x-overline content="Constraint-based" class="mt-2"/>
    <x-title content="An API for your design system." level="h2" class="mt-2"/>

    <div class="mt-4">
        <x-overline content="Constraint-based" class="mt-2" color="blue"/>
        <x-title content="An API for your design system." level="h2" class="mt-2"/>
    </div>


    <x-title content="Content Dividers" level="h3" class="mt-4"/>
    <div class="space-y-8 mt-4">
        <x-divider/>
        <x-divider label="Don't have an account?"/>
    </div>

    <x-title content="Variance" level="h3" class="mt-4"/>
    <div class="flex mt-2 space-x-4">
        <x-variance variance="12"/>
        <x-variance variance="-4"/>
        <x-variance variance="0"/>
    </div>

    <x-title content="Alerts" level="h2" class="mt-6"/>
    <div class="space-y-4">
        <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="error"/>
        <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="warning"/>
        <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="success"/>
        <x-alert content="Bip Boop! Seems like you're a robot, get out of here." type="info"/>
    </div>

    <x-title content="Closeable" level="h3" class="mt-4"/>
    <div class="space-y-4">
        <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="error"/>
        <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="warning"/>
        <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="success"/>
        <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here." type="info"/>
    </div>

    <x-title content="With a description" level="h3" class="mt-4"/>
    <div class="space-y-4">
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
    </div>
    <x-title content="Custom icons" level="h3" class="mt-4"/>
    <div class="space-y-4">
        <x-alert closeable content="Bip Boop! Seems like you're a robot, get out of here."
                 icon="cake"
                 description="We detected you are a robot because of the way you click so fast and your overall behavior."
                 type="success"/>
    </div>

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

    <x-title content="Pills" level="h2" class="mt-6"/>
    <div class="flex space-x-4 mt-4">
        <x-pill content="Sold" color="green"/>
        <x-pill content="Sold" color="red"/>
        <x-pill content="Sold" color="yellow"/>
        <x-pill content="Sold" color="blue"/>
    </div>
    <x-title content="With a dot" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-pill dotted content="Sold" color="green"/>
        <x-pill dotted content="Sold" color="red"/>
        <x-pill dotted content="Sold" color="yellow"/>
        <x-pill dotted content="Sold" color="blue"/>
    </div>
    <x-title content="As a link" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-pill href="#" dotted content="Sold" color="green"/>
        <x-pill href="#" dotted content="Sold" color="red"/>
        <x-pill href="#" dotted content="Sold" color="yellow"/>
        <x-pill href="#" dotted content="Sold" color="blue"/>
    </div>
    <x-title content="Disabled" level="h3" class="mt-4"/>

    <div class="flex space-x-4 mt-4">
        <x-pill disabled href="#" dotted content="Green" color="green"/>
        <x-pill disabled href="#" dotted content="Red" color="red"/>
        <x-pill disabled href="#" dotted content="Yellow" color="yellow"/>
        <x-pill disabled href="#" dotted content="Blue" color="blue"/>
    </div>

    <x-title content="Counting badge" level="h2" class="mt-6"/>
    <div class="flex space-x-4 mt-4">
        <x-counting-badge count="4" color="green"/>
        <x-counting-badge count="142" color="red"/>
        <x-counting-badge count="0" always-show color="yellow"/>
        <x-counting-badge count="3000+" color="blue"/>
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
        <x-button.icon icon="inbox-in" color="gray"/>
        <x-button.icon icon="inbox-in" color="red"/>
        <x-button.icon icon="inbox-in" color="yellow"/>
        <x-button.icon icon="inbox-in" color="green"/>
        <x-button.icon icon="inbox-in" color="blue"/>
        <x-button.icon icon="inbox-in" color="pink"/>
    </div>

    <x-title content="Secondary" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button.secondary icon="inbox-in" content="Withdraw" color="gray"/>
        <x-button.secondary icon="inbox-in" content="Withdraw" color="red"/>
        <x-button.secondary icon="inbox-in" content="Withdraw" color="yellow"/>
        <x-button.secondary icon="inbox-in" content="Withdraw" color="green"/>
        <x-button.secondary icon="inbox-in" content="Withdraw" color="blue"/>
        <x-button.secondary icon="inbox-in" content="Withdraw" color="pink"/>
    </div>

    <x-title content="Text" level="h3" class="mt-4"/>
    <div class="flex space-x-4 mt-4">
        <x-button.text icon="inbox-in" content="Withdraw" color="gray"/>
        <x-button.text icon="inbox-in" content="Withdraw" color="red" coloredIcon/>
        <x-button.text icon="inbox-in" content="Withdraw" color="yellow" coloredIcon/>
        <x-button.text icon="inbox-in" content="Withdraw" color="green" coloredIcon/>
        <x-button.text icon="inbox-in" content="Withdraw" color="blue" coloredIcon/>
        <x-button.text icon="inbox-in" content="Withdraw" color="pink" coloredIcon/>
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

    <x-title content="Progress" level="h2" class="mt-6"/>
    <x-progress class="mt-4"/>
    <x-progress filled="80" total="200" class="mt-4"/>
    <x-progress filled="20" total="100" color="green" class="mt-4"/>
    <x-progress filled="80" total="200" class="mt-4" squared/>
    <x-progress filled="80" total="200" class="mt-4" squared height="1"/>

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
    <div class="space-y-4 mt-2">
        <x-checkbox name="remember_me" label="Unchecked" first/>
        <x-checkbox name="remember_me" label="Remember me" color="gray" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="red" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="yellow" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="green" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="blue" checked first/>
        <x-checkbox name="remember_me" label="Remember me" color="pink" checked first/>
    </div>

    <x-title content="Quantity" level="h3" class="mt-4"/>
    <x-quantity name="quantity"/>

    <x-title content="Rating" level="h3" class="mt-4"/>
    <x-rating name="rating"/>

    <x-title content="Social icons" level="h3" class="mt-4"/>
    <div class="flex space-x-4">
        <x-social type="facebook" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Facebook
        </x-social>
        <x-social type="instagram" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Instagram
        </x-social>
        <x-social type="twitter" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Twitter
        </x-social>
        <x-social type="linkedin" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Linkedin
        </x-social>
        <x-social type="dev" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            dev.to
        </x-social>
        <x-social type="github" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            GitHub
        </x-social>
        <x-social type="gitlab" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Gitlab
        </x-social>
        <x-social type="discord" link="felixdorn_" as-text class="hover:underline focus:underline focus:outline-none">
            Discord
        </x-social>
    </div>
    <div class="flex space-x-4 mt-4">
        <x-social type="facebook" link="felixdorn_"/>
        <x-social type="instagram" link="felixdorn_"/>
        <x-social type="twitter" link="felixdorn_"/>
        <x-social type="linkedin" link="felixdorn_"/>
        <x-social type="dev" link="felixdorn_"/>
        <x-social type="github" link="felixdorn_"/>
        <x-social type="gitlab" link="felixdorn_"/>
        <x-social type="discord" link="felixdorn_"/>
    </div>
    <div class="flex space-x-4 mt-4">
        <x-social branded type="facebook" link="felixdorn_"/>
        <x-social branded type="instagram" link="felixdorn_"/>
        <x-social branded type="twitter" link="felixdorn_"/>
        <x-social branded type="linkedin" link="felixdorn_"/>
        <x-social branded type="dev" link="felixdorn_"/>
        <x-social branded type="github" link="felixdorn_"/>
        <x-social branded type="gitlab" link="felixdorn_"/>
        <x-social branded type="discord" link="felixdorn_"/>
    </div>

    <x-title content="Panels" level="h3" class="mt-4"/>
    <x-action-panel
        title="Delete your account"
        description="Once you delete your account, you will loose all data associated with it.">
        <x-button.secondary color="red" content="Delete your account"/>
    </x-action-panel>

    <x-action-panel
        class="mt-4"
        title="Delete your account"
        description="Once you delete your account, you will loose all data associated with it.">
        <x-link content="Read more" icon="arrow-right" icon-side="right"/>
    </x-action-panel>
    <x-action-panel
        class="mt-4"
        title="Delete your account"
        description="Once you delete your account, you will loose all data associated with it." well>
        <x-button.text content="Contact sales"/>
    </x-action-panel>

</x-container>

@livewireScripts
<x-script link="js/app.js"/>
<x-pushed-scripts/>
</body>

</html>
