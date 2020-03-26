<template>
    <div class="custom-table">
        <div class="row p-4">
            <div class="col-md-8 ">
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
                        v-model="selected"
                        :pagination="hasPagination"
                        :multiple="hasMultiple"
                        :max-items="maxItem"
                        :search="hasSearch"
                        :data="mainItem"
                        :noDataText="noDataMessage"
                        description
                        description-title="Showing"
                >

                    <template slot="thead">
                        <vs-th>S.N.</vs-th>
                        <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                            {{thead.name}}
                        </vs-th>
                    </template>
                    <template slot-scope="{data}">
                        <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                            <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                            <slot name="items" v-bind:data="tr">
                            </slot>
                        </vs-tr>
                    </template>

                </vs-table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                default: () => ''
            },
            filterSection: {
                type: Boolean,
                default: () => false
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
            },
            transferSection: {
                type: Boolean,
                default: () => false
            }
        },

        data() {
            return {

                selected: [],
                maxItem: 10,
                searchData: {},
                item: [],
                designation: [],
                mainItem: [],
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url, {params: this.searchData}).then(res => {
                    this.item = res.data.room_type;
                    this.doSerialize()
                });

            },
            doFilter() {
                this.getData()
            },

            doActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/hostel/room-type/bulk-action', {
                        bulk_action: 'active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$vs.notify({
                                title: 'success',
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$root.notification.status = 'error'
                    this.$root.notification.message = 'select at least one'
                }

            },
            doInActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/hostel/room-type/bulk-action', {
                        bulk_action: 'in-active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$vs.notify({
                                title: 'error',
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })

                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$root.notification.status = 'error'
                    this.$root.notification.message = 'select at least one'
                }
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
            },
            doSerialize() {
                this.mainItem = this.item.map(st => {
                    return {
                        id: st.id,
                        title: st.title,
                        status: st.status,
                    }
                })
            },


        }
    }
</script>
