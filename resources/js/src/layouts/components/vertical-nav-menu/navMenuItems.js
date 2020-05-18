export default [
    {
        icon: "HomeIcon",
        i18n: "Dashboard",
        url: "/",
        slug: 'dashboard'
    },
    {
        url: null,
        name: "Student & Staff",
        icon: "UsersIcon",
        submenu: [
            {
                url: null,
                name: "Student",
                submenu: [

                    {
                        url: "/student",
                        name: "Student Detail",
                        slug: "Student Detail"
                    },
                    {
                        url: "/student/import",
                        name: "Bulk Import",
                        slug: "Student Bulk Import"
                    },
                    {
                        url: "/student/registration",
                        name: "Registration",
                        slug: "Student Registration"
                    },
                    {
                        url: "/student/transfer",
                        name: "Transfer Student",
                        slug: "Transfer Student"
                    },
                    {
                        url: "/student/document",
                        name: "Document Upload",
                        slug: "Document Upload"
                    },
                    {
                        url: "/student/note",
                        name: "Create Notes",
                        slug: "Student Create Notes"
                    }
                ]

            },
            {
                url: null,
                name: "Guardian",
                submenu: [

                    {
                        url: "/guardian",
                        name: "Guardian Detail",
                        slug: "Guardian Detail"
                    },
                    {
                        url: "/guardian/registration",
                        name: "Registration",
                        slug: "Guardian Registration"
                    },

                ]
            },
            {
                url: null,
                name: "Staff",
                submenu: [

                    {
                        url: "/staff",
                        name: "Staff Detail",
                        slug: "Staff Detail"
                    },
                    {
                        url: "/staff/add",
                        name: "Registration",
                        slug: "Staff Registration"
                    },
                    {
                        url: "/staff/import",
                        name: "Bulk Import",
                        slug: "Staff Bulk Import"
                    },
                    {
                        url: "/staff/document",
                        name: "Document Upload",
                        slug: "Staff Document Upload"
                    },
                    {
                        url: "/staff/note",
                        name: "Create Notes",
                        slug: "Staff Create Notes"
                    },
                    {
                        url: "/staff/designation",
                        name: "Designation",
                        slug: "Staff Designation"
                    },

                ]
            }
        ]
    },
    {
        url: null,
        name: "Account",
        icon: "PlusSquareIcon",
        submenu: [
            {
                url: null,
                name: "Fees Collection",
                submenu: [

                    {
                        url: "/account/fees",
                        name: "Receive Detail",
                        slug: "Receive Detail"
                    },
                    {
                        url: "/account/fees/quick-receive",
                        name: "Quick Receive",
                        slug: "Quick Receive"
                    },
                    {
                        url: "/account/fees/collection",
                        name: "Collect Fees",
                        slug: "Collect Fees"
                    },
                    {
                        url: "/account/fees/balance",
                        name: "Balance Fees Report",
                        slug: "Balance Fees Report"
                    },
                    {
                        url: "/account/fees/master/add",
                        name: "Add Fees",
                        slug: "Add Fees"
                    },
                    {
                        url: "/account/fees/head",
                        name: "Fees Head",
                        slug: "Fees Head"
                    },

                ]
            },
            {
                url: null,
                name: "Payroll",
                submenu: [

                    {
                        url: "/account/payroll",
                        name: "Paid Detail",
                        slug: "Paid Detail"
                    },
                    {
                        url: "/account/salary/payment",
                        name: "Salary Pay",
                        slug: "Salary Pay"
                    },
                    {
                        url: "/account/payroll/master/add",
                        name: "Add Payroll",
                        slug: "Add Payroll"
                    },
                    {
                        url: "/account/payroll/balance",
                        name: "Balance Salary Report",
                        slug: "Balance Salary Report"
                    },
                    {
                        url: "/account/payroll/head",
                        name: "Salary Head",
                        slug: "Salary Head"
                    },

                ]
            },
            {
                url: null,
                name: "Ledger & Transaction",
                submenu: [

                    {
                        url: "/account/transaction",
                        name: "Transaction",
                        slug: "Transaction"
                    },
                    {
                        url: "/account/transaction-head",
                        name: "Ledger",
                        slug: "Ledger"
                    },

                ]
            },
            {
                url: null,
                name: "Bank",
                submenu: [

                    {
                        url: "/account/bank",
                        name: "Manage Bank Account",
                        slug: "Manage Bank Account"
                    },
                    {
                        url: "/account/bank-transaction",
                        name: "Transaction Detail",
                        slug: "Transaction Detail"
                    },
                    // {
                    //     url: "/account/bank-transaction/add",
                    //     name: "New Transaction",
                    //     slug: "New Transaction"
                    // },

                ]
            },
            {
                url: null,
                name: "Report",
                submenu: [

                    {
                        url: "/account/report/cash-book",
                        name: "Cash Book",
                        slug: "Cash Book"
                    },
                    {
                        url: "/account/report/fee-collection-head",
                        name: "Fee Collection Head",
                        slug: "Fee Collection Head"
                    },

                ]
            },
        ]
    },
    {
        url: null,
        name: "Library",
        icon: "BookIcon",
        submenu: [
            {
                url: null,
                name: "Books",
                submenu: [

                    {
                        url: "/library/book",
                        name: "Book Detail",
                        slug: "Book Detail"
                    },
                    {
                        url: "/library/book/add",
                        name: "Add New",
                        slug: "Add New Book"
                    },
                    {
                        url: "/library/book/import",
                        name: "Bulk Import",
                        slug: "Library Bulk Import"
                    },
                    {
                        url: "/library/book/category",
                        name: "Category",
                        slug: "Library Category"
                    },

                ]
            },
            {
                url: null,
                name: "Members",
                submenu: [

                    {
                        url: "/library/member",
                        name: "Membership",
                        slug: "Membership"
                    },
                    {
                        url: "/library/student",
                        name: "Student Member",
                        slug: "Student Member"
                    },
                    {
                        url: "/library/staff",
                        name: "Staff Member",
                        slug: "Staff Member"
                    },

                ]
            },
            {
                url: '/library/issue-history',
                name: "Issue History",
                slug: "Issue History"
            },
            {
                url: '/library/return-over',
                name: "Return Period Over",
                slug: "Return Period Over"
            },
            {
                url: '/library/circulation',
                name: "Circulation Setting",
                slug: "Circulation Setting"
            },
        ]
    },
    {
        url: null,
        name: "Attendance",
        icon: "CalendarIcon",
        submenu: [
            {
                url: null,
                name: "Student Attendance",
                submenu: [

                    {
                        url: "/attendance/student",
                        name: "Regular Attendance",
                        slug: "Regular Attendance"
                    },
                    {
                        url: "/attendance/subject",
                        name: "Subject Wise Attendance",
                        slug: "Subject Wise Attendance"
                    },
                ]

            },
            {
                url: "/attendance/staff",
                name: "Staff Attendance",
                slug: "Staff Attendance"
            },
            {
                url: "/attendance/master",
                name: "Monthly Calender",
                slug: "Monthly Calender"
            }
        ]
    },
    {
        url: null,
        name: "Examination",
        icon: "FileTextIcon",
        submenu: [
            {
                url: "/exam/schedule",
                name: "Schedule Exam",
                slug: "Schedule Exam"
            },
            {
                url: "/exam/mark-ledger",
                name: "Mark Ledger",
                slug: "Mark Ledger"
            },
            {
                url: "/exam",
                name: "Exams Head",
                slug: "Exams Head"
            },
            {
                url: "/exam/admit-card",
                name: "Admit Card",
                slug: "Admit Card"
            },
            {
                url: "/exam/routine",
                name: "Routine/Schedule",
                slug: "Routine/Schedule"
            },
            {
                url: "/exam/mark-sheet",
                name: "Grade/Mark/Ledger",
                slug: "Grade/Mark/Ledger"
            },
        ]
    },
    {
        url: null,
        name: "Certificate",
        icon: "StarIcon",
        submenu: [
            {
                url: "/certificate/issue",
                name: "Issue Certificate",
                slug: "Issue Certificate"
            },
            {
                url: "/certificate/attendance",
                name: "Attendance Certificate",
                slug: "Attendance Certificate"
            },
            {
                url: "/certificate/transfer",
                name: "Transfer Certificate",
                slug: "Transfer Certificate"
            },
            {
                url: "/certificate/bonafide",
                name: "Bonafide Certificate",
                slug: "Bonafide Certificate"
            },
            {
                url: "/certificate/course-completion",
                name: "Course Completion",
                slug: "Course Completion"
            },
            {
                url: "/certificate/issue-history",
                name: "Issue History",
                slug: "Issue History"
            },
            {
                url: "/certificate/generate",
                name: "Custom Print",
                slug: "Custom Print"
            },
            {
                url: "/certificate/template",
                name: "Certificate Template",
                slug: "Certificate Template"
            },

        ]
    },
    {
        url: null,
        name: "Hostels",
        icon: "LayersIcon",
        submenu: [
            {
                url: null,
                name: "Resident",
                submenu: [
                    {
                        url: "/hostel/resident",
                        name: "Detail",
                        slug: "Detail"
                    },
                    {
                        url: "/hostel/resident/add",
                        name: "Registration",
                        slug: "Room Registration"
                    },
                    {
                        url: "/hostel/resident/history",
                        name: "Occupant History",
                        slug: "Occupant History"
                    },
                ]
            },
            {
                url: null,
                name: "Hostel",
                submenu: [
                    {
                        url: "/hostel",
                        name: "Hostel",
                        slug: "Hostel"
                    },
                    {
                        url: "/hostel/room-type",
                        name: "Registration",
                        slug: "Hostel Registration"
                    },
                ]
            },
            {
                url: null,
                name: "Food & Meal",
                submenu: [
                    {
                        url: "/hostel/food",
                        name: "Meal Schedule",
                        slug: "Meal Schedule"
                    },
                    {
                        url: "/hostel/food/eating-time",
                        name: "Eating Time",
                        slug: "Eating Time"
                    },
                    {
                        url: "/hostel/food/category",
                        name: "Food Category",
                        slug: "Food Category"
                    },
                    {
                        url: "/hostel/food/item",
                        name: "Food Item",
                        slug: "Food Item"
                    },
                ]
            },
        ]
    },
    {
        url: null,
        name: "Transport",
        icon: "TruckIcon",
        submenu: [
            {
                url: null,
                name: "Travel/User",
                submenu: [
                    {
                        url: "/transport/user",
                        name: "Detail",
                        slug: "Detail"
                    },
                    {
                        url: "/transport/user/add",
                        name: "Registration",
                        slug: "Transport Registration"
                    },
                    {
                        url: "/transport/user/history",
                        name: "User History",
                        slug: "User History"
                    },
                ]
            },
            {
                url: "/transport/route",
                name: "Route",
                slug: "Route"
            },
            {
                url: "/transport/vehicle",
                name: "Vehicle",
                slug: "Vehicle"
            }
        ]
    },
    {
        url: null,
        name: "More",
        icon: "ListIcon",
        submenu: [
            {
                url: "/assignment",
                name: "Assignment",
                slug: "Assignment"
            },
            {
                url: "/download",
                name: "Upload & Download",
                slug: "Upload & Download"
            }
        ]
    },
    {
        url: null,
        name: "Report Links",
        icon: "LinkIcon",
        submenu: [
            {
                url: "/report/student",
                name: "Student Detail",
                slug: "Report Student Detail"
            },
            {
                url: "/report/staff",
                name: "Staff Detail",
                slug: "Report Staff Detail"
            },
            {
                url: "/account/fees",
                name: "Fees Statement",
                slug: "Fees Statement"
            },
            {
                url: "account/fees/balance",
                name: "Balance Fees",
                slug: "Balance Fees"
            },
            {
                url: "/account/payroll/balance",
                name: "Balance Salary",
                slug: "Balance Salary"
            },
            {
                url: "/account/transaction-head",
                name: "Ledger",
                slug: "Ledger"
            },
            {
                url: "/account/transaction",
                name: "Transaction",
                slug: "Transaction"
            },
            {
                url: "/account/bank",
                name: "Bank Statement",
                slug: "Bank Statement"
            },
            {
                url: "/library/issue-history",
                name: "Library Issue History",
                slug: "Library Issue History"
            },
            {
                url: "/library/return-over",
                name: "Book Return Period",
                slug: "Book Return Period"
            },
            {
                url: "/attendance/student",
                name: "Student Attendance",
                slug: "Student Attendance"
            },
            {
                url: "/attendance/staff",
                name: "Staff Attendance",
                slug: "Staff Attendance"
            },
            {
                url: "/hostel/resident/history",
                name: "Hostel History",
                slug: "Hostel History"
            },
            {
                url: "/transport/user/history",
                name: "Transport History",
                slug: "Transport History"
            },
        ]
    },
    {
        url: null,
        name: "Alert",
        icon: "Volume2Icon",
        submenu: [
            {
                url: "/info/notice",
                name: "User Notice",
                slug: "User Notice"
            },
            {
                url: "/info/sms-email",
                name: "SMS / E-mail",
                slug: "SMS / E-mail"
            },
        ]
    },
    {
        url: null,
        name: "Academics",
        icon: "AwardIcon",
        submenu: [
            {
                url: null,
                name: "Academic Level",
                submenu: [
                    {
                        url: "/faculty",
                        name: "Faculty/Level/Class",
                        slug: "Faculty/Level/Slug"
                    },
                    {
                        url: "/semester",
                        name: "Semester/Section",
                        slug: "Semester/Section"
                    },
                    {
                        url: "/student-batch",
                        name: "Batch",
                        slug: "Batch"
                    },
                ]
            },
            {
                url: null,
                name: "Grading Subject",
                submenu: [
                    {
                        url: "/grading",
                        name: "Grading",
                        slug: "Grading"
                    },
                    {
                        url: "/subject",
                        name: "Course/Subject",
                        slug: "Course/Subject"
                    },
                ]
            },
            {
                url: null,
                name: "Status Setting",
                submenu: [
                    {
                        url: "/student-status",
                        name: "Student Status",
                        slug: "Student Status"
                    },
                    {
                        url: "/attendance-status",
                        name: "Attendance Status",
                        slug: "Attendance Status"
                    },
                    {
                        url: "/books-status",
                        name: "Books Status",
                        slug: "Books Status"
                    },
                    {
                        url: "/bed-status",
                        name: "Hostel Bed Status",
                        slug: "Hostel Bed Status"
                    },
                ]
            },

            {
                url: null,
                name: "Year & Month",
                submenu: [
                    {
                        url: "/year",
                        name: "Year",
                        slug: "Year"
                    },
                    {
                        url: "/month",
                        name: "Month",
                        slug: "Month"
                    },
                    {
                        url: "/day",
                        name: "Day",
                        slug: "Day"
                    },
                ]
            },
            {
                url: "/payment-method",
                name: "Payment Method",
                slug: "Payment Method"
            }
        ]
    }
]


