<template>
        <div class="col-xs-12">

            <!--Card-->
            <div class="card testimonial-card">
                <div class="card-up default-color">
                </div>
                <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive">
                </div>
                <div class="card-block">
                    <!--Name-->
                    <h1 class="card-title">{{coach.first_name}} {{coach.last_name}}</h1>
                    <p>Figure skating coach in Wichita, KS.</p>
                    <div class="chip"  v-for="discipline in coach.coaching_disciplines">
                        {{discipline.name}}
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <h2>My Biography</h2>
                            <div class="card-text text-justify" v-html="coach.bio">

                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <h2>My Credentials</h2>
                            <div class="text-justify">
                                <ul class="list-group">
                                    <li  class="list-group-item" v-for="cred in coach.coaching_credentials">
                                        <p class="mb-1">
                                            <router-link to="creds">{{cred.name}}</router-link>
                                        </p>
                                        <br>
                                        <p class="mb-1">
                                           Issued by US Figure Skating
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>

            </div>
            <!--/.Card-->
    </div>
</template>
<script>
    export default {
        data(){
            return {coach:[]}
        },
        created(){
            axios.get('/api/coach/larene_daisy_ks')
                .then(({data})=>this.coach=data)
        }
    }
</script>