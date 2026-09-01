<template>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link"
                data-lte-toggle="sidebar"
                href="#"
                role="button"
                aria-label="Toggle sidebar"
              >
                <i class="bi bi-list">O</i>
              </a>
            </li>

            <li class="nav-item d-none d-md-block">
              <a href="./index.html" class="nav-link">
                <i class="bi bi-grid-1x2 me-1" aria-hidden="true"></i>
                Live preview
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="./docs/introduction.html" class="nav-link">
                <i class="bi bi-book me-1" aria-hidden="true"></i>
                Documentation
              </a>
            </li>
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->

      <Menu />

      <div class="content-wrapper">
        <slot />
      </div>

      <Footer />

    </div>
    <!--end::App Wrapper-->
</template>

<script setup>
import Footer from './Partials/Footer.vue';
import Menu from './Partials/Menu.vue';
</script>