<template>
    <div>
          <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">

                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>

                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>

                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                        <p class="font-size-14 mb-0">- Akademia User</p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>

                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                        <p class="font-size-14 mb-0">- Akademia User</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-3 mb-md-3">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="assets/images/logo-dark.png" alt="" height="18" class="auth-logo-dark">
                                            <img src="assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        <div>
                                            <h5 class="text-primary">Register school</h5>
                                            <p class="text-muted">Add your school to Akademia School Management Portal now.</p>
                                        </div>

                                        <div class="mt-4">
                                        <p class="text-danger">{{errors}}</p>
                                                <div v-if="this.step==1">
                                                    <div class="mb-3">
                                                        <label for="schoolname" class="form-label">School Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="schooldata.schoolname" placeholder="Enter Name" @input="checkAnswered">
                                                        <div class="invalid-feedback">
                                                            Please Enter School Name
                                                        </div>
                                                    </div>

                                                <div class="mb-3" id="datepicker2">
                                                        <label for="schoolname" class="form-label">Establishment Year <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" placeholder="dd M, yyyy"
                                                            v-model="schooldata.year_of_establishment"  @input="checkAnswered"
                                                            >
                                                </div>
                                                <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Address <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="userpassword" placeholder="Address"
                                                            v-model="schooldata.address"  @input="checkAnswered">
                                                </div>

                                                <div class="row">
                                                <div class="mb-3 col-12">
                                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                                         <select
                                                         class="form-control"
                                                         v-model="schooldata.countryid"
                                                         v-for="country in countries" :key="country.id"
                                                         @change="getState(country.id)"
                                                         >
                                                                <option>Select</option>
                                                                <option :value="country.id"> {{ country.country   }}</option>
                                                        </select>
                                                </div>
                                                      <div class="mb-3 col-6">
                                                        <label class="form-label" v-if="this.states != null">State <span class="text-danger">*</span></label>
                                                        <select
                                                        class="form-control"
                                                        v-model="schooldata.stateid"
                                                        v-for="statee in states" :key="statee.id"
                                                        @change="getCity(statee.id)">
                                                                <option>Select</option>
                                                                <option :value="statee.id">{{statee.state}}</option>
                                                        </select>

                                                    </div>
                                                       <div class="mb-3 col-6">
                                                        <label class="form-label" v-if="this.cities != null">City <span class="text-danger">*</span></label>
                                                        <select
                                                        class="form-control"
                                                        v-model="schooldata.cityid"
                                                        v-for="city in cities" :key="city.id"
                                                        @change="checkAnswered">
                                                                <option>Select</option>
                                                                <option :value="city.id">{{ city.city }}</option>
                                                        </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!--  motto, email.... -->
                                                <div v-if="this.step==2">
                                                    <!-- <div class="mb-3">
                                                        <label for="useremail" class="form-label">School Logo</label>
                                                        <input type="file" class="form-control" id="useremail" v-model="schooldata.schoollogo" placeholder="School Photo"
                                                        >
                                                    </div> -->

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Motto <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="schooldata.schoolmotto" placeholder="Your Moto..."
                                                        @input="checkAnswered"
                                                        >
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" v-model="schooldata.schoolemail" placeholder="email address"
                                                        @input="checkAnswered"
                                                        >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Telephone <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="schooldata.schooltel" placeholder="tel"
                                                        @input="checkAnswered"
                                                        >
                                                    </div>
                                                </div>
                                                <!-- branch and access -->
                                                <div v-if="this.step==3">
                                                    <div class="mb-3">
                                                        <label for="schoolzone" class="form-label">Branch Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="branchData.branchname" id="useremail" placeholder="Enter Branch Name" required
                                                        @input="checkAnswered">
                                                        <div class="invalid-feedback">
                                                            Please Enter Email
                                                        </div>
                                                    </div>

                                                   <div class="mb-3">
                                                        <label for="schoolzone" class="form-label">Branch Address <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="branchData.branchaddress" id="useremail" placeholder="Enter Branch Address" required
                                                        @input="checkAnswered"
                                                        >
                                                        <div class="invalid-feedback">
                                                            Please Enter Email
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" v-model="useraccessData.username" id="username" placeholder="Enter username" required
                                                        @input="checkAnswered">
                                                        <div class="invalid-feedback">
                                                            Please Enter Username
                                                        </div>
                                                    </div>

                                                    <div class="mb-2">
                                                        <label for="userpassword" class="form-label">Password <span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control"  v-model="useraccessData.password" id="userpassword" placeholder="Enter password" required
                                                        @input="checkAnswered">
                                                        <div class="invalid-feedback">
                                                            Please Enter Password
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p class="mb-2">By registering you agree to the Akademia <a href="#" class="text-primary">Terms of Use</a></p>
                                                    </div>
                                                </div>
                                                <!-- buttons -->
                                                <div class="row">
                                                    <button class="btn btn-warning waves-effect waves-light col-6" v-if="this.step != 1 " @click.prevent="prevStep"> Previous Step </button>
                                                    <button class="btn btn-primary waves-effect waves-light col-6 mr-2" v-if="this.step != this.totalsteps" @click.prevent="nextStep" :disabled="checkFilled"> Next Step </button>
                                                    <button class="btn btn-primary waves-effect waves-light col-6" v-if="this.step == this.totalsteps" type="submit" @click="submitData">Register</button>
                                                </div>
                                            <div class="text-center">
                                                <p>Already have an account ? <router-link to="/"  class="fw-medium text-primary"> Login </router-link> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- auth footer -->
                                    <footer-auth />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</template>

