<template>
    <div class="customTable">
        <vs-table
                multiple
                v-model="selected"
                search
                :data="users">
            <template slot="thead">
                <vs-th sort-key="index">
                    SN. NO.
                </vs-th>
                <vs-th :sort-key="col.sort_key?col.sort_key:''" v-for="(col,i) in columns" :key="i">
                    {{col.name}}
                </vs-th>
            </template>

            <template slot-scope="{data}">
                <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                    <vs-td>
                        {{idx+1}}
                    </vs-td>

                    <vs-td v-for="(col,indx) in columns" :key="indx">
                        <span v-if="col.field">{{data[idx][col.field]}}</span>
                    </vs-td>
                </vs-tr>

            </template>

        </vs-table>
        <vs-pagination :total="1" v-model="currentPage" class="my-3"></vs-pagination>
    </div>
</template>

<script>
    export default {
        name: "student-table",
        props: {
            searchData: {
                type: Object,
                default: () => {}
            },
            columns: {
                type: Array,
                default: () => []
            },
            url: {
                type: String,
                default: () => ''
            },

        },
        data() {
            return {
                users: [
                    {
                        "id": 1,
                        "name": "Leanne Graham",
                        "username": "Bret",
                        "email": "Sincere@april.biz",
                        "website": "hildegard.org",
                    },
                    {
                        "id": 2,
                        "name": "Ervin Howell",
                        "username": "Antonette",
                        "email": "Shanna@melissa.tv",
                        "website": "anastasia.net",
                    },
                    {
                        "id": 3,
                        "name": "Clementine Bauch",
                        "username": "Samantha",
                        "email": "Nathan@yesenia.net",
                        "website": "ramiro.info",
                    },
                    {
                        "id": 4,
                        "name": "Patricia Lebsack",
                        "username": "Karianne",
                        "email": "Julianne.OConner@kory.org",
                        "website": "kale.biz",
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
                header:[],
                columnName:[],
                currentPage:1,
                selected: []
            }

        }
    }
</script>

