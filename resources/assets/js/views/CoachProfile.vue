<template>

        <div class="col-xs-12"  v-if="coach">

            <!--Card-->
            <div class="card testimonial-card">
                <div class="card-up default-color">
                </div>
                <div class="avatar"><img :src="coach.profile_pic_url" class="rounded-circle img-responsive">
                </div>
                <div class="card-block">
                    <!--Name-->
                    <h1 class="card-title">{{coach.first_name}} {{coach.last_name}}</h1>
                    <p>Figure skating coach.</p>
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
                                            <router-link :to="{name:'creds',params:{id:cred.id}}">{{cred.name}}</router-link>
                                        </p>
                                        <br>
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
    <div v-else-if="hasError" class="col-xs-12 col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header danger-color-dark white-text">
                Coach Not Found
            </div>
            <div class="card-block">
                <h4 class="card-title">The Coach you are looking for could not be found.</h4>
                <p class="card-text">The coach you are looking for either does not exist or has changed their URL. You may want to try returning to the search page to find your coach.</p>
                <router-link :to="{name:'coachSearch'}" class="btn btn-danger">Search For A Coach</router-link>
            </div>
        </div>
    </div>
    <div class="progress primary-color-dark" v-else>
        <div class="indeterminate"></div>
    </div>
</template>
<script>

    export default {
        data(){
            return {
                coach:null,
                hasError:false
            }
        },
        created(){
            axios.get('/api/coach/'+this.$route.params.slug)
                .then(({data})=>this.coach=data,(error)=>this.hasError=true)

        }
    }
</script>