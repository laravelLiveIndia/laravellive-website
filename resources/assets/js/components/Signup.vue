<template>
    <div class="col-12 col-md-6 offset-md-3 py-60">
        <form method="post" target="_blank" class="form-round" name="mc-embedded-subscribe-form" action="https://xyz.us15.list-manage.com/subscribe/post?u=a80aa20a6604dcef64860c596&amp;id=ca865692f4">
            <div class="input-group">
                <input type="text" class="form-control ls-10" placeholder="E.g. user@example.com" style="font-family:'Titillium Web';">
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a80aa20a6604dcef64860c596_ca865692f4" tabindex="-1" value=""></div>
                <span class="input-group-btn">
                <button class="btn text-white laravel-brand-bg"  type="button">Keep me updated</button>
                </span>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted')
        }
    }
</script>
