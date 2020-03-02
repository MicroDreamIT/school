import Vue from 'vue'
import Router from 'vue-router'
import auth from "@/auth/authService";

// import firebase from 'firebase/app'
// import 'firebase/auth'

Vue.use(Router);

const router = new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    scrollBehavior() {
        return {x: 0, y: 0}
    },
    routes: [
        {
            // =============================================================================
            // MAIN LAYOUT ROUTES
            // =============================================================================
            path: '',
            component: () => import('./layouts/main/Main'),
            children: [

                // =============================================================================
                // Theme Routes
                // =============================================================================
                {
                    path: '/',
                    name: 'dashboard',
                    component: () => import('./views/custom/dashboard'),
                    meta: {
                        rule: 'admin',
                    }
                },
                /*student*/
                {
                    path: '/student',
                    name: 'student.index',
                    component: () => import('./views/custom/student/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/import',
                    name: 'student.bulk-import',
                    component: () => import('./views/custom/student/bulk-import'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/registration',
                    name: 'student.registration',
                    component: () => import('./views/custom/student/registration'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/:id/details',
                    name: 'student.view',
                    component: () => import('./views/custom/student/details'),
                    meta: {
                        rule: 'admin'
                    }
                },

                {
                    path: '/student/transfer',
                    name: 'student.transfer',
                    component: () => import('./views/custom/student/transfer'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/document',
                    name: 'student.document',
                    component: () => import('./views/custom/student/document'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/note',
                    name: 'student.note',
                    component: () => import('./views/custom/student/note'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*staff*/
                {
                    path: '/staff',
                    name: 'staff.index',
                    component: () => import('./views/custom/staff/index.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/staff/import',
                    name: 'staff.bulk-import',
                    component: () => import('./views/custom/staff/bulk-import.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/staff/add',
                    name: 'staff.create',
                    component: () => import('./views/custom/staff/registration.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/staff/:id/details',
                    name: 'staff.view',
                    component: () => import('./views/custom/staff/details.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },

                {
                    path: '/staff/document',
                    name: 'staff.document',
                    component: () => import('./views/custom/staff/document.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/staff/note',
                    name: 'staff.note',
                    component: () => import('./views/custom/staff/note.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/staff/designation',
                    name: 'staff.designation',
                    component: () => import('./views/custom/staff/designation.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*guardian*/
                {
                    path:'/guardian',
                    name:'guardian',
                    component:()=>import('./views/custom/guardian/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/guardian/registration',
                    name:'guardian.create',
                    component:()=>import('./views/custom/guardian/registration'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/guardian/:id/details',
                    name:'guardian.details',
                    component:()=>import('./views/custom/guardian/details'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*account*/
                {
                    path:'/account/fees',
                    name:'account.fees',
                    component:()=>import('./views/custom/account/fees/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/quick-receive',
                    name:'account.quickReceive',
                    component:()=>import('./views/custom/account/fees/quick-receive'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/collection',
                    name:'account.collection',
                    component:()=>import('./views/custom/account/fees/collect'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/balance',
                    name:'account.balance',
                    component:()=>import('./views/custom/account/fees/balance-report'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/master/add',
                    name:'account.create',
                    component:()=>import('./views/custom/account/fees/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/head',
                    name:'account.head',
                    component:()=>import('./views/custom/account/fees/fees-head'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/master',
                    name:'account.master',
                    component:()=>import('./views/custom/account/fees/master-detail'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/fees/collection/:id/view',
                    name:'account.views',
                    component:()=>import('./views/custom/account/fees/views'),
                    meta:{
                        rule: 'admin'
                    }
                },

                {
                    path:'/account/payroll',
                    name:'account.payrollHistory',
                    component:()=>import('./views/custom/account/payroll/history'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/salary/payment',
                    name:'account.salaryPayment',
                    component:()=>import('./views/custom/account/payroll/salary-pay'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/payroll/master/add',
                    name:'account.payrollCreate',
                    component:()=>import('./views/custom/account/payroll/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/payroll/balance',
                    name:'account.payrollBalance',
                    component:()=>import('./views/custom/account/payroll/balance-salary'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/payroll/master',
                    name:'account.payroll',
                    component:()=>import('./views/custom/account/payroll/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/payroll/head',
                    name:'account.payrollHead',
                    component:()=>import('./views/custom/account/payroll/payroll-head'),
                    meta:{
                        rule: 'admin'
                    }
                },

                {
                    path:'/account/transaction',
                    name:'account.transaction',
                    component:()=>import('./views/custom/account/ledger/transaction-details'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/transaction/add', // @@ 1
                    name:'account.transactionCreate',
                    component:()=>import('./views/custom/account/ledger/transactionCreate'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/transaction-head',
                    name:'account.transactionHead',
                    component:()=>import('./views/custom/account/ledger/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/bank',
                    name:'account.bank',
                    component:()=>import('./views/custom/account/bank/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/bank/add',
                    name:'account.bankCreate',
                    component:()=>import('./views/custom/account/bank/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/bank-transaction',
                    name:'account.bankTransaction',
                    component:()=>import('./views/custom/account/bank/transaction-detail'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/bank-transaction/add',
                    name:'account.bankTransactionCreate',
                    component:()=>import('./views/custom/account/bank/bank-transaction'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/report/cash-book',
                    name:'account.cashBook',
                    component:()=>import('./views/custom/account/report/cash-book'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/account/report/fee-collection-head',
                    name:'account.collectionHead',
                    component:()=>import('./views/custom/account/report/fees-collection-head'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*Library*/
                {
                    path:'/library/book',
                    name:'library.book',
                    component:()=>import('./views/custom/library/books/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/book/add',
                    name:'library.bookCreate',
                    component:()=>import('./views/custom/library/books/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/book/import',
                    name:'library.bookImport',
                    component:()=>import('./views/custom/library/books/import'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/book/category',
                    name:'library.bookCategory',
                    component:()=>import('./views/custom/library/books/category'),
                    meta:{
                        rule: 'admin'
                    }
                },
                 {
                    path:'/library/book/:id/view',
                    name:'library.bookViews',
                    component:()=>import('./views/custom/library/books/view'),
                    meta:{
                        rule: 'admin'
                    }
                },
                 {
                    path:'/library/member',
                    name:'library.member',
                    component:()=>import('./views/custom/library/members/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/member/add', // @@ 2
                    name:'library.memberCreate',
                    component:()=>import('./views/custom/library/members/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/student',
                    name:'library.student',
                    component:()=>import('./views/custom/library/members/student'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/staff',
                    name:'library.staff',
                    component:()=>import('./views/custom/library/members/staff'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/issue-history',
                    name:'library.issueHistory',
                    component:()=>import('./views/custom/library/issue-history'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/return-over',
                    name:'library.returnOver',
                    component:()=>import('./views/custom/library/return-period'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/library/circulation',
                    name:'library.circulation',
                    component:()=>import('./views/custom/library/circulation-setting'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*report*/
                {
                    path:'/report/student',
                    name:'report.student',
                    component:()=>import('./views/custom/reports/student'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/report/staff',
                    name:'report.staff',
                    component:()=>import('./views/custom/reports/staff'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*attendance*/
                {
                    path:'/attendance/student',
                    name:'attendance.student',
                    component:()=>import('./views/custom/attendance/student/regular'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/student/add', // @@ 3
                    name:'attendance.studentCreate',
                    component:()=>import('./views/custom/attendance/student/regular-create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/subject',
                    name:'attendance.subject',
                    component:()=>import('./views/custom/attendance/student/subject-wise'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/subject/add', // @@ 4
                    name:'attendance.subjectCreate',
                    component:()=>import('./views/custom/attendance/student/subject-wise-create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/subject/alert', // @@ 5
                    name:'attendance.subjectAlert',
                    component:()=>import('./views/custom/attendance/student/subject-wise-alert'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/staff',
                    name:'attendance.staff',
                    component:()=>import('./views/custom/attendance/staff/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/staff/add', // @@ 6
                    name:'attendance.staffCreate',
                    component:()=>import('./views/custom/attendance/staff/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/master',
                    name:'attendance.master',
                    component:()=>import('./views/custom/attendance/monthly/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance/master/add', // @ 7
                    name:'attendance.masterCreate',
                    component:()=>import('./views/custom/attendance/monthly/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*examination*/
                {
                    path:'/exam',
                    name:'exam',
                    component:()=>import('./views/custom/examination/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/schedule',
                    name:'exam.schedule',
                    component:()=>import('./views/custom/examination/schedule'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/schedule/add', // @@ 8
                    name:'exam.scheduleCreate',
                    component:()=>import('./views/custom/examination/scheduleCreate'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/admit-card',
                    name:'exam.admitCard',
                    component:()=>import('./views/custom/examination/admit-card'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/routine',
                    name:'exam.routine',
                    component:()=>import('./views/custom/examination/routine'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/mark-sheet',
                    name:'exam.markSheet',
                    component:()=>import('./views/custom/examination/mark-sheet'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/mark-ledger',
                    name:'exam.markLedger',
                    component:()=>import('./views/custom/examination/mark-ledger'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/exam/mark-ledger/add', // @@ 9
                    name:'exam.markLedgerCreate',
                    component:()=>import('./views/custom/examination/markLedgerCreate'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*for certificate*/
                {
                    path:'/certificate/issue',
                    name:'certificate.issue',
                    component:()=>import('./views/custom/certificate/issue'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/issue-history',
                    name:'certificate.issueHistory',
                    component:()=>import('./views/custom/certificate/history'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/attendance',
                    name:'certificate.attendance',
                    component:()=>import('./views/custom/certificate/attendence'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/transfer',
                    name:'certificate.transfer',
                    component:()=>import('./views/custom/certificate/transfer'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/bonafide',
                    name:'certificate.bonafide',
                    component:()=>import('./views/custom/certificate/bonafide'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/generate',
                    name:'certificate.generate',
                    component:()=>import('./views/custom/certificate/print'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/template',
                    name:'certificate.template',
                    component:()=>import('./views/custom/certificate/template'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/template/add', // @@ 10
                    name:'certificate.templateCreate',
                    component:()=>import('./views/custom/certificate/templateCreate'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/certificate/course-completion',
                    name:'certificate.course',
                    component:()=>import('./views/custom/certificate/course'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*for hostels*/
                {
                    path:'/hostel',
                    name:'hostel',
                    component:()=>import('./views/custom/hostels/hostel/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/add', // @@ 11
                    name:'hostel.create',
                    component:()=>import('./views/custom/hostels/hostel/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/room-type',
                    name:'hostel.roomType',
                    component:()=>import('./views/custom/hostels/hostel/room-type'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/food',
                    name:'hostel.food',
                    component:()=>import('./views/custom/hostels/food/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                 {
                    path:'/hostel/food/eating-time',
                    name:'hostel.eatingTime',
                    component:()=>import('./views/custom/hostels/food/eating-time'),
                    meta:{
                        rule: 'admin'
                    }
                },
                 {
                    path:'/hostel/food/category',
                    name:'hostel.foodCategory',
                    component:()=>import('./views/custom/hostels/food/category'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/food/item',
                    name:'hostel.foodItem',
                    component:()=>import('./views/custom/hostels/food/item'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/resident',
                    name:'hostel.resident',
                    component:()=>import('./views/custom/hostels/resident/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/resident/add',
                    name:'hostel.residentCreate',
                    component:()=>import('./views/custom/hostels/resident/registration'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/hostel/resident/history',
                    name:'hostel.residentHistory',
                    component:()=>import('./views/custom/hostels/resident/history'),
                    meta:{
                        rule: 'admin'
                    }
                },

                /*for transport*/
                {
                    path:'/transport/user',
                    name:'transport.user',
                    component:()=>import('./views/custom/transport/user/detail'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/transport/user/add',
                    name:'transport.userCreate',
                    component:()=>import('./views/custom/transport/user/registration'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/transport/user/history',
                    name:'transport.history',
                    component:()=>import('./views/custom/transport/user/history'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/transport/route',
                    name:'transport.route',
                    component:()=>import('./views/custom/transport/route'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/transport/vehicle',
                    name:'transport.vehicle',
                    component:()=>import('./views/custom/transport/vehicle'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /*for more*/
                {
                    path:'/assignment',
                    name:'assignment',
                    component:()=>import('./views/custom/more/assignment/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/assignment/add', // @@ 12
                    name:'assignmentCreate',
                    component:()=>import('./views/custom/more/assignment/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/download',
                    name:'download',
                    component:()=>import('./views/custom/more/upload-download'),
                    meta:{
                        rule: 'admin'
                    }
                },

                /* for notice*/
                 {
                    path:'/info/notice',
                    name:'info.notice',
                    component:()=>import('./views/custom/alert/notice/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/notice/add', // @@ 13
                    name:'info.noticeCreate',
                    component:()=>import('./views/custom/alert/notice/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/sms-email',
                    name:'info.smsEmail',
                    component:()=>import('./views/custom/alert/smsemail/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/sms-email/add', // @@ 14
                    name:'info.smsEmailCreate',
                    component:()=>import('./views/custom/alert/smsemail/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/sms-email/student-guardian', // @@ 15
                    name:'info.smsEmailStudentGuardian',
                    component:()=>import('./views/custom/alert/smsemail/student-guardian'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/sms-email/staff', // @@ 16
                    name:'info.smsEmailStaff',
                    component:()=>import('./views/custom/alert/smsemail/staff'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/info/sms-email/individual', // @@ 17
                    name:'info.smsEmailIndividual',
                    component:()=>import('./views/custom/alert/smsemail/individual'),
                    meta:{
                        rule: 'admin'
                    }
                },

                /* url for academic section */
                {
                    path:'/faculty',
                    name:'academics.faculty',
                    component:()=>import('./views/custom/academics/faculty'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/semester',
                    name:'academics.semester',
                    component:()=>import('./views/custom/academics/semester'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/student-batch',
                    name:'academics.batch',
                    component:()=>import('./views/custom/academics/batch'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/grading',
                    name:'academics.grading',
                    component:()=>import('./views/custom/academics/grading'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/subject',
                    name:'academics.subject',
                    component:()=>import('./views/custom/academics/subject'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/student-status',
                    name:'academics.student-status',
                    component:()=>import('./views/custom/academics/student-status'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/attendance-status',
                    name:'academics.attendance-status',
                    component:()=>import('./views/custom/academics/attendance-status'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/books-status',
                    name:'academics.books-status',
                    component:()=>import('./views/custom/academics/books-status'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/bed-status',
                    name:'academics.bed-status',
                    component:()=>import('./views/custom/academics/hostel-status'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/year',
                    name:'academics.year',
                    component:()=>import('./views/custom/academics/year'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/month',
                    name:'academics.month',
                    component:()=>import('./views/custom/academics/month'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/day',
                    name:'academics.day',
                    component:()=>import('./views/custom/academics/day'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/payment-method',
                    name:'academics.payment-method',
                    component:()=>import('./views/custom/academics/payment-method'),
                    meta:{
                        rule: 'admin'
                    }
                },

                /* url for academic section end */

                /* url for more section start */
                {
                    path:'/assignment',
                    name:'more.assignment.index',
                    component:()=>import('./views/custom/more/assignment/index'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/assignment/add', // @@ 18
                    name:'more.assignment.create',
                    component:()=>import('./views/custom/more/assignment/create'),
                    meta:{
                        rule: 'admin'
                    }
                },
                {
                    path:'/download',
                    name:'more.upload-download',
                    component:()=>import('./views/custom/more/upload-download'),
                    meta:{
                        rule: 'admin'
                    }
                },
                /* url for more section end */

                // =============================================================================
                // Application Routes
                // ============


                // =============================================================================
                // Application Routes
                // =============================================================================
                //             {
                //                 path: '/apps/todo',
                //                 redirect: '/apps/todo/all',
                //                 name: 'todo',
                //             },
                //             {
                //                 path: '/apps/todo/:filter',
                //                 component: () => import('./views/apps/todo/Todo.vue'),
                //                 meta: {
                //                     rule: 'editor',
                //                     parent: "todo",
                //                     no_scroll: true,
                //                 }
                //             },
                //             {
                //                 path: '/apps/chat',
                //                 name: 'chat',
                //                 component: () => import('./views/apps/chat/Chat.vue'),
                //                 meta: {
                //                     rule: 'editor',
                //                     no_scroll: true,
                //                 }
                //             },
                //             {
                //                 path: '/apps/email',
                //                 redirect: '/apps/email/inbox',
                //                 name: 'email',
                //             },
                //             {
                //                 path: '/apps/email/:filter',
                //                 component: () => import('./views/apps/email/Email.vue'),
                //                 meta: {
                //                     rule: 'editor',
                //                     parent: 'email',
                //                     no_scroll: true,
                //                 }
                //             },
                //             {
                //                 path: '/apps/calendar/vue-simple-calendar',
                //                 name: 'calendar-simple-calendar',
                //                 component: () => import('./views/apps/calendar/SimpleCalendar.vue'),
                //                 meta: {
                //                     rule: 'editor',
                //                     no_scroll: true,
                //                 }
                //             },
                //             {
                //                 path: '/apps/eCommerce/shop',
                //                 name: 'ecommerce-shop',
                //                 component: () => import('./views/apps/eCommerce/ECommerceShop.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'eCommerce'},
                //                         { title: 'Shop', active: true },
                //                     ],
                //                     pageTitle: 'Shop',
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/apps/eCommerce/wish-list',
                //                 name: 'ecommerce-wish-list',
                //                 component: () => import('./views/apps/eCommerce/ECommerceWishList.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'eCommerce', url:'/apps/eCommerce/shop'},
                //                         { title: 'Wish List', active: true },
                //                     ],
                //                     pageTitle: 'Wish List',
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/apps/eCommerce/checkout',
                //                 name: 'ecommerce-checkout',
                //                 component: () => import('./views/apps/eCommerce/ECommerceCheckout.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'eCommerce', url:'/apps/eCommerce/shop'},
                //                         { title: 'Checkout', active: true },
                //                     ],
                //                     pageTitle: 'Checkout',
                //                     rule: 'editor'
                //                 }
                //             },
                //             /*
                //               Below route is for demo purpose
                //               You can use this route in your app
                //                 {
                //                     path: '/apps/eCommerce/item/',
                //                     name: 'ecommerce-item-detail-view',
                //                     redirect: '/apps/eCommerce/shop',
                //                 }
                //             */
                //             {
                //                 path: '/apps/eCommerce/item/',
                //                 redirect: '/apps/eCommerce/item/5546604',
                //             },
                //             {
                //                 path: '/apps/eCommerce/item/:item_id',
                //                 name: 'ecommerce-item-detail-view',
                //                 component: () => import('./views/apps/eCommerce/ECommerceItemDetailView.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'eCommerce'},
                //                         { title: 'Shop', url: {name: 'ecommerce-shop'} },
                //                         { title: 'Item Details', active: true },
                //                     ],
                //                     parent: "ecommerce-item-detail-view",
                //                     pageTitle: 'Item Details',
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/apps/user/user-list',
                //                 name: 'app-user-list',
                //                 component: () => import('@/views/apps/user/user-list/UserList.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'User' },
                //                         { title: 'List', active: true },
                //                     ],
                //                     pageTitle: 'User List',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/apps/user/user-view/:userId',
                //                 name: 'app-user-view',
                //                 component: () => import('@/views/apps/user/UserView.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'User' },
                //                         { title: 'View', active: true },
                //                     ],
                //                     pageTitle: 'User View',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/apps/user/user-edit/:userId',
                //                 name: 'app-user-edit',
                //                 component: () => import('@/views/apps/user/user-edit/UserEdit.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'User' },
                //                         { title: 'Edit', active: true },
                //                     ],
                //                     pageTitle: 'User Edit',
                //                     rule: 'editor'
                //                 },
                //             },
                //     // =============================================================================
                //     // UI ELEMENTS
                //     // =============================================================================
                //             {
                //                 path: '/ui-elements/data-list/list-view',
                //                 name: 'data-list-list-view',
                //                 component: () => import('@/views/ui-elements/data-list/list-view/DataListListView.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Data List'},
                //                         { title: 'List View', active: true },
                //                     ],
                //                     pageTitle: 'List View',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/data-list/thumb-view',
                //                 name: 'data-list-thumb-view',
                //                 component: () => import('@/views/ui-elements/data-list/thumb-view/DataListThumbView.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Data List'},
                //                         { title: 'Thumb View', active: true },
                //                     ],
                //                     pageTitle: 'Thumb View',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/grid/vuesax',
                //                 name: 'grid-vuesax',
                //                 component: () => import('@/views/ui-elements/grid/vuesax/GridVuesax.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Grid'},
                //                         { title: 'Vuesax', active: true },
                //                     ],
                //                     pageTitle: 'Grid',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/grid/tailwind',
                //                 name: 'grid-tailwind',
                //                 component: () => import('@/views/ui-elements/grid/tailwind/GridTailwind.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Grid'},
                //                         { title: 'Tailwind', active: true },
                //                     ],
                //                     pageTitle: 'Tailwind Grid',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/colors',
                //                 name: 'colors',
                //                 component: () => import('./views/ui-elements/colors/Colors.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Colors', active: true },
                //                     ],
                //                     pageTitle: 'Colors',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/card/basic',
                //                 name: 'basic-cards',
                //                 component: () => import('./views/ui-elements/card/CardBasic.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Card' },
                //                         { title: 'Basic Cards', active: true },
                //                     ],
                //                     pageTitle: 'Basic Cards',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/card/statistics',
                //                 name: 'statistics-cards',
                //                 component: () => import('./views/ui-elements/card/CardStatistics.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Card' },
                //                         { title: 'Statistics Cards', active: true },
                //                     ],
                //                     pageTitle: 'Statistics Card',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/card/analytics',
                //                 name: 'analytics-cards',
                //                 component: () => import('./views/ui-elements/card/CardAnalytics.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Card' },
                //                         { title: 'Analytics Card', active: true },
                //                     ],
                //                     pageTitle: 'Analytics Card',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/card/card-actions',
                //                 name: 'card-actions',
                //                 component: () => import('./views/ui-elements/card/CardActions.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Card' },
                //                         { title: 'Card Actions', active: true },
                //                     ],
                //                     pageTitle: 'Card Actions',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/card/card-colors',
                //                 name: 'card-colors',
                //                 component: () => import('./views/ui-elements/card/CardColors.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Card' },
                //                         { title: 'Card Colors', active: true },
                //                     ],
                //                     pageTitle: 'Card Colors',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/table',
                //                 name: 'table',
                //                 component: () => import('./views/ui-elements/table/Table.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Table', active: true },
                //                     ],
                //                     pageTitle: 'Table',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/ui-elements/ag-grid-table',
                //                 name: 'ag-grid-table',
                //                 component: () => import('./views/ui-elements/ag-grid-table/AgGridTable.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'agGrid Table', active: true },
                //                     ],
                //                     pageTitle: 'agGrid Table',
                //                     rule: 'editor'
                //                 },
                //             },
                //
                //     // =============================================================================
                //     // COMPONENT ROUTES
                //     // =============================================================================
                //             {
                //                 path: '/components/alert',
                //                 name: 'component-alert',
                //                 component: () => import('@/views/components/vuesax/alert/Alert.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Alert', active: true },
                //                     ],
                //                     pageTitle: 'Alert',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/avatar',
                //                 name: 'component-avatar',
                //                 component: () => import('@/views/components/vuesax/avatar/Avatar.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Avatar', active: true },
                //                     ],
                //                     pageTitle: 'Avatar',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/breadcrumb',
                //                 name: 'component-breadcrumb',
                //                 component: () => import('@/views/components/vuesax/breadcrumb/Breadcrumb.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Breadcrumb', active: true },
                //                     ],
                //                     pageTitle: 'Breadcrumb',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/button',
                //                 name: 'component-button',
                //                 component: () => import('@/views/components/vuesax/button/Button.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Button', active: true },
                //                     ],
                //                     pageTitle: 'Button',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/button-group',
                //                 name: 'component-button-group',
                //                 component: () => import('@/views/components/vuesax/button-group/ButtonGroup.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Button Group', active: true },
                //                     ],
                //                     pageTitle: 'Button Group',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/chip',
                //                 name: 'component-chip',
                //                 component: () => import('@/views/components/vuesax/chip/Chip.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Chip', active: true },
                //                     ],
                //                     pageTitle: 'Chip',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/collapse',
                //                 name: 'component-collapse',
                //                 component: () => import('@/views/components/vuesax/collapse/Collapse.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Collapse', active: true },
                //                     ],
                //                     pageTitle: 'Collapse',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/dialogs',
                //                 name: 'component-dialog',
                //                 component: () => import('@/views/components/vuesax/dialogs/Dialogs.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Dialogs', active: true },
                //                     ],
                //                     pageTitle: 'Dialogs',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/divider',
                //                 name: 'component-divider',
                //                 component: () => import('@/views/components/vuesax/divider/Divider.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Divider', active: true },
                //                     ],
                //                     pageTitle: 'Divider',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/dropdown',
                //                 name: 'component-drop-down',
                //                 component: () => import('@/views/components/vuesax/dropdown/Dropdown.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Dropdown', active: true },
                //                     ],
                //                     pageTitle: 'Dropdown',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/list',
                //                 name: 'component-list',
                //                 component: () => import('@/views/components/vuesax/list/List.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'List', active: true },
                //                     ],
                //                     pageTitle: 'List',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/loading',
                //                 name: 'component-loading',
                //                 component: () => import('@/views/components/vuesax/loading/Loading.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Loading', active: true },
                //                     ],
                //                     pageTitle: 'Loading',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/navbar',
                //                 name: 'component-navbar',
                //                 component: () => import('@/views/components/vuesax/navbar/Navbar.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Navbar', active: true },
                //                     ],
                //                     pageTitle: 'Navbar',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/notifications',
                //                 name: 'component-notifications',
                //                 component: () => import('@/views/components/vuesax/notifications/Notifications.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Notifications', active: true },
                //                     ],
                //                     pageTitle: 'Notifications',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/pagination',
                //                 name: 'component-pagination',
                //                 component: () => import('@/views/components/vuesax/pagination/Pagination.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Pagination', active: true },
                //                     ],
                //                     pageTitle: 'Pagination',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/popup',
                //                 name: 'component-popup',
                //                 component: () => import('@/views/components/vuesax/popup/Popup.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Popup', active: true },
                //                     ],
                //                     pageTitle: 'Popup',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/progress',
                //                 name: 'component-progress',
                //                 component: () => import('@/views/components/vuesax/progress/Progress.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Progress', active: true },
                //                     ],
                //                     pageTitle: 'Progress',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/sidebar',
                //                 name: 'component-sidebar',
                //                 component: () => import('@/views/components/vuesax/sidebar/Sidebar.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Sidebar', active: true },
                //                     ],
                //                     pageTitle: 'Sidebar',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/slider',
                //                 name: 'component-slider',
                //                 component: () => import('@/views/components/vuesax/slider/Slider.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Slider', active: true },
                //                     ],
                //                     pageTitle: 'Slider',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/tabs',
                //                 name: 'component-tabs',
                //                 component: () => import('@/views/components/vuesax/tabs/Tabs.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Tabs', active: true },
                //                     ],
                //                     pageTitle: 'Tabs',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/tooltip',
                //                 name: 'component-tooltip',
                //                 component: () => import('@/views/components/vuesax/tooltip/Tooltip.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Tooltip', active: true },
                //                     ],
                //                     pageTitle: 'Tooltip',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/components/upload',
                //                 name: 'component-upload',
                //                 component: () => import('@/views/components/vuesax/upload/Upload.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Components' },
                //                         { title: 'Upload', active: true },
                //                     ],
                //                     pageTitle: 'Upload',
                //                     rule: 'editor'
                //                 },
                //             },
                //
                //
                //     // =============================================================================
                //     // FORMS
                //     // =============================================================================
                //         // =============================================================================
                //         // FORM ELEMENTS
                //         // =============================================================================
                //             {
                //                 path: '/forms/form-elements/select',
                //                 name: 'form-element-select',
                //                 component: () => import('./views/forms/form-elements/select/Select.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Select', active: true },
                //                     ],
                //                     pageTitle: 'Select',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/switch',
                //                 name: 'form-element-switch',
                //                 component: () => import('./views/forms/form-elements/switch/Switch.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Switch', active: true },
                //                     ],
                //                     pageTitle: 'Switch',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/checkbox',
                //                 name: 'form-element-checkbox',
                //                 component: () => import('./views/forms/form-elements/checkbox/Checkbox.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Checkbox', active: true },
                //                     ],
                //                     pageTitle: 'Checkbox',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/radio',
                //                 name: 'form-element-radio',
                //                 component: () => import('./views/forms/form-elements/radio/Radio.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Radio', active: true },
                //                     ],
                //                     pageTitle: 'Radio',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/input',
                //                 name: 'form-element-input',
                //                 component: () => import('./views/forms/form-elements/input/Input.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Input', active: true },
                //                     ],
                //                     pageTitle: 'Input',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/number-input',
                //                 name: 'form-element-number-input',
                //                 component: () => import('./views/forms/form-elements/number-input/NumberInput.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Number Input', active: true },
                //                     ],
                //                     pageTitle: 'Number Input',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-elements/textarea',
                //                 name: 'form-element-textarea',
                //                 component: () => import('./views/forms/form-elements/textarea/Textarea.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Form Elements' },
                //                         { title: 'Textarea', active: true },
                //                     ],
                //                     pageTitle: 'Textarea',
                //                     rule: 'editor'
                //                 },
                //             },
                //     // -------------------------------------------------------------------------------------------------------------------------------------------
                //             {
                //                 path: '/forms/form-layouts',
                //                 name: 'forms-form-layouts',
                //                 component: () => import('@/views/forms/FormLayouts.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Forms' },
                //                         { title: 'Form Layouts', active: true },
                //                     ],
                //                     pageTitle: 'Form Layouts',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-wizard',
                //                 name: 'extra-component-form-wizard',
                //                 component: () => import('@/views/forms/form-wizard/FormWizard.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Form Wizard', active: true },
                //                     ],
                //                     pageTitle: 'Form Wizard',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/forms/form-validation',
                //                 name: 'extra-component-form-validation',
                //                 component: () => import('@/views/forms/form-validation/FormValidation.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Form Validation', active: true },
                //                     ],
                //                     pageTitle: 'Form Validation',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //               path: '/forms/form-input-group',
                //               name: 'extra-component-form-input-group',
                //               component: () => import('@/views/forms/form-input-group/FormInputGroup.vue'),
                //               meta: {
                //                   breadcrumb: [
                //                       { title: 'Home', url: '/' },
                //                       { title: 'Extra Components' },
                //                       { title: 'Form Input Group', active: true },
                //                   ],
                //                   pageTitle: 'Form Input Group',
                //                   rule: 'editor'
                //               },
                //             },
                //
                //     // =============================================================================
                //     // Pages Routes
                //     // =============================================================================
                //             {
                //                 path: '/pages/profile',
                //                 name: 'page-profile',
                //                 component: () => import('@/views/pages/Profile.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'Profile', active: true },
                //                     ],
                //                     pageTitle: 'Profile',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/user-settings',
                //                 name: 'page-user-settings',
                //                 component: () => import('@/views/pages/user-settings/UserSettings.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'User Settings', active: true },
                //                     ],
                //                     pageTitle: 'Settings',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/faq',
                //                 name: 'page-faq',
                //                 component: () => import('@/views/pages/Faq.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'FAQ', active: true },
                //                     ],
                //                     pageTitle: 'FAQ',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/knowledge-base',
                //                 name: 'page-knowledge-base',
                //                 component: () => import('@/views/pages/KnowledgeBase.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'KnowledgeBase', active: true },
                //                     ],
                //                     pageTitle: 'KnowledgeBase',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/knowledge-base/category',
                //                 name: 'page-knowledge-base-category',
                //                 component: () => import('@/views/pages/KnowledgeBaseCategory.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'KnowledgeBase', url: '/pages/knowledge-base' },
                //                         { title: 'Category', active: true },
                //                     ],
                //                     parent: 'page-knowledge-base',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/knowledge-base/category/question',
                //                 name: 'page-knowledge-base-category-question',
                //                 component: () => import('@/views/pages/KnowledgeBaseCategoryQuestion.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'KnowledgeBase', url: '/pages/knowledge-base' },
                //                         { title: 'Category', url: '/pages/knowledge-base/category' },
                //                         { title: 'Question', active: true },
                //                     ],
                //                     parent: 'page-knowledge-base',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/search',
                //                 name: 'page-search',
                //                 component: () => import('@/views/pages/Search.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'Search', active: true },
                //                     ],
                //                     pageTitle: 'Search',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/pages/invoice',
                //                 name: 'page-invoice',
                //                 component: () => import('@/views/pages/Invoice.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Pages' },
                //                         { title: 'Invoice', active: true },
                //                     ],
                //                     pageTitle: 'Invoice',
                //                     rule: 'editor'
                //                 },
                //             },
                //
                //     // =============================================================================
                //     // CHARTS & MAPS
                //     // =============================================================================
                //             {
                //                 path: '/charts-and-maps/charts/apex-charts',
                //                 name: 'extra-component-charts-apex-charts',
                //                 component: () => import('@/views/charts-and-maps/charts/apex-charts/ApexCharts.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Charts & Maps' },
                //                         { title: 'Apex Charts', active: true },
                //                     ],
                //                     pageTitle: 'Apex Charts',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/charts-and-maps/charts/echarts',
                //                 name: 'extra-component-charts-echarts',
                //                 component: () => import('@/views/charts-and-maps/charts/echarts/Echarts.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Charts & Maps' },
                //                         { title: 'echarts', active: true },
                //                     ],
                //                     pageTitle: 'echarts',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/charts-and-maps/maps/google-map',
                //                 name: 'extra-component-maps-google-map',
                //                 component: () => import('@/views/charts-and-maps/maps/google-map/GoogleMap.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Charts & Maps' },
                //                         { title: 'Google Map', active: true },
                //                     ],
                //                     pageTitle: 'Google Map',
                //                     rule: 'editor'
                //                 },
                //             },
                //
                //
                //
                //     // =============================================================================
                //     // EXTENSIONS
                //     // =============================================================================
                //             {
                //                 path: '/extensions/select',
                //                 name: 'extra-component-select',
                //                 component: () => import('@/views/components/extra-components/select/Select.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Select', active: true },
                //                     ],
                //                     pageTitle: 'Select',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/quill-editor',
                //                 name: 'extra-component-quill-editor',
                //                 component: () => import('@/views/components/extra-components/quill-editor/QuillEditor.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Quill Editor', active: true },
                //                     ],
                //                     pageTitle: 'Quill Editor',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/drag-and-drop',
                //                 name: 'extra-component-drag-and-drop',
                //                 component: () => import('@/views/components/extra-components/drag-and-drop/DragAndDrop.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Drag & Drop', active: true },
                //                     ],
                //                     pageTitle: 'Drag & Drop',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/datepicker',
                //                 name: 'extra-component-datepicker',
                //                 component: () => import('@/views/components/extra-components/datepicker/Datepicker.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Datepicker', active: true },
                //                     ],
                //                     pageTitle: 'Datepicker',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/datetime-picker',
                //                 name: 'extra-component-datetime-picker',
                //                 component: () => import('@/views/components/extra-components/datetime-picker/DatetimePicker.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extra Components' },
                //                         { title: 'Datetime Picker', active: true },
                //                     ],
                //                     pageTitle: 'Datetime Picker',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/access-control',
                //                 name: 'extra-component-access-control',
                //                 component: () => import('@/views/components/extra-components/access-control/AccessControl.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Access Control', active: true },
                //                     ],
                //                     pageTitle: 'Access Control',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/i18n',
                //                 name: 'extra-component-i18n',
                //                 component: () => import('@/views/components/extra-components/I18n.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'I18n', active: true },
                //                     ],
                //                     pageTitle: 'I18n',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/carousel',
                //                 name: 'extra-component-carousel',
                //                 component: () => import('@/views/components/extra-components/carousel/Carousel.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Carousel', active: true },
                //                     ],
                //                     pageTitle: 'Carousel',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/clipboard',
                //                 name: 'extra-component-clipboard',
                //                 component: () => import('@/views/components/extra-components/clipboard/Clipboard.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Clipboard', active: true },
                //                     ],
                //                     pageTitle: 'Clipboard',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/context-menu',
                //                 name: 'extra-component-context-menu',
                //                 component: () => import('@/views/components/extra-components/context-menu/ContextMenu.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Context Menu', active: true },
                //                     ],
                //                     pageTitle: 'Context Menu',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/star-ratings',
                //                 name: 'extra-component-star-ratings',
                //                 component: () => import('@/views/components/extra-components/star-ratings/StarRatings.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Star Ratings', active: true },
                //                     ],
                //                     pageTitle: 'Star Ratings',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/autocomplete',
                //                 name: 'extra-component-autocomplete',
                //                 component: () => import('@/views/components/extra-components/autocomplete/Autocomplete.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Autocomplete', active: true },
                //                     ],
                //                     pageTitle: 'Autocomplete',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/extensions/tree',
                //                 name: 'extra-component-tree',
                //                 component: () => import('@/views/components/extra-components/tree/Tree.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Tree', active: true },
                //                     ],
                //                     pageTitle: 'Tree',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/import-export/import',
                //                 name: 'import-excel',
                //                 component: () => import('@/views/components/extra-components/import-export/Import.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Import/Export' },
                //                         { title: 'Import', active: true },
                //                     ],
                //                     pageTitle: 'Import Excel',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/import-export/export',
                //                 name: 'export-excel',
                //                 component: () => import('@/views/components/extra-components/import-export/Export.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Import/Export' },
                //                         { title: 'Export', active: true },
                //                     ],
                //                     pageTitle: 'Export Excel',
                //                     rule: 'editor'
                //                 },
                //             },
                //             {
                //                 path: '/import-export/export-selected',
                //                 name: 'export-excel-selected',
                //                 component: () => import('@/views/components/extra-components/import-export/ExportSelected.vue'),
                //                 meta: {
                //                     breadcrumb: [
                //                         { title: 'Home', url: '/' },
                //                         { title: 'Extensions' },
                //                         { title: 'Import/Export' },
                //                         { title: 'Export Selected', active: true },
                //                     ],
                //                     pageTitle: 'Export Excel',
                //                     rule: 'editor'
                //                 },
                //             },
                //         ],
                //     },
                // // =============================================================================
                // // FULL PAGE LAYOUTS
                // // =============================================================================
                //     {
                //         path: '',
                //         component: () => import('@/layouts/full-page/FullPage.vue'),
                //         children: [
                //     // =============================================================================
                //     // PAGES
                //     // =============================================================================
                //             {
                //                 path: '/callback',
                //                 name: 'auth-callback',
                //                 component: () => import('@/views/Callback.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/login',
                //                 name: 'page-login',
                //                 component: () => import('@/views/pages/login/Login.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/register',
                //                 name: 'page-register',
                //                 component: () => import('@/views/pages/register/Register.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/forgot-password',
                //                 name: 'page-forgot-password',
                //                 component: () => import('@/views/pages/ForgotPassword.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/reset-password',
                //                 name: 'page-reset-password',
                //                 component: () => import('@/views/pages/ResetPassword.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/lock-screen',
                //                 name: 'page-lock-screen',
                //                 component: () => import('@/views/pages/LockScreen.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/comingsoon',
                //                 name: 'page-coming-soon',
                //                 component: () => import('@/views/pages/ComingSoon.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/error-404',
                //                 name: 'page-error-404',
                //                 component: () => import('@/views/pages/Error404.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/error-500',
                //                 name: 'page-error-500',
                //                 component: () => import('@/views/pages/Error500.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/not-authorized',
                //                 name: 'page-not-authorized',
                //                 component: () => import('@/views/pages/NotAuthorized.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
                //             {
                //                 path: '/pages/maintenance',
                //                 name: 'page-maintenance',
                //                 component: () => import('@/views/pages/Maintenance.vue'),
                //                 meta: {
                //                     rule: 'editor'
                //                 }
                //             },
            ]
        },
        // Redirect to 404 page, if no match found
        {
            path: '*',
            redirect: '/pages/error-404'
        }
    ],
})

router.afterEach(() => {
    // Remove initial loading
    const appLoading = document.getElementById('loading-bg')
    if (appLoading) {
        appLoading.style.display = "none";
    }
})

// router.beforeEach((to, from, next) => {
//     firebase.auth().onAuthStateChanged(() => {
//
//         // get firebase current user
//         const firebaseCurrentUser = firebase.auth().currentUser
//
//         // if (
//         //     to.path === "/pages/login" ||
//         //     to.path === "/pages/forgot-password" ||
//         //     to.path === "/pages/error-404" ||
//         //     to.path === "/pages/error-500" ||
//         //     to.path === "/pages/register" ||
//         //     to.path === "/callback" ||
//         //     to.path === "/pages/comingsoon" ||
//         //     (auth.isAuthenticated() || firebaseCurrentUser)
//         // ) {
//         //     return next();
//         // }
//
//         // If auth required, check login. If login fails redirect to login page
//         if(to.meta.authRequired) {
//           if (!(auth.isAuthenticated() || firebaseCurrentUser)) {
//             router.push({ path: '/pages/login', query: { to: to.path } })
//           }
//         }
//
//         return next()
//         // Specify the current path as the customState parameter, meaning it
//         // will be returned to the application after auth
//         // auth.login({ target: to.path });
//
//     });
//
// });

export default router
