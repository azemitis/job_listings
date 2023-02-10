import {
  LOGIN_USER,
  SET_USER,
  SET_LOGGED_IN,
  RECEIVE_JOBS,
  ADD_SELECTED_ORGANIZATIONS,
  ADD_SELECTED_JOB_TYPES,
  ADD_SELECTED_DEGREES,
  UPDATE_SKILLS_SEARCH_TERM,
  UPDATE_LOCATIONS_SEARCH_TERM,
  UPDATE_REMOTE_SEARCH_TERM,
  CLEAR_USER_JOB_FILTER_SELECTIONS,
} from "./constants";

import { GlobalState } from "./types";
import { Job } from "../api/types";

const mutations = {
  [LOGIN_USER](state: GlobalState) {
    state.isLoggedIn = true;
  },
  [SET_USER](state, payload) {
    state.user = payload;
  },
  [SET_LOGGED_IN](state, payload) {
    state.user = payload;
  },
  [RECEIVE_JOBS](state: GlobalState, jobs: Job[]) {
    state.jobs = jobs;
  },
  [ADD_SELECTED_ORGANIZATIONS](state: GlobalState, organizations: string[]) {
    state.selectedOrganizations = organizations;
  },
  [ADD_SELECTED_JOB_TYPES](state: GlobalState, jobTypes: string[]) {
    state.selectedJobTypes = jobTypes;
  },
  [ADD_SELECTED_DEGREES](state: GlobalState, degrees: string[]) {
    state.selectedDegrees = degrees;
  },
  [UPDATE_SKILLS_SEARCH_TERM](state: GlobalState, skillsSearchTerm: string) {
    state.skillsSearchTerm = skillsSearchTerm;
  },
  [UPDATE_LOCATIONS_SEARCH_TERM](state: GlobalState, locationsSearchTerm: string) {
    state.locationsSearchTerm = locationsSearchTerm;
  },
  [UPDATE_REMOTE_SEARCH_TERM](state: GlobalState, remoteSearchTerm: string) {
    state.remoteSearchTerm = remoteSearchTerm;
  },
  [CLEAR_USER_JOB_FILTER_SELECTIONS](state: GlobalState) {
    state.selectedOrganizations = [];
    state.selectedJobTypes = [];
    state.selectedDegrees = [];
    state.skillsSearchTerm = "";
    state.locationsSearchTerm = "";
    state.remoteSearchTerm = "";
  },
};

export default mutations;
