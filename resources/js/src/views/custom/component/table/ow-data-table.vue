<template>
    <div class="custom-table">
        <h4 class="header large lighter blue">
            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
            {{tableHeader}}
        </h4>
        <div class="easy-link-menu d-flex flex-wrap" v-if="actionBtn">
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doActive">
                        <i class="fa fa-check"></i>
                        Active
                    </a>
                    <a class="btn-warning btn-sm bulk-action-btn m-1" @click.prevent="doInActive">
                        <i class="fa fa-remove"></i>
                        In-Active
                    </a>
                    <a class="btn-danger btn-sm bulk-action-btn m-1" @click.prevent="doDelete">
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
                :data="mainItem"
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
                items: [],
                mainItem:[]

            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data;
                    this.mainItem=this.items
                    console.log(this.mainItem)
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
