import { GlobalState } from "./types";

const state = (): GlobalState => {
  return {
    isLoggedIn: false,
    user: {},
    jobs: [],
    skillsSearchTerm: "",
    locationsSearchTerm: "",
    remoteSearchTerm: "",
    selectedOrganizations: [],
    selectedJobTypes: [],
    selectedDegrees: [],
  };
};

export default state;
