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
                :data="items">

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
            hasPagination: {
                type: Boolean,
                default: () => false
            },
            hasMultiple: {
                type: Boolean,
                default: () => false
            },
            items: {
                type: Array,
                default: () => []
            }
        },

        data() {
            return {
                selected: [],
                totalItems: 10,

            }
        },

        methods: {
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
