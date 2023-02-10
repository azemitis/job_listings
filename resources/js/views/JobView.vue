<template>
  <subnav />
  <div class="w-full h-16 bg-white border-b border-solid border-brand-gray-1">
    <div class="flex items-center h-full px-8">
      <div>
        <font-awesome-icon :icon="['fas', 'search']" class="mr-3" />
        <span
          ><span class="text-brand-green-1">{{ FILTERED_JOBS.length }}</span>
          jobs matched</span
        >
      </div>
    </div>
  </div>

  <main class="flex flex-col h-screen bg-brand-gray-2">
    <section class="flex flex-col pt-10">
      <div class="grid grid-cols-8 bg-brand-gray-2">
        <div class="col-start-1 col-span-2 bg-brand-gray-2">
          <div>
            <img
              v-if="job === null"
              src="https://i.stack.imgur.com/h6viz.gif"
              alt="Loading"
            />
            <div v-else>
              <job-listings-sidebar />
            </div>
          </div>
        </div>
        <div class="col-start-3 col-span-6">
          <div class="flex-auto p-8 bg-brand-gray-2">
            <div>
              <img
                v-if="job === null"
                src="https://i.stack.imgur.com/h6viz.gif"
                alt="Loading"
              />
              <div v-else>
                <div
                  class="
                    block
                    mx-auto
                    bg-white
                    border border-solid border-brand-gray-2
                    shadow-md
                    rounded
                  "
                >
                  <div
                    class="
                      pt-5
                      pb-10
                      mx-8
                      border-b border-solid border-gray-200
                    "
                  >
                    <h2 class="mb-2 text-2xl font-semibold">
                      {{ job.title }}
                    </h2>

                    <div class="flex flex-row align-middle">
                      <div class="mr-5">
                        <span>{{ job.organization }}</span>
                      </div>

                      <div class="text-gray-800">
                        <ul class="font-semibold">
                          in-office:
                          <span class="font-normal">{{ job.locations }}</span>
                        </ul>
                      </div>
                      <div
                        v-if="job.remote == 'yes'"
                        class="font-semibold ml-5"
                      >
                        Remote eligible
                      </div>
                    </div>
                  </div>

                  <div
                    class="
                      px-8
                      py-4
                      pt-5
                      pb-10
                      mx-8
                      border-b border-solid border-gray-200
                    "
                  >
                    <div>
                      <h3 class="mt-1 mb-2 font-semibold">
                        Minimum qualifications:
                      </h3>
                      <div>
                        <ul class="pl-8 list-disc">
                          <li class="text-black">
                            <span class="text-black">
                              {{ job.degree }} degree in a relevant field, or
                              equivalent practical experience.
                            </span>
                          </li>
                          <div
                            v-for="minimum in job.minimumQualifications
                              .slice(0, -1)
                              .split('.')"
                            :key="minimum"
                          >
                            <li>
                              <span class="text-black">{{ minimum }}.</span>
                            </li>
                          </div>
                        </ul>
                      </div>
                      <h3 class="mt-7 mb-2 font-semibold">
                        Preffered qualifications:
                      </h3>
                      <div>
                        <ul class="pl-8 list-disc">
                          <li class="text-black">
                            <span class="text-black">
                              {{ job.degree }} degree in a relevant field, or
                              equivalent practical experience.</span
                            >
                          </li>
                          <div
                            v-for="preffered in job.preferredQualifications
                              .slice(0, -1)
                              .split('.')"
                            :key="preffered"
                          >
                            <li>
                              <span class="text-black">{{ preffered }}.</span>
                            </li>
                          </div>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div
                    class="
                      pt-4
                      pb-10
                      mx-8
                      border-b border-solid border-gray-200
                    "
                  >
                    <h2 class="mb-3 mt-3 pb-5 text-2xl font-semibold">
                      About Job
                    </h2>
                    <div>{{ job.aboutJob }}</div>
                  </div>

                  <div class="pl-8 border-solid border-gray-200 mb-8">
                    <h2 class="mt-3 pb-3 text-2xl font-semibold">
                      Responsibilities
                    </h2>
                    <div
                      v-for="responsibility in job.responsibilities
                        .slice(0, -1)
                        .split('.')"
                      :key="responsibility"
                    >
                      <li class="mx-8">
                        <span class="text-black">{{ responsibility }}.</span>
                      </li>
                    </div>
                  </div>

                  <div>
                    <div class="mx-8 mt-3 pb-3">
                      Send the application to {{ job.email }}. Application deadline: <b>{{ job.day }}.{{ job.month }}.{{ job.year }}</b>.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <Footer />
          </div>
        </div>
      </div>
    </section>
  </main>
</template>


<script setup>
  import axios from "axios";
  import { ref, onMounted } from "vue";
  import { useRoute, useRouter } from "vue-router";
  import Footer from "@/components/Navigation/Footer.vue";
  import { useFilteredJobs } from "../store/composables";
  import JobListingsSidebar from "../components/JobResults/JobListingsSidebar.vue";
  import Subnav from "@/components/Navigation/Subnav.vue";

  const job = ref(null);
  const route = useRoute();
  const router = useRouter();

  const FILTERED_JOBS = useFilteredJobs();

  onMounted(async () => {
    try {
      const response = await axios.get(`/api/jobs/${route.params.id}`);
      job.value = response.data.data;
      job.value.email = job.value.email.replace("@", "[at]");
    } catch (e) {
      if (e.response && e.response.status && 404 === e.response.status) {
        router.push({
          name: "JobResults",
        });
      }
    }
  });
</script>