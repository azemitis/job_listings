import { mount } from "@vue/test-utils";

import { useUniqueDegrees } from "../../../../store/composables";
jest.mock("../../../../store/composables");
const useUniqueDegreesMock = useUniqueDegrees as jest.Mock;

import JobFiltersSidebarDegrees from "../../../../components/JobResults/JobFiltersSidebar/JobFiltersSidebarDegrees.vue";

describe("JobFiltersSidebarDegrees", () => {
  it("allows user to filter jobs by degrees", () => {
    useUniqueDegreesMock.mockReturnValue(["Associate", "Bachelor's"]);
    const wrapper = mount(JobFiltersSidebarDegrees, {
        global: {
          stubs: {
              JobFiltersSidebarCheckboxGroup: true
          },
        },
      });
    const degreesFilter = wrapper.findComponent({
      name: "JobFiltersSidebarCheckboxGroup",
    });
    const { uniqueValues, mutation } = degreesFilter.props();
    expect(uniqueValues).toEqual(["Associate", "Bachelor's"]);
    expect(mutation).toBe("ADD_SELECTED_DEGREES");
  });
});
