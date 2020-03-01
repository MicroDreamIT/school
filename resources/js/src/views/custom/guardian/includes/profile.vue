<template>
    <div>
        <div class="row mx-0">
            <div class="col-md-12 justify-content-center flex-column">
                <div>Edu MIS</div>
                <div>Earth,12333</div>
                <div>Registration Details</div>
            </div>
            <vs-divider/>
            <div class="col-md-12">
                <vs-button class="smBtn">Edit</vs-button>
                <vs-button class="smBtn">Print</vs-button>
            </div>
            <div class="col-md-3">
                <vs-image key="profile photo" :src="`https://picsum.photos/400/400?image=2`"/>
            </div>
            <div class="col-md-9">
                <div>VIEVEK SINGH SHARMA</div>
                <div class="row">
                    <div class="col-md-2">Faculty</div>
                    <div class="col-md-4">BTECH</div>
                    <div class="col-md-2">Semester</div>
                    <div class="col-md-4">3</div>
                </div>
            </div>
            <div>Permanent Address</div>


        </div>

    </div>
</template>

<script>
    export default {
        name: "profile"
    }
</script>

<style scoped>

</style>
