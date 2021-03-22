require('alpinejs')





 !el.tagName.includes("-") && el.hasAttribute('wire:observe')/**
* Prevents Livewire from tr
*/

const livewireShouldObserve= (el) => !el.tagName.includes("-") || el.hasAttribute('wire:observe') 

window.livewire.hook('element.initialized', el => {
   if (!livewireShouldObserve(el)) {
       return;
   }
  
   el.__livewire_ignore = true;
})

window.livewire.hook('element.updating', (fromEl, toEl, component) => {
    if (!livewireShouldObserve(fromEl)) {
        return;
    }

    for (var i = 0, atts = toEl.attributes, n = atts.length, arr = []; i < n; i++){
        fromEl.setAttribute(atts[i].nodeName, atts[i].nodeValue);
    }
})
