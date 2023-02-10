<template>
  <div class="mt-5">
    <fieldset>
      <ul class="flex flex-row flex-wrap">
        <li v-for="value in uniqueValues" :key="value" class="w-1/2 h-8">
          <input
            :id="value"
            v-model="selectedValues"
            :value="value"
            type="checkbox"
            class="
              mr-3
              w-4
              h-4
              text-green-600
              bg-gray-100
              rounded
              border-gray-300
              focus:ring-green-500
              dark:focus:ring-green-600 dark:ring-offset-gray-800
              focus:ring-2
              dark:bg-gray-700 dark:border-gray-600
            "
            :data-test="value"
            @change="selectValue"
          />
          <label :for="value" data-test="value">{{ value }}</label>
        </li>
      </ul>
    </fieldset>
  </div>
</template>

<script lang="ts">
  import { ref, defineComponent, PropType } from "vue";
  import { useStore } from "vuex";
  import { useRouter } from "vue-router";

  import { key } from "../../../store";
  import { CLEAR_USER_JOB_FILTER_SELECTIONS } from "../../../store/constants";

  export default defineComponent({
    name: "JobFiltersSidebarCheckboxGroup",
    props: {
      uniqueValues: {
        type: [Array, Set] as PropType<string[] | Set<string>>,
        required: true,
      },
      mutation: {
        type: String,
        required: true,
      },
    },
    setup(props) {
      const store = useStore(key);
      const router = useRouter();

      const selectedValues = ref<string[]>([]);

      store.subscribe((mutation) => {
        if (mutation.type === CLEAR_USER_JOB_FILTER_SELECTIONS) {
          selectedValues.value = [];
        }
      });

      const selectValue = () => {
        store.commit(props.mutation, selectedValues.value);
        router.push({ name: "JobResults" });
      };

      return { selectedValues, selectValue };
    },
  });
</script>

