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
            <a class="btn-danger btn-sm bulk-action-btn m-1" @click.prevent="allDeletePop=true">
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
                    v-print="'owTableMain'"
            >
                <span>Print</span>
            </button>
        </div>
        <vs-table
                :multiple=hasMultiple
                v-model="selected"
                :total="totalItems"
                :pagination="hasPagination"
                :max-items="10"
                :search="hasSearch"
                :data="mainItem"
                :noDataText="noDataMessage"
                description
                stripe
        >
            <template slot="thead">
                <vs-th :sort-key="'id'">SN.No.</vs-th>
                <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                    {{thead.name}}
                </vs-th>
            </template>
            <template slot-scope="{data}">
                <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                    <vs-td class="pointer-none">
                        {{mainItem.indexOf(tr)+1}}
                    </vs-td>
                    <slot name="items" v-bind:data="tr">
                    </slot>
                </vs-tr>
            </template>
        </vs-table>
        <div class="" ref="owTable">
            <div id="owTableMain">
               <h4 style="text-align: center">{{tableHeader}} | Edu MIS</h4>
                <table id="ow-table" ref="owTableMain">
                    <slot name="printSection" :data="mainItem"></slot>
                </table>
            </div>
        </div>
        <vs-popup class="holamundo"
                  :title="'Delete Confirmation'"
                  :active.sync="allDeletePop">
            <div class="mt-3">
                <p class="p-2 my-round delete-pop-text">Are you sure, You Want To delete Using Bulk Action?
                    Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data</p>

                <p><i class="p-2 ace-icon fa fa-hand-o-right"></i>Are you sure?</p>
            </div>

            <div class="footer-modal">
                <vs-button class="smBtn"
                           @click="allDeletePop=false">
                    <i class="fa fa-close"></i>
                    Cancel
                </vs-button>
                <vs-button class="smBtn" color="danger" @click="allDeletePop=false, doDelete()">
                    <i class="fa fa-trash"></i>
                    Ok!
                </vs-button>
            </div>
        </vs-popup>
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
            },
            mainItem: {
                type: Array,
                default: () => []
            },
            getData: {
                type: Function,
                default: () => function () {
                }
            }
        },

        data() {
            return {
                selected: [],
                totalItems: 10,
                allDeletePop: false,
            }
        },

        methods: {

            doActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/faculty/bulk-action', {
                        bulk_action: 'active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            console.log(err)
                        })
                } else {
                    this.$root.notification.status = 'danger';
                    this.$root.notification.message = 'Please, Check at least one row.'
                }

            },
            doInActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/faculty/bulk-action', {
                        bulk_action: 'in-active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            console.log(err)
                        })
                } else {
                    this.$root.notification.status = 'danger';
                    this.$root.notification.message = 'Please, Check at least one row.'
                }
            },
            doCopy() {
                this.$copyText(this.$refs.owTable.innerText).then(() => {
                    this.$vs.notify({
                        title: 'Copy to Clipboard ',
                        text: 'Copy ' + this.mainItem.length + ' rows to clipboard',
                        color: 'success',
                        position: 'top-right'
                    })
                }, () => {
                    this.$vs.notify({
                        title: 'Copy to Clipboard ',
                        text: 'Copy unsuccessfull',
                        color: 'danger',
                        position: 'top-right'
                    })
                })

            },
            doPdf() {
                var doc = this.$root.doc;
                doc.setFontSize(18)
                doc.text(this.tableHeader, 14, 22)
                doc.setFontSize(11)
                doc.setTextColor(100)

                doc.autoTable({
                    html: '#ow-table',
                    startY: 30,
                    showHead: 'firstPage',
                })
                doc.save(this.tableHeader + '.pdf');
            },
            doJson() {
                this.$root.saveAsJson(this.$refs.owTableMain)
            },
            doDelete() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/faculty/bulk-action', {
                        bulk_action: 'delete',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            console.log(err)
                        })
                } else {
                    this.$root.notification.status = 'danger';
                    this.$root.notification.message = 'Please, Check at least one row.'
                }
            },

        }
    }
</script>


<style lang="scss">
    #ow-table{
        width: 100%;
        margin: 16px 0;
        thead{
            tr{
                th{
                    background:#e8e8e8;
                    padding:10px;
                }
            }
        }
        tbody{
            tr{
                &:nth-child(even){
                    background:#f8f8f8;
                }
                td{
                  padding:10px;
                 }
                 border-bottom: 1px solid #d3d3d34d;
            }
      }
    }
</style>
