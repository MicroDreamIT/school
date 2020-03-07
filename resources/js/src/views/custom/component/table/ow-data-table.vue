<template>
    <div class="custom-table">
        <h4 class="header large lighter blue">
            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
            {{tableHeader}}
        </h4>
        <div class="clearfix mt-3"></div>
        <div class="easy-link-menu" v-if="actionBtn">
            <a class="btn-success btn-sm bulk-action-btn  mr-1" @click.prevent="doActive">
                <i class="fa fa-check"></i>
                Active
            </a>
            <a class="btn-warning btn-sm bulk-action-btn mr-1" @click.prevent="doInActive">
                <i class="fa fa-remove"></i>
                In-Active
            </a>
            <a class="btn-danger btn-sm bulk-action-btn mr-1" @click.prevent="doDelete">
                <i class="fa fa-trash"></i>
                Delete
            </a>
        </div>
        <br>
        <div class="table-header" v-if="headerSuggestion">
            {{suggestText}}
        </div>
        <div class="dt-buttons btn-group action-group mt-3" v-if="printSection">
            <button class="btn btn-secondary buttons-copy buttons-html5"

                    @click.prevent="doCopy"
            >
                <span>Copy</span>
            </button>
            <button class="btn btn-secondary buttons-pdf buttons-html5"
                    @click.prevent="doPdf"
            >
                <span>PDF</span>
            </button>
            <button class="btn btn-secondary"
                    @click.prevent="doJson"
            >
                <span>JSON</span>
            </button>
            <button class="btn btn-secondary buttons-print"
                    @click.prevent="doPrint"
            >
                <span>Print</span>
            </button>
        </div>
        <vs-table
                :multiple=hasMultiple
                v-model="selected"
                :total="totalItems"
                :pagination="hasPagination"
                :max-items="5"
                :search="hasSearch"
                :data="items"
                :noDataText="noDataMessage"
                description
        >

            <template slot="thead">
                <vs-th>SN.No.</vs-th>
                <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                    {{thead.name}}
                </vs-th>
            </template>
            <template slot-scope="{data}">
                <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                    <vs-td class="pointer-none">
                        {{idx+1}}
                    </vs-td>
                    <slot name="items" v-bind:data="tr">
                    </slot>
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
            tableHeader: {
                type: String,
                default: () => 'Data List'
            },
            actionBtn: {
                type: Boolean,
                default: () => true
            },
            headerSuggestion: {
                type: Boolean,
                default: () => true
            },
            printSection: {
                type: Boolean,
                default: () => true
            },
            suggestText: {
                type: String,
                default: () => 'Data Record list on table. Filter Data using the filter.'
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
            hasPagination: {
                type: Boolean,
                default: () => false
            },
            hasMultiple: {
                type: Boolean,
                default: () => false
            }
        },

        data() {
            return {
                selected: [],
                totalItems: 10,
                itemData: [
                    {
                        "id": 1,
                        "name": "Leanne Graham",
                        "username": "Bret",
                        "email": "Sincere@april.biz",
                        "website": "hildegard.org",
                        'status': 'Active'
                    },
                    {
                        "id": 2,
                        "name": "Ervin Howell",
                        "username": "Antonette",
                        "email": "Shanna@melissa.tv",
                        "website": "anastasia.net",
                        'status': 'Active'
                    },
                    {
                        "id": 3,
                        "name": "Clementine Bauch",
                        "username": "Samantha",
                        "email": "Nathan@yesenia.net",
                        "website": "ramiro.info",
                        'status': 'In-Active'
                    },
                    {
                        "id": 4,
                        "name": "Patricia Lebsack",
                        "username": "Karianne",
                        "email": "Julianne.OConner@kory.org",
                        "website": "kale.biz",
                        'status': 'In-Active'
                    },
                    {
                        "id": 5,
                        "name": "Chelsey Dietrich",
                        "username": "Kamren",
                        "email": "Lucio_Hettinger@annie.ca",
                        "website": "demarco.info",
                    },
                    {
                        "id": 6,
                        "name": "Mrs. Dennis Schulist",
                        "username": "Leopoldo_Corkery",
                        "email": "Karley_Dach@jasper.info",
                        "website": "ola.org",
                    },
                    {
                        "id": 7,
                        "name": "Kurtis Weissnat",
                        "username": "Elwyn.Skiles",
                        "email": "Telly.Hoeger@billy.biz",
                        "website": "elvis.io",
                    },
                    {
                        "id": 8,
                        "name": "Nicholas Runolfsdottir V",
                        "username": "Maxime_Nienow",
                        "email": "Sherwood@rosamond.me",
                        "website": "jacynthe.com",
                    },
                    {
                        "id": 9,
                        "name": "Glenna Reichert",
                        "username": "Delphine",
                        "email": "Chaim_McDermott@dana.io",
                        "website": "conrad.com",
                    },
                    {
                        "id": 10,
                        "name": "Clementina DuBuque",
                        "username": "Moriah.Stanton",
                        "email": "Rey.Padberg@karina.biz",
                        "website": "ambrose.net",
                    }
                ],
                items: []

            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.item = res.data
                    console.log(this.item)
                })
            },

            doActive() {
                alert('doing active')
            },
            doInActive() {
                alert('doing Inactive')
            },
            doCopy() {
                alert('doing copy')
            },
            doPdf() {
                alert('doing pdf')
            },
            doJson() {
                alert('doing json')
            },
            doPrint() {
                alert('doing print')
            },
            doDelete() {
                alert('doing Delete')
            }


        }
    }
</script>
