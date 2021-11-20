<template>
        <div class="mt-4 mt-md-5 text-center">
                <p class="mb-0">© {{ this.fullYear }} Akademia. Product by Next-It Services</p>
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
