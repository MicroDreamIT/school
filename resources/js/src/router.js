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
                    name: 'studentView',
                    component: () => import('./views/custom/student/details'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student/:id/edit',
                    name: 'studentEdit',
                    component: () => import('./views/custom/student/edit'),
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
                    path: '/student/document/:id/edit',
                    name: 'student.documentEdit',
                    component: () => import('./views/custom/student/documentEdit'),
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
                {
                    path: '/student/note/:id/edit',
                    name: 'student.noteEdit',
                    component: () => import('./views/custom/student/noteEdit'),
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
                    path: '/staff/:id/edit',
                    name: 'staffEdit',
                    component: () => import('./views/custom/staff/edit.vue'),
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
                    path: '/staff/document/:id/edit',
                    name: 'staff.documentEdit',
                    component: () => import('./views/custom/staff/documentEdit.vue'),
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
                    path: '/staff/note/:id/edit',
                    name: 'staff.noteEdit',
                    component: () => import('./views/custom/staff/noteEdit.vue'),
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
                {
                    path: '/staff/designation/:id/edit',
                    name: 'staff.designationEdit',
                    component: () => import('./views/custom/staff/designationEdit.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*guardian*/
                {
                    path: '/guardian',
                    name: 'guardian',
                    component: () => import('./views/custom/guardian/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/guardian/registration',
                    name: 'guardian.create',
                    component: () => import('./views/custom/guardian/registration'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/guardian/:id/details',
                    name: 'guardian.details',
                    component: () => import('./views/custom/guardian/details'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/guardian/:id/edit',
                    name: 'guardianEdit',
                    component: () => import('./views/custom/guardian/edit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*account*/
                {
                    path: '/account/fees',
                    name: 'account.fees',
                    component: () => import('./views/custom/account/fees/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/quick-receive',
                    name: 'account.quickReceive',
                    component: () => import('./views/custom/account/fees/quick-receive'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/collection',
                    name: 'account.collection',
                    component: () => import('./views/custom/account/fees/collect'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/balance',
                    name: 'account.balance',
                    component: () => import('./views/custom/account/fees/balance-report'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/master/add',
                    name: 'account.create',
                    component: () => import('./views/custom/account/fees/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/head',
                    name: 'feesHead',
                    component: () => import('./views/custom/account/fees/fees-head'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/head/1/edit',
                    name: 'feesHeadEdit',
                    component: () => import('./views/custom/account/fees/feesHeadEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/master',
                    name: 'account.master',
                    component: () => import('./views/custom/account/fees/master-detail'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/fees/collection/:id/view',
                    name: 'feesView',
                    component: () => import('./views/custom/account/fees/views'),
                    meta: {
                        rule: 'admin'
                    }
                },

                {
                    path: '/account/payroll',
                    name: 'account.payrollHistory',
                    component: () => import('./views/custom/account/payroll/history'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/salary/payment',
                    name: 'account.salaryPayment',
                    component: () => import('./views/custom/account/payroll/salary-pay'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/payroll/master/add',
                    name: 'account.payrollCreate',
                    component: () => import('./views/custom/account/payroll/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/payroll/balance',
                    name: 'account.payrollBalance',
                    component: () => import('./views/custom/account/payroll/balance-salary'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/payroll/master',
                    name: 'account.payroll',
                    component: () => import('./views/custom/account/payroll/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/payroll/head',
                    name: 'account.payrollHead',
                    component: () => import('./views/custom/account/payroll/payroll-head'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/payroll/head/:id/edit',
                    name: 'payrollHeadEdit',
                    component: () => import('./views/custom/account/payroll/payrollHeadEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },

                {
                    path: '/account/transaction',
                    name: 'account.transaction',
                    component: () => import('./views/custom/account/ledger/transaction-details'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/transaction/add', // @@ 1
                    name: 'transactionCreate',
                    component: () => import('./views/custom/account/ledger/transactionCreate'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/transaction/:id/edit', // @@ 1
                    name: 'transactionEdit',
                    component: () => import('./views/custom/account/ledger/transactionEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/transaction-head',
                    name: 'transactionHead',
                    component: () => import('./views/custom/account/ledger/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/transaction-head/:id/edit',
                    name: 'transactionHeadEdit',
                    component: () => import('./views/custom/account/ledger/edit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank',
                    name: 'account.bank',
                    component: () => import('./views/custom/account/bank/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank/add',
                    name: 'bankCreate',
                    component: () => import('./views/custom/account/bank/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank/:id/edit',
                    name: 'bankEdit',
                    component: () => import('./views/custom/account/bank/edit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank-transaction',
                    name: 'account.bankTransaction',
                    component: () => import('./views/custom/account/bank/transaction-detail'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank-transaction/add',
                    name: 'bankTransactionCreate',
                    component: () => import('./views/custom/account/bank/bank-transaction'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/bank-transaction/:id/edit',
                    name: 'bankTransactionEdit',
                    component: () => import('./views/custom/account/bank/transactionEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/report/cash-book',
                    name: 'account.cashBook',
                    component: () => import('./views/custom/account/report/cash-book'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/account/report/fee-collection-head',
                    name: 'account.collectionHead',
                    component: () => import('./views/custom/account/report/fees-collection-head'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*Library*/
                {
                    path: '/library/book',
                    name: 'library.book',
                    component: () => import('./views/custom/library/books/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/book/add',
                    name: 'library.bookCreate',
                    component: () => import('./views/custom/library/books/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/book/import',
                    name: 'library.bookImport',
                    component: () => import('./views/custom/library/books/import'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/book/category',
                    name: 'library.bookCategory',
                    component: () => import('./views/custom/library/books/category'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/book/:id/view',
                    name: 'library.bookViews',
                    component: () => import('./views/custom/library/books/view'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/member',
                    name: 'library.member',
                    component: () => import('./views/custom/library/members/index.vue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/member/add', // @@ 2
                    name: 'library.memberCreate',
                    component: () => import('./views/custom/library/members/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/student',
                    name: 'library.student',
                    component: () => import('./views/custom/library/members/student'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/staff',
                    name: 'library.staff',
                    component: () => import('./views/custom/library/members/staff'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/issue-history',
                    name: 'library.issueHistory',
                    component: () => import('./views/custom/library/issue-history'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/return-over',
                    name: 'library.returnOver',
                    component: () => import('./views/custom/library/return-period'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/library/circulation',
                    name: 'library.circulation',
                    component: () => import('./views/custom/library/circulation-setting'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*report*/
                {
                    path: '/report/student',
                    name: 'report.student',
                    component: () => import('./views/custom/reports/student'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/report/staff',
                    name: 'report.staff',
                    component: () => import('./views/custom/reports/staff'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*attendance*/
                {
                    path: '/attendance/student',
                    name: 'attendance.student',
                    component: () => import('./views/custom/attendance/student/regular'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/student/add', // @@ 3
                    name: 'attendance.studentCreate',
                    component: () => import('./views/custom/attendance/student/regular-create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/subject',
                    name: 'attendance.subject',
                    component: () => import('./views/custom/attendance/student/subject-wise'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/subject/add', // @@ 4
                    name: 'attendance.subjectCreate',
                    component: () => import('./views/custom/attendance/student/subject-wise-create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/subject/alert', // @@ 5
                    name: 'attendance.subjectAlert',
                    component: () => import('./views/custom/attendance/student/subject-wise-alert'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/staff',
                    name: 'attendance.staff',
                    component: () => import('./views/custom/attendance/staff/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/staff/add', // @@ 6
                    name: 'attendance.staffCreate',
                    component: () => import('./views/custom/attendance/staff/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/master',
                    name: 'attendance.master',
                    component: () => import('./views/custom/attendance/monthly/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance/master/add', // @ 7
                    name: 'attendance.masterCreate',
                    component: () => import('./views/custom/attendance/monthly/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*examination*/
                {
                    path: '/exam',
                    name: 'exam',
                    component: () => import('./views/custom/examination/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/schedule',
                    name: 'exam.schedule',
                    component: () => import('./views/custom/examination/schedule'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/schedule/add', // @@ 8
                    name: 'exam.scheduleCreate',
                    component: () => import('./views/custom/examination/scheduleCreate'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/admit-card',
                    name: 'exam.admitCard',
                    component: () => import('./views/custom/examination/admit-card'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/routine',
                    name: 'exam.routine',
                    component: () => import('./views/custom/examination/routine'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/mark-sheet',
                    name: 'exam.markSheet',
                    component: () => import('./views/custom/examination/mark-sheet'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/mark-ledger',
                    name: 'exam.markLedger',
                    component: () => import('./views/custom/examination/mark-ledger'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/exam/mark-ledger/add', // @@ 9
                    name: 'exam.markLedgerCreate',
                    component: () => import('./views/custom/examination/markLedgerCreate'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*for certificate*/
                {
                    path: '/certificate/issue',
                    name: 'certificate.issue',
                    component: () => import('./views/custom/certificate/issue'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/issue-history',
                    name: 'certificate.issueHistory',
                    component: () => import('./views/custom/certificate/history'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/attendance',
                    name: 'certificate.attendance',
                    component: () => import('./views/custom/certificate/attendence'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/transfer',
                    name: 'certificate.transfer',
                    component: () => import('./views/custom/certificate/transfer'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/bonafide',
                    name: 'certificate.bonafide',
                    component: () => import('./views/custom/certificate/bonafide'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/generate',
                    name: 'certificate.generate',
                    component: () => import('./views/custom/certificate/print'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/template',
                    name: 'certificate.template',
                    component: () => import('./views/custom/certificate/template'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/template/add', // @@ 10
                    name: 'certificate.templateCreate',
                    component: () => import('./views/custom/certificate/templateCreate'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/certificate/course-completion',
                    name: 'certificate.course',
                    component: () => import('./views/custom/certificate/course'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*for hostels*/
                {
                    path: '/hostel',
                    name: 'hostel',
                    component: () => import('./views/custom/hostels/hostel/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/add', // @@ 11
                    name: 'hostel.create',
                    component: () => import('./views/custom/hostels/hostel/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/room-type',
                    name: 'hostel.roomType',
                    component: () => import('./views/custom/hostels/hostel/room-type'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/food',
                    name: 'hostel.food',
                    component: () => import('./views/custom/hostels/food/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/food/eating-time',
                    name: 'hostel.eatingTime',
                    component: () => import('./views/custom/hostels/food/eating-time'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/food/category',
                    name: 'hostel.foodCategory',
                    component: () => import('./views/custom/hostels/food/category'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/food/item',
                    name: 'hostel.foodItem',
                    component: () => import('./views/custom/hostels/food/item'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/resident',
                    name: 'hostel.resident',
                    component: () => import('./views/custom/hostels/resident/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/resident/add',
                    name: 'hostel.residentCreate',
                    component: () => import('./views/custom/hostels/resident/registration'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/hostel/resident/history',
                    name: 'hostel.residentHistory',
                    component: () => import('./views/custom/hostels/resident/history'),
                    meta: {
                        rule: 'admin'
                    }
                },

                /*for transport*/
                {
                    path: '/transport/user',
                    name: 'transport.user',
                    component: () => import('./views/custom/transport/user/detail'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/transport/user/add',
                    name: 'transport.userCreate',
                    component: () => import('./views/custom/transport/user/registration'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/transport/user/history',
                    name: 'transport.history',
                    component: () => import('./views/custom/transport/user/history'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/transport/route',
                    name: 'transport.route',
                    component: () => import('./views/custom/transport/route'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/transport/vehicle',
                    name: 'transport.vehicle',
                    component: () => import('./views/custom/transport/vehicle'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /*for more*/
                {
                    path: '/assignment',
                    name: 'assignment',
                    component: () => import('./views/custom/more/assignment/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/assignment/add', // @@ 12
                    name: 'assignmentCreate',
                    component: () => import('./views/custom/more/assignment/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/download',
                    name: 'download',
                    component: () => import('./views/custom/more/upload-download'),
                    meta: {
                        rule: 'admin'
                    }
                },

                /* for notice*/
                {
                    path: '/info/notice',
                    name: 'info.notice',
                    component: () => import('./views/custom/alert/notice/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/notice/add', // @@ 13
                    name: 'info.noticeCreate',
                    component: () => import('./views/custom/alert/notice/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/sms-email',
                    name: 'info.smsEmail',
                    component: () => import('./views/custom/alert/smsemail/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/sms-email/add', // @@ 14
                    name: 'info.smsEmailCreate',
                    component: () => import('./views/custom/alert/smsemail/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/sms-email/student-guardian', // @@ 15
                    name: 'info.smsEmailStudentGuardian',
                    component: () => import('./views/custom/alert/smsemail/student-guardian'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/sms-email/staff', // @@ 16
                    name: 'info.smsEmailStaff',
                    component: () => import('./views/custom/alert/smsemail/staff'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/info/sms-email/individual', // @@ 17
                    name: 'info.smsEmailIndividual',
                    component: () => import('./views/custom/alert/smsemail/individual'),
                    meta: {
                        rule: 'admin'
                    }
                },

                /* url for academic section */
                {
                    path: '/faculty',
                    name: 'faculty',
                    component: () => import('./views/custom/academics/faculty'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/faculty/:id/edit',
                    name: 'facultyEdit',
                    component: () => import('./views/custom/academics/facultyEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/semester',
                    name: 'academics.semester',
                    component: () => import('./views/custom/academics/semester'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/semester/:id/edit',
                    name: 'semesterEdit',
                    component: () => import('./views/custom/academics/semesterEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student-batch',
                    name: 'academics.batch',
                    component: () => import('./views/custom/academics/batch'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student-batch/:id/edit',
                    name: 'batchEdit',
                    component: () => import('./views/custom/academics/batchEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/grading',
                    name: 'academics.grading',
                    component: () => import('./views/custom/academics/grading'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/grading/:id/edit',
                    name: 'gradingEdit',
                    component: () => import('./views/custom/academics/gradingEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/subject',
                    name: 'academics.subject',
                    component: () => import('./views/custom/academics/subject'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student-status',
                    name: 'academics.student-status',
                    component: () => import('./views/custom/academics/student-status'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/student-status/:id/edit',
                    name: 'studentStatusEdit',
                    component: () => import('./views/custom/academics/studentStatusEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance-status',
                    name: 'academics.attendance-status',
                    component: () => import('./views/custom/academics/attendance-status'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/attendance-status/:id/edit',
                    name: 'attendanceStatusEdit',
                    component: () => import('./views/custom/academics/attendanceStatusEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/books-status',
                    name: 'academics.books-status',
                    component: () => import('./views/custom/academics/books-status'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/books-status/:id/edit',
                    name: 'bookStatusEdit',
                    component: () => import('./views/custom/academics/bookStatusEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/bed-status',
                    name: 'academics.bed-status',
                    component: () => import('./views/custom/academics/hostel-status'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/year',
                    name: 'academics.year',
                    component: () => import('./views/custom/academics/year'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/year/:id/edit',
                    name: 'yearEdit',
                    component: () => import('./views/custom/academics/yearEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/month',
                    name: 'academics.month',
                    component: () => import('./views/custom/academics/month'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/month/:id/edit',
                    name: 'monthEdit',
                    component: () => import('./views/custom/academics/monthEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/day',
                    name: 'academics.day',
                    component: () => import('./views/custom/academics/day'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/day/:id/edit',
                    name: 'dayEdit',
                    component: () => import('./views/custom/academics/dayEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/payment-method',
                    name: 'academics.paymentMethod',
                    component: () => import('./views/custom/academics/payment-method'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/payment-method/:id/edit',
                    name: 'paymentMethodEdit',
                    component: () => import('./views/custom/academics/paymentEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },

                /* url for academic section end */

                /* url for more section start */
                {
                    path: '/assignment',
                    name: 'more.assignment.index',
                    component: () => import('./views/custom/more/assignment/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/assignment/add', // @@ 18
                    name: 'more.assignment.create',
                    component: () => import('./views/custom/more/assignment/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/download',
                    name: 'more.upload-download',
                    component: () => import('./views/custom/more/upload-download'),
                    meta: {
                        rule: 'admin'
                    }
                },

                /*user rout*/
                {
                    path: '/user',
                    name: 'user',
                    component: () => import('./views/custom/user/index'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/user/add',
                    name: 'userCreate',
                    component: () => import('./views/custom/user/create'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/user/:id/edit',
                    name: 'userEdit',
                    component: () => import('./views/custom/user/edit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/role',
                    name: 'userRole',
                    component: () => import('./views/custom/user/role-access'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/role/:id/edit',
                    name: 'userRoleEdit',
                    component: () => import('./views/custom/user/roleEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/super-suit/user-activity',
                    name: 'userActivity',
                    component: () => import('./views/custom/user/activity'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/general',
                    name: 'generalSetting',
                    component: () => import('./views/custom/user/general-setting'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/sms',
                    name: 'smsSetting',
                    component: () => import('./views/custom/user/sms-setting'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/email',
                    name: 'emailSetting',
                    component: () => import('./views/custom/user/email-setting'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/alert',
                    name: 'alertSetting',
                    component: () => import('./views/custom/user/alert-setting'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/alert/:id/edit',
                    name: 'alertSettingEdit',
                    component: () => import('./views/custom/user/alertEdit'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/setting/payment-gateway',
                    name: 'paymentSetting',
                    component: () => import('./views/custom/user/payment-gateway'),
                    meta: {
                        rule: 'admin'
                    }
                },
                {
                    path: '/user/profile',
                    name: 'userProfile',
                    component: () => import('./views/custom/user/profile'),
                    meta: {
                        rule: 'admin'
                    }
                },
                /* url for more section end */


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
