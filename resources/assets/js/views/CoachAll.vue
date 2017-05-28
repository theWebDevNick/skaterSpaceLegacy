<template>
    <div v-if="coaches" class="container">
        <div class="col-xs-12 col-md-3" v-for="coach in coaches.data">
            <div class="card testimonial-card">
                <div class="card-up stylish-color-dark">
                </div>
                <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive">
                </div>
                <div class="card-block">
                    <h4 class="card-title">{{coach.first_name}}&nbsp;{{coach.last_name}}</h4>
                    <hr>
                    <p>{{coach.first_name}} is a coach from Wichita, KS who coaches </p>
                    <p></p>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                coaches:null,
                hasError:false
            }
        },
        created(){
            axios.get('/api/coach/')
                .then(({data})=>this.coaches=data,(error)=>this.hasError=true)

        }
    }
</script>