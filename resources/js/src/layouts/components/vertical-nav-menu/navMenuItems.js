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
                        url: '/guardian',
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
                        url: '/staff',
                        name: "Staff Detail",
                        slug: "Staff Detail",
                    },
                    {
                        url: '/staff/import',
                        name: "Bulk Import",
                        slug: "Bulk Import",
                    },
                    {
                        url: '/staff/document',
                        name: "Document Upload",
                        slug: "Document Upload",
                    },
                    {
                        url: '/staff/note',
                        name: "Create Notes",
                        slug: "Create Notes",
                    },
                    {
                        url: '/staff/designation',
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
                        url: '/account/fees',
                        name: "Receive Detail",
                        slug: "Receive Detail",
                    },
                    {
                        url: '/account/fees/quick-receive',
                        name: "Quick Receive",
                        slug: "Quick Receive",
                    },
                    {
                        url: '/account/fees/collection',
                        name: "Collect Fees",
                        slug: "Collect Fees",
                    },
                    {
                        url: '/account/fees/balance',
                        name: "Balance Fees Report",
                        slug: "Balance Fees Report",
                    },
                    {
                        url: '/account/fees/master/add',
                        name: "AddFees",
                        slug: "Add Fees",
                    },
                    {
                        url: '/account/fees/head',
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
                        url: '/payroll',
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
    {
        url: null,
        name: "Academics",
        icon: "HomeIcon",
        submenu: [
            {
                url:null,
                name:'Academic Level',
                submenu:[
                    {
                        url: '/faculty',
                        name: "Faculty",
                        slug: "Faculty",
                    },
                    {
                        url: '/semester',
                        name: "Semester",
                        slug: "Semester",
                    },
                    {
                        url: '/student-batch',
                        name: "Student Batch",
                        slug: "Student Batch",
                    },
                ]
            },
            {
                url:null,
                name:'Grading',
                submenu:[
                    {
                        url: '/grading',
                        name: "Grading",
                        slug: "Grading",
                    },
                    {
                        url: '/subject',
                        name: "Subject",
                        slug: "Subject",
                    },
                ]
            },
            {
                url:null,
                name:'Status',
                submenu:[
                    {
                        url: '/student-status',
                        name: "Student Status",
                        slug: "Student Status",
                    },
                    {
                        url: '/attendance-status',
                        name: "Attendance Status",
                        slug: "Attendance Status",
                    },
                    {
                        url: '/books-status',
                        name: "Book Status",
                        slug: "Book Status",
                    },
                    {
                        url: '/bed-status',
                        name: "Bed Status",
                        slug: "Bed Status",
                    },
                ]
            },
            {
                url:null,
                name:'Date & Time',
                submenu:[
                    {
                        url: '/year',
                        name: "Year",
                        slug: "Year",
                    },
                    {
                        url: '/month',
                        name: "Month",
                        slug: "Month",
                    },
                    {
                        url: '/day',
                        name: "Day",
                        slug: "Day",
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
            {
                url:null,
                name:'More',
                submenu:[
                    {
                        url: '/assignment',
                        name: "Assignment",
                        slug: "Assignment",
                    },
                    {
                        url: '/download',
                        name: "Upload & Download",
                        slug: "Upload & Download",
                    },
                ]
            },
            {
                icon: "HomeIcon",
                i18n: "Payment Method",
                url: "/payment-method",
                slug:'payment-method'
            },
        ]
    },

]

