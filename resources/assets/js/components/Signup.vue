<template>
    <div class="col-12 col-md-6 offset-md-3 py-60">
        <form v-on:submit.prevent="subscribe" class="form-round" v-if="!success && !loading">
            <div class="input-group">
                <input type="email" v-model="email" class="form-control ls-10" placeholder="E.g. user@example.com" style="font-family:'Titillium Web';" required="">
                <span class="input-group-btn">
                    <button class="btn laravel-brand-bg" type="submit">Keep me updated</button>
                </span>
            </div>
        </form>
        <div class="text-dark fw-600" v-if="loading">
            <i class="fa fa-refresh fa-spin"></i> Subscribing....
        </div>
        <div v-if="success" class="bg-green-lightest border-l-4 border-green text-green-dark px-20 py-10 text-left" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-green mr-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold">Great</p>
                  <p>You have subscribed to updates from LaravelLive.</p>
                </div>
              </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                'email':'',
                'success': false,
                'loading':false
            }
        },
        methods:{
            subscribe(){
                this.loading = true;
                axios.post('/subscribe',{email:this.email}).then(response => {
                    this.loading = false;
                    this.success = true;
                },error =>{
                    alert(error);
                    this.loading = false;
                });
            }
        }
    }
</script>
