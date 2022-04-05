import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode:"history",
    routes:[
        {
            path:'/admin/main',
            component: () => import('./components/admin/admin_components/MainComponent'),
            name:'admin.main'
        },
        //Lessons routes
        {
            path:'/admin/lesson',
            component: () => import('./components/admin/admin_components/lesson/Index'),
            name:'admin.lessons'
        },
        {
            path:'/admin/lesson/:id',
            component: () => import('./components/admin/admin_components/lesson/Show'),
            name:'admin.lesson.show'
        },
        {
            path:'/admin/lesson/:id/edit',
            component: () => import('./components/admin/admin_components/lesson/Edit'),
            name:'admin.lesson.edit'
        },
        {
            path:'/admin/lesson/:id/delete',
            component: () => import('./components/admin/admin_components/lesson/Delete'),
            name:'admin.lesson.delete'
        },

        //Klasses routes

        {
            path:'/admin/klasses',
            component: () => import('./components/admin/admin_components/Klass/Index'),
            name:'admin.klasses'
        },
        {
            path:'/admin/klass/:id',
            component: () => import('./components/admin/admin_components/Klass/Show'),
            name:'admin.klass.show'
        },
        {
            path:'/admin/klass/:id/edit',
            component: () => import('./components/admin/admin_components/Klass/Edit'),
            name:'admin.klass.edit'
        },
        {
            path:'/admin/klass/:id/delete',
            component: () => import('./components/admin/admin_components/Klass/Delete'),
            name:'admin.klass.delete'
        },

    //    Teachers routes

        {
            path:'/admin/teachers',
            component: () => import('./components/admin/admin_components/Teacher/Index'),
            name:'admin.teachers'
        },
        {
            path:'/admin/teacher/create',
            component: () => import('./components/admin/admin_components/Teacher/Create'),
            name:'admin.teacher.create'
        },
        {
            path:'/admin/teacher/:id',
            component: () => import('./components/admin/admin_components/Teacher/Show'),
            name:'admin.teacher.show'
        },
        {
            path:'/admin/teacher/:id/edit',
            component: () => import('./components/admin/admin_components/Teacher/Edit'),
            name:'admin.teacher.edit'
        },
        {
            path:'/admin/teacher/:id/delete',
            component: () => import('./components/admin/admin_components/Teacher/Delete'),
            name:'admin.teacher.delete'
        },
    //    Students routes
        {
            path:'/admin/students',
            component: () => import('./components/admin/admin_components/Student/Index'),
            name:'admin.students'
        },
        {
            path:'/admin/student/create',
            component: () => import('./components/admin/admin_components/Student/Create'),
            name:'admin.student.create'
        },
        {
            path:'/admin/student/:id',
            component: () => import('./components/admin/admin_components/Student/Show'),
            name:'admin.student.show'
        },
        {
            path:'/admin/student/:id/edit',
            component: () => import('./components/admin/admin_components/Student/Edit'),
            name:'admin.student.edit'
        },
        {
            path:'/admin/student/:id/delete',
            component: () => import('./components/admin/admin_components/Student/Delete'),
            name:'admin.student.delete'
        },

    //    Plan
        {
            path:'/admin/plans',
            component: () => import('./components/admin/admin_components/Plan/Index'),
            name:'admin.plans'
        },
        {
            path:'/admin/plans/create',
            component: () => import('./components/admin/admin_components/Plan/Create'),
            name:'admin.plans.create'
        },
        {
            path:'/admin/plans/:id',
            component: () => import('./components/admin/admin_components/Plan/Show'),
            name:'admin.plans.show'
        },
        {
            path:'/admin/plan/:id/edit',
            component: () => import('./components/admin/admin_components/Plan/Edit'),
            name:'admin.plan.edit'
        },
        {
            path:'/admin/plan/:id/delete',
            component: () => import('./components/admin/admin_components/Plan/Delete'),
            name:'admin.plan.delete'
        },

    ]
})
