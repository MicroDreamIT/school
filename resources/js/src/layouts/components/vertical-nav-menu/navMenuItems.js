export default [
    {
        icon: "HomeIcon",
        i18n: "Dashboard",
        items: [
            {
                url: "/apps/email",
                name: "email",
                slug: "email",
                icon: "MailIcon",
                i18n: "Email",
            },
            {
                url: "/apps/chat",
                name: "chat",
                slug: "chat",
                icon: "MessageSquareIcon",
                i18n: "Chat",
            },
            {
                url: "/apps/todo",
                name: "todo",
                slug: "todo",
                icon: "CheckSquareIcon",
                i18n: "Todo",
            },
            {
                url: "/apps/calendar/vue-simple-calendar",
                name: "calendar",
                slug: "calendar-simple-calendar",
                icon: "CalendarIcon",
                tagColor: "success",
                i18n: "Calendar",
            },
            {
                url: null,
                name: "eCommerce",
                icon: "ShoppingCartIcon",
                i18n: "eCommerce",
                submenu: [
                    {
                        url: '/apps/eCommerce/shop',
                        name: "shop",
                        slug: "ecommerce-shop",
                        i18n: "Shop",
                    },
                    {
                        url: '/apps/eCommerce/item/',
                        name: "itemDetails",
                        slug: "ecommerce-item-detail-view",
                        i18n: "ItemDetails",
                    },
                    {
                        url: '/apps/eCommerce/wish-list',
                        name: "wishList",
                        slug: "ecommerce-wish-list",
                        i18n: "WishList",
                    },
                    {
                        url: '/apps/eCommerce/checkout',
                        name: "checkout",
                        slug: "ecommerce-checkout",
                        i18n: "Checkout",
                    },
                ]
            },
            {
                url: null,
                name: "User",
                icon: "UserIcon",
                i18n: "User",
                submenu: [
                    {
                        url: '/apps/user/user-list',
                        name: "list",
                        slug: "app-user-list",
                        i18n: "List",
                    },
                    {
                        url: '/apps/user/user-view/268',
                        name: "view",
                        slug: "app-user-view",
                        i18n: "View",
                    },
                    {
                        url: '/apps/user/user-edit/268',
                        name: "edit",
                        slug: "app-user-edit",
                        i18n: "Edit",
                    },
                ]
            },
        ]
    },
    {
        url: null,
        name: "studentAndStuff",
        icon: "HomeIcon",
        submenu: [
            {
              url:null,
              name:'student',
              submenu:[
                {
                  url: '/student',
                  name: "studentDetail",
                  slug: "Student Detail",
                },
                {
                  url: '/student',
                  name: "bulkImport",
                  slug: "Bulk Import",
                },
                {
                  url: '/student',
                  name: "registration",
                  slug: "Registration",
                },
                {
                  url: '/student',
                  name: "transferStudent",
                  slug: "Transfer Student",
                },
                {
                  url: '/student',
                  name: "documentUpload",
                  slug: "Document Upload",
                },
                {
                  url: '/student',
                  name: "createNotes",
                  slug: "Create Notes",
                },
              ]
            },
            {
                url:null,
                name:'Guardian',
                submenu:[
                    {
                        url: '/',
                        name: "guardianDetail",
                        slug: "Guardian Detail",
                    },
                    {
                        url: '/',
                        name: "registration",
                        slug: "Registration",
                    },

                ]
            },
            {
                url:null,
                name:'staff',
                submenu:[
                    {
                        url: '/',
                        name: "staffDetail",
                        slug: "Staff Detail",
                    },
                    {
                        url: '/',
                        name: "bulkImport",
                        slug: "Bulk Import",
                    },
                    {
                        url: '/',
                        name: "documentUpload",
                        slug: "Document Upload",
                    },
                    {
                        url: '/',
                        name: "createNotes",
                        slug: "Create Notes",
                    },
                    {
                        url: '/',
                        name: "designation",
                        slug: "Designation",
                    },

                ]
            }
        ]
    },

    {
        url: null,
        name: "account",
        icon: "HomeIcon",
        submenu: [
            {
                url:null,
                name:'feesCollection',
                submenu:[
                    {
                        url: '/',
                        name: "receiveDetail",
                        slug: "Receive Detail",
                    },
                    {
                        url: '/',
                        name: "quickReceive",
                        slug: "Quick Receive",
                    },
                    {
                        url: '/',
                        name: "collectFees",
                        slug: "Collect Fees",
                    },
                    {
                        url: '/',
                        name: "balanceFeesReport",
                        slug: "Balance Fees Report",
                    },
                    {
                        url: '/',
                        name: "addFees",
                        slug: "Add Fees",
                    },
                    {
                        url: '/',
                        name: "feesHead",
                        slug: "Fees Head",
                    },
                ]
            },
            {
                url:null,
                name:'payroll',
                submenu:[
                    {
                        url: '/',
                        name: "paidDetail",
                        slug: "Paid Detail",
                    },
                    {
                        url: '/',
                        name: "salary pay",
                        slug: "Salary pay",
                    },
                    {
                        url: '/',
                        name: "addPayroll",
                        slug: "Add Payroll",
                    },
                    {
                        url: '/',
                        name: "balanceSalaryReport",
                        slug: "Balance Salary Report",
                    },
                    {
                        url: '/',
                        name: "salaryHead",
                        slug: "Salary Head",
                    },

                ]
            },
            {
                url:null,
                name:'ledgerAndTransaction',
                submenu:[
                    {
                        url: '/',
                        name: "transaction",
                        slug: "Transaction",
                    },
                    {
                        url: '/',
                        name: "ledger",
                        slug: "Ledger",
                    },

                ]
            },
            {
                url:null,
                name:'bank',
                submenu:[
                    {
                        url: '/',
                        name: "manageBankAccount",
                        slug: "Manage Bank Account",
                    },
                    {
                        url: '/',
                        name: "addNewBank",
                        slug: "Add New Bank",
                    },
                    {
                        url: '/',
                        name: "transactionDetail",
                        slug: "Transaction Detail",
                    },
                    {
                        url: '/',
                        name: "newTransaction",
                        slug: "New Transaction",
                    },
                ]
            },
            {
                url:null,
                name:'report',
                submenu:[
                    {
                        url: '/',
                        name: "cashBook",
                        slug: "Cash Book",
                    },
                    {
                        url: '/',
                        name: "freeCollectionHead",
                        slug: "Free Collection Head",
                    },
                ]
            },
        ]
    },

    // urls for library
    {
        url: null,
        name: "library",
        icon: "HomeIcon",
        submenu: [
            {
                url:null,
                name:'books',
                submenu:[
                    {
                        url: '/',
                        name: "receiveDetail",
                        slug: "Receive Detail",
                    },
                ]
            },
            {
                url:null,
                name:'payroll',
                submenu:[
                    {
                        url: '/',
                        name: "paidDetail",
                        slug: "Paid Detail",
                    },
                ]
            },
            {
                url:null,
                name:'ledgerAndTransaction',
                submenu:[
                    {
                        url: '/',
                        name: "transaction",
                        slug: "Transaction",
                    },
                    {
                        url: '/',
                        name: "ledger",
                        slug: "Ledger",
                    },

                ]
            },
            {
                url:null,
                name:'bank',
                submenu:[
                    {
                        url: '/',
                        name: "manageBankAccount",
                        slug: "Manage Bank Account",
                    },
                    {
                        url: '/',
                        name: "addNewBank",
                        slug: "Add New Bank",
                    },
                    {
                        url: '/',
                        name: "transactionDetail",
                        slug: "Transaction Detail",
                    },
                    {
                        url: '/',
                        name: "newTransaction",
                        slug: "New Transaction",
                    },
                ]
            },
            {
                url:null,
                name:'report',
                submenu:[
                    {
                        url: '/',
                        name: "cashBook",
                        slug: "Cash Book",
                    },
                    {
                        url: '/',
                        name: "freeCollectionHead",
                        slug: "Free Collection Head",
                    },
                ]
            },
        ]
    },

]

