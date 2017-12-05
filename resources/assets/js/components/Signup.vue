<template>
    <div class="col-12 col-md-6 offset-md-3 py-60">
        
        <form class="form-round">
            <div class="input-group">
                <input type="text" class="form-control ls-10" placeholder="E.g. user@example.com">
                <span class="input-group-btn">
                <button class="btn text-white" style="background-color: #E57D69;" type="button">Subscribe</button>
                </span>
            </div>
        </form>
        <p class="text-grey py-10">Subscribe to register your interest and be kept up to date with the latest news.</p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
