<template>
  <li class="mb-7">
    <router-link
      :to="jobPageLink"
      class="
        block
        mx-auto
        bg-white
        hover:bg-gray-200
        border border-solid
        rounded
        hover:shadow-gray
      "
    >
      <div class="pt-6 pb-8 mx-8">
        <h2 class="mb-2 text-xl font-semibold">
          {{ job.title }}
        </h2>

        <div class="align-middle">
          <div class="mr-5 text-sm font-semibold">
            <div>{{ job.organization }}</div>
          </div>

          <div class="text-gray-800">
            <ul class="font-semibold text-sm">
              in-office:
              <span class="font-normal">{{ job.locations }}</span>
            </ul>
          </div>
          <div v-if="job.remote == 'yes'" class="font-semibold text-sm">
            Remote eligible
          </div>
        </div>
      </div>
    </router-link>
  </li>
</template>

<script lang="ts">
  import { computed, defineComponent, PropType } from "vue";
  import { Job } from "../../api/types";

  export default defineComponent({
    name: "JobListingSidebar",
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
