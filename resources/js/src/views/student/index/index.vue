<template>
    <div class="index">
        <vs-row vs-justify="center">
            <vs-card>
                <div slot="header">
                    <h3>
                        Student List
                    </h3>
                </div>
                <div>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                </div>
                <div slot="footer">
                    <vs-row vs-justify="flex-end">
                        <vs-button type="gradient" color="danger" icon="favorite"></vs-button>
                        <vs-button color="primary" icon="turned_in_not"></vs-button>
                        <vs-button color="rgb(230,230,230)" color-text="rgb(50,50,50)" icon="settings"></vs-button>
                    </vs-row>
                </div>
            </vs-card>
        </vs-row>
    </div>
</template>

<script>
    export default {
        data:()=>({
            students:[]
        }),
         created() {
            this.getList()
         },
        methods:{
            getList(){
                this.$http.get('/json/student').then(res=>{

                })
            }
        }
    };
</script>
