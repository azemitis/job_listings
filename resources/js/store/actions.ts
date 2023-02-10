import { Commit } from "vuex";

import getJobs from "../api/getJobs";
import { FETCH_JOBS, RECEIVE_JOBS, LOAD_USER, LOGOUT } from "./constants";
import { isLoggedIn, logOut } from "../utils/auth";

import axios from "axios";

interface Context {
  commit: Commit;
}

const actions = {
  [FETCH_JOBS]: async (context: Context) => {
    const jobListings = await getJobs();
    context.commit(RECEIVE_JOBS, jobListings);
  },
  [LOAD_USER]: async ({ commit, dispatch }) => {
    if (isLoggedIn()) {
        try {
            const user = (await axios.get("/user")).data;
            commit("SET_USER", user);
            commit("SET_LOGGED_IN", true);
        } catch (error) {
            dispatch("logout");
        }
    }
  },
  logout({ commit }) {
    commit("SET_USER", {});
    commit("SET_LOGGED_IN", false);
    logOut();
}
};

export default actions;