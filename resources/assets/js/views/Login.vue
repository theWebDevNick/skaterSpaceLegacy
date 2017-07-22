<template>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 offset-md-3  ">
            <div class="card">
                <div class="card-block">

                    <!--Header-->
                    <div class="form-header  purple darken-4">
                        <h3><i class="fa fa-lock"></i> Login:</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form has-error">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="email_address" v-model="email" class="form-control validate">
                        <label for="email_address">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" v-model="password" id="form4" class="form-control validate">
                        <label for="form4">Your password</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-deep-purple" v-on:click="login">Login</button>
                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <div class="options">
                        <p>Not a member? <a href="#">Sign Up</a></p>
                        <p>Forgot <a href="#">Password?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</template>
<script>
    export default {
   data() {
       return {
           email:null,
           password:null,
           emailError:null,
           passwordError:null,
           success:null
       }
   },
        methods:{
            login(){
                axios.post('/api/user/login',
                    {email:this.email,password:this.password})
                    .then(response => {
                        if (response.data.token)
                        {
                            this.$root.$data.auth.setAfterLogin(response.data.token, response.data.user);
                            if(this.$route.query.redirect)
                            {
                                this.$root.$router.push({path:this.$route.query.redirect,params:null});
                            }
                            else
                            {
                                this.$root.$router.push({path:'/',params:null});
                            }

                        }
                        else
                        {

                        }

                    })
                    .catch(error=> {
                        console.log('Login Failed');
                        console.log(error);
                        this.password=null;
                    });
            }
        }

}
</script>