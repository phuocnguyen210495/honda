<div x-data="{ stars: [0, 0, 0, 0, 0], max: {{ $max }} }">
    <template x-for="(star, index) in stars" :key="index">
        <span @click="console.log([].fill(1, 0, index))" x-text="star"></span>
    </template>
</div>