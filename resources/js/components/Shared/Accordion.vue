<template>
  <div class="py-5 border-b border-solid border-brand-gray-2">
    <div
      class="flex flex-wrap items-center justify-between cursor-pointer"
      data-test="clickable-area"
      @click="open"
    >
      <h3 class="text-base font-semibold">{{ header }}</h3>
      <font-awesome-icon :icon="caretIcon" />
    </div>
    <Transition mode="out-in">
      <div v-if="isOpen" class="w-full mt-5">
        <slot>
          <p>Whoops, somebody forgot to populate me!</p>
        </slot>
      </div>
    </Transition>
  </div>
</template>

<script lang="ts">
  import { computed, ref, defineComponent } from "vue";

  export default defineComponent({
    name: "Accordion",
    props: {
      header: {
        type: String,
        required: true,
      },
    },
    setup() {
      const isOpen = ref(false);

      const open = () => {
        isOpen.value = !isOpen.value;
      };

      const caretIcon = computed(() =>
        isOpen.value ? ["fas", "angle-up"] : ["fas", "angle-down"]
      );

      return { open, isOpen, caretIcon };
    },
  });
</script>



<style scoped>
.v-enter-from,
.v-leave-to {
  opacity: 0;
}
.v-enter-to,
.v-leave-from {
  opacity: 1;
}
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s;
}
</style>