<script>
import FooterAuth from './Footer-Auth.vue'
export default {
    components: {FooterAuth},
    data() {
        return {
            totalsteps:3,
            step:0,
            checkFilled:true,
            schooldata:{
                schoolname:null,
                year_of_establishment:null,
                address:null,
                countryid:null,
                stateid:null,
                cityid:null,
                schoollogo:null,
                schoolmotto:null,
                schoolemail:null,
                schooltel:null,
                schoolzone:null,
                schoolchapter:null,
                associationAffiliation:null,
                educationDistrict:null,
            },
            useraccessData:{
                username:null,
                password:null
            },
            branchData:{
                branchname:'Head Branch',
                branchaddress:null,
            },
            submit:[],
            errors:null,
            countries:null,
            states:null,
            cities:null

        }
    },

    methods: {
        checkAnswered(){
            this.errors = null
            if(this.step == 1 && this.schooldata.schoolname != null && this.schooldata.year_of_establishment != null && this.schooldata.address != null && this.schooldata.countryid != null && this.schooldata.stateid != null && this.schooldata.cityid != null){
                this.checkFilled = false
            }else if(this.step == 2 && this.schooldata.schoolmotto != null && this.schooldata.schoolemail != null && this.schooldata.schooltel != null){
                this.checkFilled = false
            }else if(this.step == 3 && this.useraccessData.username != null && this.useraccessData.password != null && this.branchData.branchname != null & this.branchData.branchaddress != null){
                this.checkFilled = false
            }else{
                this.checkFilled = true
            }
        },
        getCountry(){
            axios.get('api/country/').then((result) => {
                this.countries = result.data
            }).catch((err) => {

            });
        },
        getState(countryid){
            axios.get('api/state/'+countryid).then((result) => {
                this.states = result.data
            }).catch((err) => {

            });
        },
        getCity(stateid){
             axios.get('api/city/'+stateid).then((result) => {
                this.cities = result.data
            }).catch((err) => {

            });
        },

        nextStep(){
            this.checkFilled = true
            this.step = this.step + 1
        },
        prevStep(){
            this.step = this.step - 1
        },
        submitData(){
            this.submit = [this.schooldata, this.useraccessData, this.branchData];
            axios.post('api/schregister', this.submit).then((result) => {
                console.log('loggedin')
            }).catch((err) => {
                this.errors = err.response.data.errors[0][0]
            });

        }

    },


    created() {
        this.nextStep()
        this.getCountry()

    },


}
</script>
