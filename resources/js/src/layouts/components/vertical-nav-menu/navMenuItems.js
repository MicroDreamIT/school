export default [
    {
        icon: "HomeIcon",
        i18n: "Dashboard",
        items: [
            {
                url: "/apps/email",
                name: "Email",
                slug: "email",
                icon: "MailIcon",
                i18n: "Email",
            },
            {
                url: "/apps/chat",
                name: "Chat",
                slug: "chat",
                icon: "MessageSquareIcon",
                i18n: "Chat",
            },
            {
                url: "/apps/todo",
                name: "Todo",
                slug: "todo",
                icon: "CheckSquareIcon",
                i18n: "Todo",
            },
            {
                url: "/apps/calendar/vue-simple-calendar",
                name: "Calendar",
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
                        name: "Shop",
                        slug: "ecommerce-shop",
                        i18n: "Shop",
                    },
                    {
                        url: '/apps/eCommerce/item/',
                        name: "Item Details",
                        slug: "ecommerce-item-detail-view",
                        i18n: "ItemDetails",
                    },
                    {
                        url: '/apps/eCommerce/wish-list',
                        name: "Wish List",
                        slug: "ecommerce-wish-list",
                        i18n: "WishList",
                    },
                    {
                        url: '/apps/eCommerce/checkout',
                        name: "Checkout",
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
                        name: "List",
                        slug: "app-user-list",
                        i18n: "List",
                    },
                    {
                        url: '/apps/user/user-view/268',
                        name: "View",
                        slug: "app-user-view",
                        i18n: "View",
                    },
                    {
                        url: '/apps/user/user-edit/268',
                        name: "Edit",
                        slug: "app-user-edit",
                        i18n: "Edit",
                    },
                ]
            },
        ]
    },
    {
        url: null,
        name: "Student & Stuff",
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
                  url: '/student',
                  name: "Bulk Import",
                  slug: "Bulk Import",
                },
                {
                  url: '/student',
                  name: "Registration",
                  slug: "Registration",
                },
                {
                  url: '/student',
                  name: "Transfer Student",
                  slug: "Transfer Student",
                },
                {
                  url: '/student',
                  name: "Document Upload",
                  slug: "Document Upload",
                },
                {
                  url: '/student',
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
                        url: '/',
                        name: "Guardian Detail",
                        slug: "Guardian Detail",
                    },
                    {
                        url: '/',
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
                        name: "Add Fees",
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
                name:'Payroll',
                submenu:[
                    {
                        url: '/',
                        name: "Paid Detail",
                        slug: "Paid Detail",
                    },
                    {
                        url: '/',
                        name: "Salary pay",
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
                name:'Ledger & Transaction',
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
                        name: "manage Bank Account",
                        slug: "manage Bank Account",
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

