<template>
    <div>
        <nav-bar/>
              <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Priviledge</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mb-5">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Default input</label>
                                                <input class="form-control" type="text" placeholder="..." v-model="priviledge.name">
                                                <button class="btn btn-success mt-1 col-4" @click.prevent=addPriviledge>Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Priviledges Datatable</h4>
                                        <p class="card-title-desc">Listed Below are all the priviledges based on functions that can be performed on this application
                                        </p>

                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Priviledge</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="item in priviledges" :key="item.id">
                                                <td>{{item.priviledge}}</td>
                                                <td>
                                                    <button class="btn btn-danger" @click.prevent=deletePriviledge(item.id)>
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
         </div>
        <footer-bar/>
    </div>
</template>

<script>
import FooterBar from '../Footer.vue'
import NavBar from '../NavBar.vue'
import { EventBus } from '../../app'
export default {
    components: {FooterBar, NavBar},
    data() {
        return {
                priviledge:{name:null},
                priviledges:{}
            }
    },

    methods: {
        getPriviledges(){
            axios.get('api/all-priviledges').then((result) => {
                this.priviledges = result.data
            }).catch((err) => {

            });
        },
        addPriviledge(){
            var priviledge = this.priviledge
            axios.post('api/priviledge', priviledge).then((result) => {
                EventBus.$emit('privCrud')
                this.priviledge.name = null
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Priviledge Added',
                    customClass: 'swal-wide',
                    showConfirmButton: false,
                    timer: 3000
                })
            }).catch((err) => {

            });
        },
        
        deletePriviledge(id){
            axios.delete('api/delete-priviledge/'+id).then((result) => {
                EventBus.$emit('privCrud')
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Priviledge Deleted',
                    customClass: 'swal-wide',
                    showConfirmButton: false,
                    timer: 3000
                })
            }).catch((err) => {
                
            });
        }
    },

    created() {
        this.getPriviledges()
        EventBus.$on('privCrud', ()=> {
            this.getPriviledges()
        })
    },

}
</script>
