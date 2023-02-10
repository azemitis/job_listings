<template>
  <main class="flex flex-col h-screen mt-24">
    <section class="flex flex-col pt-10 pb-20">
      <div class="grid grid-cols-12">
        <div class="col-start-1 col-span-1"></div>

        <div class="col-start-2 col-span-5">
          <headline />
          <job-search-form />
        </div>

        <div class="col-start-7 col-span-5 self-center justify-self-center">
          <img
            class="w-80 h-80 object-contain"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/2367px-Vue.js_Logo_2.svg.png"
          />
        </div>

        <div class="col-start-12 col-span-1"></div>
      </div>
    </section>


    <section>
        <div class="p-8">
          <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 lg:gap-8">   

            <router-link
              @click="searchForRemote"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://img.freepik.com/premium-vector/programming-code-icon-made-with-binary-code-coding-hacker-matrix-background-with-digits-1-0_127544-1141.jpg?w=2000"
              />
              <div class="h-48 px-6 py-4 mt-3">
                <h3 class="text-lg font-medium">
                    Remote jobs
                </h3>
                <p class="mt-3 text-sm">
                    Jobs available remotely.
                </p>
              </div>
              <router-link
                @click="searchForRemote"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForLaravel"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://www.abcrnews.com/wp-content/uploads/2018/12/Best-Cloud-Computing-Service.jpg"
              />
              <div class="h-48 px-6 py-4 mt-3">
                <h3 class="text-lg font-medium">
                  Laravel developer
                </h3>
                <p class="mt-3 text-sm">
                    Develop the websites and tools of the future for billions of users. 
                </p>
              </div>
              <router-link
                @click="searchForLaravel"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForVue"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2Fa90dda66-88f5-11ec-8600-c48a9935f856.jpg?crop=7360%2C4140%2C0%2C383&resize=360"
              />
              <div class="h-48 px-6 py-4 mt-3">
                <h3 class="text-lg font-medium">
                  Vue developer
                </h3>
                <p class="mt-3 text-sm">
                    Develop enterprise applications, and integrate third party systems.
                </p>
              </div>
              <router-link
                @click="searchForVue"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForRiga"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://cdn.theculturetrip.com/images/56-3700189-800px-riga-central-market.jpg"
              />
              <div class="h-48 px-6 py-4 mt-0">
                <h3 class="text-lg font-medium">
                  Riga
                </h3>
                <p class="mt-3 text-sm">
                    Jobs available in our Riga office. 
                </p>
              </div>
              <router-link
                @click="searchForRiga"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

          </div>
      </div>
    </section>


    
    <footer>
      <Fullfooter />
    </footer>
  </main>
</template>

<script setup lang="ts">
  import { useRouter } from "vue-router";

  import { defineComponent, ref } from "vue";

  import Headline from "@/components/JobSearch/Headline.vue";
  import JobSearchForm from "@/components/JobSearch/JobSearchForm.vue";
  import Fullfooter from "@/components/Navigation/Fullfooter.vue";

  const router = useRouter();

  const role = ref("");
  const remote = ref("");
  const location = ref("");


  const searchForLaravel = () => {
    router.push({
      name: "JobResults",
      query: { role: role.value="Laravel"},
    });
  };

  const searchForVue = () => {
    router.push({
      name: "JobResults",
      query: { role: role.value="Vue"},
    });
  };

  const searchForRiga = () => {
    router.push({
      name: "JobResults",
      query: { location: location.value="Riga"},
    });
  };

  const searchForRemote = () => {
    router.push({
      name: "JobResults",
      query: { remote: remote.value="yes"},
    });
  };

</script>
