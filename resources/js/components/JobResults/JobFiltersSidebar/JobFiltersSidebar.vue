<template>
  <div
    class="
      flex flex-col
      p-4
      bg-white
      border-r border-solid border-brand-gray-1
      w-96
    "
  >
    <section class="pb-5">
      <job-filters-sidebar-prompt />

      <accordion header="Skills and Qualifications">
        <job-filters-sidebar-skills />
      </accordion>

      <accordion header="Locations">
        <job-filters-sidebar-locations />
      </accordion>

      <accordion header="Degrees">
        <job-filters-sidebar-degrees />
      </accordion>

      <accordion header="Job Types">
        <job-filters-sidebar-job-types />
      </accordion>

      <accordion header="Organizations">
        <job-filters-sidebar-organizations />
      </accordion>
    </section>
  </div>
</template>

<script lang="ts">
  import { defineComponent, onMounted } from "vue";
  import { useStore } from "vuex";
  import { useRoute } from "vue-router";

  import { key } from "../../../store";
  import {
    UPDATE_SKILLS_SEARCH_TERM,
    UPDATE_LOCATIONS_SEARCH_TERM,
    UPDATE_REMOTE_SEARCH_TERM,
  } from "../../../store/constants";

  import Accordion from "../../Shared/Accordion.vue";

  import JobFiltersSidebarPrompt from "./JobFiltersSidebarPrompt.vue";
  import JobFiltersSidebarSkills from "./JobFiltersSidebarSkills.vue";
  import JobFiltersSidebarLocations from "./JobFiltersSidebarLocations.vue";
  import JobFiltersSidebarDegrees from "./JobFiltersSidebarDegrees.vue";
  import JobFiltersSidebarJobTypes from "./JobFiltersSidebarJobTypes.vue";
  import JobFiltersSidebarOrganizations from "./JobFiltersSidebarOrganizations.vue";

  export default defineComponent({
    name: "JobFiltersSidebar",
    components: {
      Accordion,
      JobFiltersSidebarPrompt,
      JobFiltersSidebarDegrees,
      JobFiltersSidebarJobTypes,
      JobFiltersSidebarOrganizations,
      JobFiltersSidebarSkills,
      JobFiltersSidebarLocations,
    },
    setup() {
      const parseSkillsSearchTerm = () => {
        const route = useRoute();
        const role = route.query.role || "";
        const store = useStore(key);
        store.commit(UPDATE_SKILLS_SEARCH_TERM, role);
      };
      const parseLocationsSearchTerm = () => {
        const route = useRoute();
        const location = route.query.location || "";
        const store = useStore(key);
        store.commit(UPDATE_LOCATIONS_SEARCH_TERM, location);
      };
        const parseRemoteSearchTerm = () => {
        const route = useRoute();
        const remote = route.query.remote || "";
        const store = useStore(key);
        store.commit(UPDATE_REMOTE_SEARCH_TERM, remote);
      };
      onMounted(parseSkillsSearchTerm);
      onMounted(parseLocationsSearchTerm);
      onMounted(parseRemoteSearchTerm);
    },

  });
</script>
