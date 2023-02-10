<template>
  <div class="flex flex-col h-screen justify-between mt-24">
    <main>

      <div class="w-full border-b border-solid border-brand-gray-1">
        <section class="flex flex-col pt-10 pb-10">
          <div class="grid grid-cols-12">
            <div class="col-start-1 col-span-1"></div>


            <div class="col-start-2 col-span-4  text-4xl font-semibold mt-4">
              Engineering & Technology 
            </div>

            <div class="col-start-7 col-span-5 self-center justify-self-center w-full my-4 text-base">
              You’re a curious and collaborative visionary, someone excited about tackling the hard problems in technology. 
              We are and always will be an engineering company that thinks big and takes risks. 
              Together, we’ll create and iterate on the products and tools of the future—for billions of users.
            </div>

            <div class="col-start-11 col-span-1"></div>
          </div>
        </section>
      </div>

      <div>
        <div class="p-8">
          <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 lg:gap-8">   

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
              @click="searchForFull"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://www.bgosoftware.com/blog/wp-content/uploads/2016/03/insidepost_coding.jpg"
              />
              <div class="h-48 px-6 py-4 mt-1">
                <h3 class="text-lg font-medium">
                    Full stack developer
                </h3>
                <p class="mt-3 text-sm">
                    Design beautiful things for elegant user experiences.
                </p>
              </div>
              <router-link
                @click="searchForFull"
                to="/jobs/results"
                class="px-6 pb-4 text-sm text-brand-blue-1"
                >See jobs
              </router-link
              >
            </router-link>

            <router-link
              @click="searchForTest"
              to="/jobs/results"
              class="flex flex-col mx-5 border shadow-md rounded-lg w-72 bg-brand-gray-2 h-80"
            >
              <img 
                src="https://img.freepik.com/premium-vector/programming-code-icon-made-with-binary-code-coding-hacker-matrix-background-with-digits-1-0_127544-1141.jpg?w=2000"
              />
              <div class="h-48 px-6 py-4 mt-3">
                <h3 class="text-lg font-medium">
                    Test Engineer
                </h3>
                <p class="mt-3 text-sm">
                    Develop massive, complex software systems that scale globally.
                </p>
              </div>
              <router-link
                @click="searchForTest"
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

      const router = useRouter();

      const role = ref("");

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

      const searchForFull = () => {
        router.push({
          name: "JobResults",
          query: { role: role.value="Full"},
        });
      };

      const searchForTest = () => {
        router.push({
          name: "JobResults",
          query: { role: role.value="Test"},
        });
      };

</script>