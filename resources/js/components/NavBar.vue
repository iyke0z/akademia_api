<template>
    <div>
        <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <router-link to="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </router-link>

                            <router-link to="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="19">
                                </span>
                            </router-link>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>


                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <router-link to="#!" class="small" key="t-view-all"> View All</router-link>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <router-link to="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                    <router-link to="#" @click.prevent class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                    <router-link to="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>

                                    <router-link to="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <router-link class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                                    </router-link>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{  username }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <router-link class="dropdown-item" to="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></router-link>
                                <router-link class="dropdown-item" to="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></router-link>
                                <router-link class="dropdown-item d-block" to="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></router-link>
                                <router-link class="dropdown-item" to="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></router-link>
                                <div class="dropdown-divider"></div>
                                <router-link class="dropdown-item text-danger" to="#" @click.prevent="logout"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></router-link>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Admin Menu</li>

                            <li>
                                <router-link to="/priviledge" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Priviledges</span>
                                </router-link>

                               <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">School</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Branches</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Class Groups</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Class Rooms</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Students</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Staff and Tutors</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Parents</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Time Table</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Calendar</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Hostel</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Assign Priviledges</span>
                                </router-link>
                                <router-link to="#dashboardmenu" data-toggle="collapse" class="waves-effect" v-if="user.roleid==1">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Feedback</span>
                                </router-link>




                            <li class="menu-title" key="t-menu">Teacher Menu</li>
                            <li>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Submit Curricula</span>
                                </router-link>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Attendance</span>
                                </router-link>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Upload Notes</span>
                                </router-link>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Assignment</span>
                                </router-link>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Manage Class Room</span>
                                </router-link>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Manage Subject Students</span>
                                </router-link>
                            </li>

                            <li class="menu-title" key="t-menu">Student Menu</li>
                            <li>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Veiw Time Table</span>
                                </router-link>

                            </li>

                            <li class="menu-title" key="t-menu">Parent Menu</li>
                            <li>
                                <router-link to="#" class="waves-effect" v-if="this.user.roleid == 1  || this.user.roleid == 2">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">View Child Result</span>
                                </router-link>

                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            user:null,
            priviledges:null,
            schoolProfile:null,
            userprofile:null,
            username:''
        }
    },

    methods: {
        getuserdata(){
            axios.get('api/user').then((result) => {
                this.user = result.data
                this.username = result.data['username']
            }).catch((err) => {

            });
        },
        logout(){
            axios.post('api/logout').then((result) => {
                this.$router.push({name: 'login'})
            }).catch((err) => {

            });
        }
    },
    mounted() {
        //   this.getuserdata()
    },
    created() {
        this.getuserdata()
    },
}
</script>
