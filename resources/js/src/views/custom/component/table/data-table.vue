<template>
    <div class="custom-table">
        <vs-table
                :sst="true"
                @search="handleSearch"
                @change-page="handleChangePage"
                @sort="handleSort"
                v-model="selected"
                :total="totalItems"
                :pagination="hasPagination"
                :multiple="hasMultiple"
                max-items="3"
                :search="hasSearch"
                :data="data">

            <template slot="thead">
                <vs-th>SN.No.</vs-th>
                <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                    {{thead.name}}
                </vs-th>
            </template>
            <template slot-scope="{data}">
                <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data" v-if="data.length>0">
                     <vs-td class="pointer-none">
                                                {{idx+1}}
                     </vs-td>
                    <slot name="items" v-bind:data="tr">
                    </slot>
                </vs-tr>
                <vs-tr v-else>
                    {{noDataMessage}}
                </vs-tr>
            </template>

        </vs-table>
    </div>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                default: () => ''
            },
            headers: {
                type: Array,
                default: () => []
            },
            noDataMessage: {
                type: String,
                default: () => 'No Data Found'
            },
            hasSearch: {
                type: Boolean,
                default: () => true
            },
            hasPagination:{
                type: Boolean,
                default: () => false
            },
            hasMultiple:{
                type: Boolean,
                default: () => false
            }
        },

        data() {
            return {
                selected: [],
                totalItems: 10,
                data: [
                //     {
                //         "id": 1,
                //         "name": "Leanne Graham",
                //         "username": "Bret",
                //         "email": "Sincere@april.biz",
                //         "website": "hildegard.org",
                //     },
                //     {
                //         "id": 2,
                //         "name": "Ervin Howell",
                //         "username": "Antonette",
                //         "email": "Shanna@melissa.tv",
                //         "website": "anastasia.net",
                //     },
                //     {
                //         "id": 3,
                //         "name": "Clementine Bauch",
                //         "username": "Samantha",
                //         "email": "Nathan@yesenia.net",
                //         "website": "ramiro.info",
                //     },
                //     {
                //         "id": 4,
                //         "name": "Patricia Lebsack",
                //         "username": "Karianne",
                //         "email": "Julianne.OConner@kory.org",
                //         "website": "kale.biz",
                //     },
                //     {
                //         "id": 5,
                //         "name": "Chelsey Dietrich",
                //         "username": "Kamren",
                //         "email": "Lucio_Hettinger@annie.ca",
                //         "website": "demarco.info",
                //     },
                //     {
                //         "id": 6,
                //         "name": "Mrs. Dennis Schulist",
                //         "username": "Leopoldo_Corkery",
                //         "email": "Karley_Dach@jasper.info",
                //         "website": "ola.org",
                //     },
                //     {
                //         "id": 7,
                //         "name": "Kurtis Weissnat",
                //         "username": "Elwyn.Skiles",
                //         "email": "Telly.Hoeger@billy.biz",
                //         "website": "elvis.io",
                //     },
                //     {
                //         "id": 8,
                //         "name": "Nicholas Runolfsdottir V",
                //         "username": "Maxime_Nienow",
                //         "email": "Sherwood@rosamond.me",
                //         "website": "jacynthe.com",
                //     },
                //     {
                //         "id": 9,
                //         "name": "Glenna Reichert",
                //         "username": "Delphine",
                //         "email": "Chaim_McDermott@dana.io",
                //         "website": "conrad.com",
                //     },
                //     {
                //         "id": 10,
                //         "name": "Clementina DuBuque",
                //         "username": "Moriah.Stanton",
                //         "email": "Rey.Padberg@karina.biz",
                //         "website": "ambrose.net",
                //     }
                ],

            }
        },

        methods: {
            getData() {
                this.items = this.data
            },
            handleSearch(searching) {
                console.log(searching)
            },
            handleChangePage(page) {
                console.log(page)
            },
            handleSort(key, active) {
                console.log(key, active)
            }
        }
    }
</script>
