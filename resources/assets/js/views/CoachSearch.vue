<template>
<d-iv class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mt-1">
            <div class="card-block">
                <div class="form-header  purple darken-4">
                    <h3>Find a Coach</h3>
                </div>
                <p>All fields are <em>optional</em>&mdash;but your search results will be more accurate if you complete more fields.</p>
                <div class="col-xs-12 col-md-6">
                    <div class="md-form ">
                        <input type="text" id="coachName" v-model="searchName" class="form-control" name="searchName">
                        <label for="coachName">Coach's Name</label>
                    </div>
                </div>
                    <div class="col-xs-12 col-md-6">
                        <select class="mdb-select colorful-select dropdown-primary">
                            <option disabled selected>Select a State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                        </select>
                        <label>Select a State</label>
                    </div>



                <div class="text-center">
                    <button class="btn btn-deep-purple">Search Coaches</button>
                    <router-link :to="{name:'allCoaches'}" class="btn btn-deep-purple">Show All Coaches</router-link>
                </div>
            </div>
        </div>
    </div>
</d-iv>
</template>
<script>
    export default {
        mounted(){
            $('.mdb-select').material_select();//initialize material selects
        },
        data(){
            return {
                searchName:null,
                hasError:false
            }
        }
    }
</script>