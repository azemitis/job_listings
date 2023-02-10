<template>
  <div class="flex flex-col h-screen justify-between mt-16">
    <main>

      <header-container>
    <template #title>
      <h1 class="w-full text-4xl font-normal mb-auto">Locations</h1>
    </template>

    <template #subtitle>
      <h2 class="w-full my-4 text-base font-light">
        Large or small, each one of our offices is designed to inspire innovation, big ideas, and community.
      </h2>
    </template>
  </header-container>

      <div>
        <div class="p-8">
          <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 lg:gap-8">   

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
                    Join our team in Riga. 
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

            <router-link
              @click="searchForTallin"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://d1nslcd7m2225b.cloudfront.net/Pictures/1024x536/9/2/0/1250920_Tallinn-Black-Nights-POFF.jpg"
              />
              <div class="h-48 px-6 py-4 mt-4">
                <h3 class="text-lg font-medium">
                  Tallin
                </h3>
                <p class="mt-3 text-sm">
                    Join our team in Tallin. 
                </p>
              </div>
              <router-link
                @click="searchForTallin"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForOslo"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://travelfoot.com/wp-content/uploads/2020/06/how-to-go-from-oslo-to-stockholm.jpg"
              />
              <div class="h-48 px-6 py-4 mt-1">
                <h3 class="text-lg font-medium">
                    Oslo
                </h3>
                <p class="mt-3 text-sm">
                    Join our team in Oslo. 
                </p>
              </div>
              <router-link
                @click="searchForOslo"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForBerlin"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://media.timeout.com/images/105303515/750/422/image.jpg"
              />
              <div class="h-48 px-6 py-4 mt-3">
                <h3 class="text-lg font-medium">
                    Berlin
                </h3>
                <p class="mt-3 text-sm">
                    Join our team in Berlin. 
                </p>
              </div>
              <router-link
                @click="searchForBerlin"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

          </div>
      </div>

      </div>

    </main>
    <footer class="px-10 mx-10 ml-10 pl-10">
      <Footer/>
    </footer>
  </div>

</template>


<script setup lang="ts">
  import { ref } from "vue";
  import { useRouter } from "vue-router";
  import Footer from "@/components/Navigation/Footer.vue";
  import HeaderContainer from "@/components/Shared/HeaderContainer.vue";


      const router = useRouter();

      const location = ref("");

      const searchForRiga = () => {
        router.push({
          name: "JobResults",
          query: { location: location.value="Riga"},
        });
      };

      const searchForTallin = () => {
        router.push({
          name: "JobResults",
          query: { location: location.value="Tallin"},
        });
      };

      const searchForOslo = () => {
        router.push({
          name: "JobResults",
          query: { location: location.value="Oslo"},
        });
      };

      const searchForBerlin = () => {
        router.push({
          name: "JobResults",
          query: { location: location.value="Berlin"},
        });
      };

</script>