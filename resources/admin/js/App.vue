<template>
    <main>
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <left-aside></left-aside>
                <!-- END Left Aside -->

                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <page-header></page-header>
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <router-view></router-view>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div
                        class="page-content-overlay"
                        data-action="toggle"
                        data-class="mobile-nav-on"
                    ></div>
                    <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                    <footer></footer>
                    <!-- END Page Footer -->
                    <!-- BEGIN Shortcuts -->
                    <!-- modal shortcut -->
                    <ModalShortcut />
                    <!-- END Shortcuts -->
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import LeftAside from "./components/LeftAside";
import PageHeader from "./components/PageHeader";
import Footer from "./components/Footer";
import ModalShortcut from "./components/ModalShortcut";
export default {
    components: {
        LeftAside,
        PageHeader,
        ModalShortcut,
        Footer
    }
};
</script>
