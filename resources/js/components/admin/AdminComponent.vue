<template>
    <div>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Завуч</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Бектемир Кумарбай уулу</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li>
                        <router-link :to="{name:'admin.main'}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'admin.lessons'}" class="nav-link">
                            <i class="nav-icon fas fa-align-justify"></i>
                            <p>
                                Сабактар
                            </p>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'admin.klasses'}" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Класстар
                            </p>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'admin.teachers'}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Мугалимдер
                            </p>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'admin.students'}" class="nav-link">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Окуучулар
                            </p>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'admin.plans'}" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                Сабак пландары
                            </p>
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

        <router-view></router-view>
    </div>


</template>

<script>

    export default {
        name:"AdminComponent"
    }
</script>

<style scoped>

</style>
