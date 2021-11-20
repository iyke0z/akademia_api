<template>
    <div>
         <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                {{ this.fullYear }} © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Next-itservices
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fullYear:null
        }
    },

    methods: {
        getFullYear(){
            this.fullYear =  new Date().getFullYear();
        }
    },

    created() {
        this.getFullYear()
    },
}
</script>

