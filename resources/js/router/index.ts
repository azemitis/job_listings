import { createRouter, createWebHistory } from "vue-router";

const HomeView = () => import("@/views/HomeView.vue");
const JobResultsView = () => import("@/views/JobResultsView.vue");
const JobView = () => import("@/views/JobView.vue");
const TeamsView = () => import("@/views/TeamsView.vue");
const LocationsView = () => import("@/views/LocationsView.vue");
const NotFound = () => import("@/views/NotFound.vue");
const LoginRedirect = () => import("@/auth/LoginRedirect.vue");

const routes = [
    {
        path: "/",
        name: "Home",
        component: HomeView,
    },
    {
        path: "/jobs/results",
        name: "JobResults",
        component: JobResultsView,
    },
    {
        path: "/teams",
        name: "Teams",
        component: TeamsView,
    },
    {
        path: "/locations",
        name: "Locations",
        component: LocationsView,
    },
    {
        path: "/jobs/results/:id",
        name: "JobView",
        component: JobView,
    },
    {
        path: "/login",
        name: "Login",
        component: LoginRedirect,
    },
    /** All the rest of the routes go here: */
    {
        path: "/:pathMatch(.*)",
        name: "404",
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return {
            top: 0,
            left: 0,
            behavior: "smooth",
        };
    },
});

export default router;
