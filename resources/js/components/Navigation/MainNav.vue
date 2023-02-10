<template>
  <div class="fixed top-0 left-0 w-full h-16 bg-white">
    <div
      class="
        flex flex-nowrap
        h-full
        px-8
        mx-auto
        border-b border-solid border-brand-gray-1
      "
    >
      <router-link
        :to="{ name: 'Home' }"
        class="flex items-center h-full text-xl"
      >
        Corp Careers
      </router-link>

      <nav class="h-full ml-12">
        <ul class="flex h-full p-0 m-0 list-none">
          <ul class="flex h-full p-0 m-0 list-none">
            <li
              v-for="menuItem in menuItems"
              :key="menuItem.text"
              class="h-full ml-9 first:ml-0"
              data-test="main-nav-list-item"
            >
              <router-link
                :to="menuItem.url"
                class="flex items-center h-full py-2.5"
              >
                {{ menuItem.text }}
              </router-link>
            </li>
          </ul>
        </ul>
      </nav>
      <div class="flex items-center h-full ml-auto">
        <!-- Not implemented -->
        <profile-image v-if="isLoggedIn" data-test="profile-image" />
        <action-button
          v-else
          text="Sign in"
          data-test="login-button"
          @click="LOGIN_USER()"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
  import { defineComponent } from "vue";

  import { mapMutations, mapState } from "vuex";

  import ActionButton from "../Shared/ActionButton.vue";
  import ProfileImage from "./ProfileImage.vue";
  import Subnav from "./Subnav.vue";

  import { LOGIN_USER } from "../../store/constants";

  export default defineComponent({
    name: "MainNav",
    components: {
      ActionButton,
      ProfileImage,
      Subnav,
    },
    data() {
      return {
        menuItems: [
          { text: "Teams", url: "/teams" },
          { text: "Locations", url: "/locations" },
          { text: "Jobs", url: "/jobs/results" },
        ],
        showNavbar: true,
        lastScrollPosition: 0,
      };
    },
    computed: {
      ...mapState(["isLoggedIn"]),
    },
    methods: {
      LOGIN_USER() {
        this.$router.push({ name: "Login" });
      },
      ...mapMutations([]),
      onScroll() {
        const currentScrollPosition =
          window.pageYOffset || document.documentElement.scrollTop;
        if (currentScrollPosition < 0) {
          return;
        }
        if (Math.abs(currentScrollPosition - this.lastScrollPosition) < 60) {
          return;
        }
        this.showNavbar = currentScrollPosition < this.lastScrollPosition;
        this.lastScrollPosition = currentScrollPosition;
      },
    },

    mounted() {
      window.addEventListener("scroll", this.onScroll);
    },
    beforeDestroy() {
      window.removeEventListener("scroll", this.onScroll);
    },
  });
</script>

<style>
* {
  box-sizing: border-box;
}
body {
  padding: 0;
  margin: 0;
}
.app {
  width: 100vw;
  height: 500vh;
  background: hsl(200, 50%, 90%);
}
.navbar {
  height: 60px;
  width: 100vw;
  background: hsl(200, 50%, 50%);
  position: fixed;
  box-shadow: 0 2px 15px rgba(71, 120, 120, 0.5);
  transform: translate3d(0, 0, 0);
  transition: 0.1s all ease-out;
}
.navbar.navbar--hidden {
  box-shadow: none;
  transform: translate3d(0, -100%, 0);
}
.router-link-active {
  outline: none !important;
}
.router-link-active {
  color: #000;
  border-bottom: 2px solid #000;
}

</style>