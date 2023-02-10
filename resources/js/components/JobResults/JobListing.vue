<template>
  <li class="mb-7">
    <router-link
      :to="jobPageLink"
      class="
        block
        mx-auto
        bg-white
        border border-solid border-brand-gray-2
        rounded
        hover:shadow-gray
      "
    >
      <div class="pt-5 pb-2 mx-8 border-b border-solid border-brand-gray-2">
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

          <div v-if="job.remote == 'yes'" class="font-semibold ml-5">
            Remote eligible
          </div>
        </div>
      </div>

      <div class="px-8 py-4">
        <div>
          <h3 class="mt-1 mb-2 font-semibold">Qualifications</h3>
          <div>
            <ul class="pl-8 list-disc">
              <li>
                {{ job.degree }} degree in a relevant field, or equivalent
                practical experience.
              </li>
              <div
                v-for="minimum in job.minimumQualifications
                  .toString()
                  .split('.')"
                :key="minimum"
              >
                <li>
                  <span class="text-black">{{ minimum }}.</span>
                </li>
              </div>
            </ul>
          </div>
        </div>

        <div class="mt-4 text-center text-sm">
          <router-link
            :to="jobPageLink"
            class="
              text-brand-blue-1
              outline-none
              hover:outline-brand-blue-1
              p-1
            "
            >Expand</router-link
          >
        </div>
      </div>
    </router-link>
  </li>
</template>

<script lang="ts">
  import { computed, defineComponent, PropType } from "vue";
  import { Job } from "../../api/types";

  export default defineComponent({
    name: "JobListing",
    props: {
      job: {
        type: Object as PropType<Job>,
        required: true,
      },
    },
    setup(props) {
      const jobPageLink = computed(() => `/jobs/results/${props.job.id}`);
      return { jobPageLink };
    },
  });
</script>
