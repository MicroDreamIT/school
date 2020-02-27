export default [
    {
        icon: "HomeIcon",
        i18n: "Dashboard",
        url: "/",
        slug:'dashboard'
    },
    {
        url: null,
        name: "Student And Stuff",
        icon: "HomeIcon",
        submenu: [
            {
              url:null,
              name:'Student',
              submenu:[
                {
                  url: '/student',
                  name: "Student Detail",
                  slug: "Student Detail",
                },
                {
                  url: '/student/registration',
                  name: "Student Registration",
                  slug: "Student registration",
                },
                {
                  url: '/student/import',
                  name: "Bulk Import",
                  slug: "Bulk Import",
                },
                {
                  url: '/student/transfer',
                  name: "Transfer Student",
                  slug: "Transfer Student",
                },
                {
                  url: '/student/document',
                  name: "Document Upload",
                  slug: "Document Upload",
                },
                {
                  url: '/student/note',
                  name: "Create Notes",
                  slug: "Create Notes",
                },
              ]
            },
            {
                url:null,
                name:'Guardian',
                submenu:[
                    {
                        url: '/guardian/details',
                        name: "Guardian Detail",
                        slug: "Guardian Detail",
                    },
                    {
                        url: '/guardian/registration',
                        name: "Registration",
                        slug: "Registration",
                    },

                ]
            },
            {
                url:null,
                name:'Staff',
                submenu:[
                    {
                        url: '/',
                        name: "Staff Detail",
                        slug: "Staff Detail",
                    },
                    {
                        url: '/',
                        name: "Bulk Import",
                        slug: "Bulk Import",
                    },
                    {
                        url: '/',
                        name: "Document Upload",
                        slug: "Document Upload",
                    },
                    {
                        url: '/',
                        name: "Create Notes",
                        slug: "Create Notes",
                    },
                    {
                        url: '/',
                        name: "Designation",
                        slug: "Designation",
                    },

                ]
            }
        ]
    },

    {
        url: null,
        name: "Account",
        icon: "HomeIcon",
        submenu: [
            {
                url:null,
                name:'Fees Collection',
                submenu:[
                    {
                        url: '/',
                        name: "Receive Detail",
                        slug: "Receive Detail",
                    },
                    {
                        url: '/',
                        name: "Quick Receive",
                        slug: "Quick Receive",
                    },
                    {
                        url: '/',
                        name: "Collect Fees",
                        slug: "Collect Fees",
                    },
                    {
                        url: '/',
                        name: "Balance Fees Report",
                        slug: "Balance Fees Report",
                    },
                    {
                        url: '/',
                        name: "AddFees",
                        slug: "Add Fees",
                    },
                    {
                        url: '/',
                        name: "Fees Head",
                        slug: "Fees Head",
                    },
                ]
            },
            {
                url:null,
                name:'Pay Roll',
                submenu:[
                    {
                        url: '/',
                        name: "Paid Detail",
                        slug: "Paid Detail",
                    },
                    {
                        url: '/',
                        name: "Salary Pay",
                        slug: "Salary pay",
                    },
                    {
                        url: '/',
                        name: "Add Payroll",
                        slug: "Add Payroll",
                    },
                    {
                        url: '/',
                        name: "Balance Salary Report",
                        slug: "Balance Salary Report",
                    },
                    {
                        url: '/',
                        name: "Salary Head",
                        slug: "Salary Head",
                    },

                ]
            },
            {
                url:null,
                name:'Ledger And Transaction',
                submenu:[
                    {
                        url: '/',
                        name: "Transaction",
                        slug: "Transaction",
                    },
                    {
                        url: '/',
                        name: "Ledger",
                        slug: "Ledger",
                    },

                ]
            },
            {
                url:null,
                name:'Bank',
                submenu:[
                    {
                        url: '/',
                        name: "Manage Bank Account",
                        slug: "Manage Bank Account",
                    },
                    {
                        url: '/',
                        name: "Add New Bank",
                        slug: "Add New Bank",
                    },
                    {
                        url: '/',
                        name: "Transaction Detail",
                        slug: "Transaction Detail",
                    },
                    {
                        url: '/',
                        name: "New Transaction",
                        slug: "New Transaction",
                    },
                ]
            },
            {
                url:null,
                name:'Report',
                submenu:[
                    {
                        url: '/',
                        name: "Cash Book",
                        slug: "Cash Book",
                    },
                    {
                        url: '/',
                        name: "Free Collection Head",
                        slug: "Free Collection Head",
                    },
                ]
            },
        ]
    },

    // urls for library
    {
        url: null,
        name: "Library",
        icon: "HomeIcon",
        submenu: [
            {
                url:null,
                name:'Books',
                submenu:[
                    {
                        url: '/',
                        name: "Receive Detail",
                        slug: "Receive Detail",
                    },
                ]
            },
            {
                url:null,
                name:'Pay Roll',
                submenu:[
                    {
                        url: '/',
                        name: "Paid Detail",
                        slug: "Paid Detail",
                    },
                ]
            },
            {
                url:null,
                name:'Ledger And Transaction',
                submenu:[
                    {
                        url: '/',
                        name: "Transaction",
                        slug: "Transaction",
                    },
                    {
                        url: '/',
                        name: "Ledger",
                        slug: "Ledger",
                    },

                ]
            },
            {
                url:null,
                name:'Bank',
                submenu:[
                    {
                        url: '/',
                        name: "Manage Bank Account",
                        slug: "Manage Bank Account",
                    },
                    {
                        url: '/',
                        name: "Add New Bank",
                        slug: "Add New Bank",
                    },
                    {
                        url: '/',
                        name: "Transaction Detail",
                        slug: "Transaction Detail",
                    },
                    {
                        url: '/',
                        name: "New Transaction",
                        slug: "New Transaction",
                    },
                ]
            },
            {
                url:null,
                name:'Report',
                submenu:[
                    {
                        url: '/',
                        name: "Cash Book",
                        slug: "Cash Book",
                    },
                    {
                        url: '/',
                        name: "Free Collection Head",
                        slug: "Free Collection Head",
                    },
                ]
            },
        ]
    },

]

