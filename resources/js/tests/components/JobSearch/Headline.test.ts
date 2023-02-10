import { nextTick } from "vue";
import { mount } from "@vue/test-utils";

import Headline from "../../../components/JobSearch/Headline.vue";

describe("Headline", () => {
  beforeEach(() => {
    jest.useFakeTimers();
  });

  afterEach(() => {
    jest.useRealTimers();
  });

  it("displays introductory action verb", () => {
    const wrapper = mount(Headline);
    const actionPhrase = wrapper.find("[data-test='action-phrase']");
    expect(actionPhrase.text()).toBe("Build for everyone");
  });

  it("swaps action verb after first interval", async () => {
    const wrapper = mount(Headline);
    jest.runOnlyPendingTimers();
    await nextTick();
    const actionPhrase = wrapper.find("[data-test='action-phrase']");
    expect(actionPhrase.text()).toBe("Create for everyone");
  });

});
